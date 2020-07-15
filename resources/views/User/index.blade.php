@extends('layouts.app')
@section('content')
<div class="mb-2">
@hasanyrole('administrator|manager|supervisor')
<a class="btn btn-success" href={{url("user/formadd") }}>Create</a>
@endhasanyrole
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">User List</h6>
    </div>  
            <div class="card-body">
                <table class="table table-striped">      
                    <tr>
                        <th>User Id</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Division</th>
                        @hasanyrole('administrator|manager')
                        <th>Update</th>
                        @endhasanyrole
                        @hasrole('administrator')
                        <th>Delete</th>
                        @endhasrole
                    </tr>
                    @foreach ($data as $user)    
                    <tr>
                        <td>
                        {{ $user->id }}
                        </td>
                        <td>
                            {{ $user->name }}
                        </td>
                        <td>
                            {{ $user->email }}
                        </td>
                        <td>
                            {{ $user->division->name }}
                        </td>
                        @hasanyrole('administrator|manager')
                        <td>
                            <a class="btn btn-info" href={{url("/user/{$user->id}/update ") }}>update</a>
                        </td>
                        @endhasanyrole
                        @hasrole('administrator')
                        <td>
                            <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"  href={{url("/user/{$user->id}/delete") }}>delete</a>
                        </td>
                        @endhasrole
                    </tr>
                @endforeach
                </table>
            </div>
</div>    
@endsection