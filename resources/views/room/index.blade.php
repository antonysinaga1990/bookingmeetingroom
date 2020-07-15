@extends('layouts.app')
@section('content')
<div class="mb-2">
@hasanyrole('administrator|manager|supervisor')
<a class="btn btn-success" href={{url("room/formadd") }}>Create</a>
@endhasanyrole
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Meeting Room List</h6>
    </div>  
            <div class="card-body">
                <table class="table table-striped">      
                <tr>
                <th>Room Id</th>
                <th>Description</th>
                <th>Status</th>
                @hasanyrole('administrator|manager')
                <th>Update</th>
                @endhasanyrole
                @hasrole('administrator')
                <th>delete</th>
                @endhasrole
                </tr>
                @foreach ($data as $room)    
                <tr>
                    <td>
                        {{ $room->id }}
                    </td>
                    <td>
                        {{ $room->name }}
                    </td>
                    <td>
                        {{ $room->Active_Deactive }}
                    </td>
                    @hasanyrole('administrator|manager')
                    <td>
                        <a class="btn btn-info" href={{url("/room/{$room->id}/update ") }}>update</a>
                    </td>
                    @endhasanyrole
                    @hasrole('administrator')
                    <td>
                        <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"  href={{url("/room/{$room->id}/delete") }}>delete</a>
                    </td>
                    @endhasrole
                </tr>
            @endforeach
            </table>
            </div>
</div>
@endsection

