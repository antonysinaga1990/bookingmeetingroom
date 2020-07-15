@extends('layouts.app')
@section('content')
<div class="mb-2">
<a class="btn btn-success" href={{url("division/formadd") }}>Create</a>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Division List</h6>
    </div>  
        <div class="card-body">
            <table class="table table-striped">      
                <tr>
                    <th>Division Id</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Update</th>
                    <th>delete</th>
                </tr>
                @foreach ($data as $division)    
                <tr>
                    <td>
                    {{ $division->id }}
                    </td>
                    <td>
                        {{ $division->name }}
                    </td>
                    <td>
                        {{ $division->Active_Deactive }}
                    </td>
                    <td>
                        <a class="btn btn-info" href={{url("/division/{$division->id}/update ") }}>update</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"  href={{url("/division/{$division->id}/delete") }}>delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
</div>    
@endsection
