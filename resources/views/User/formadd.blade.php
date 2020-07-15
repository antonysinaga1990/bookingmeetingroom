@extends('layouts.app')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">User Form Add</h6>
        </div>
        <div class="card-body"> 
            <form action="{{ url('user') }}" method="POST">
                @csrf 
                
                <div class="form-group">
                    <label for="user_name">User Name</label>
                    <input type="text" name="user_name" class="form-control" >
                </div>
                
                <div class="form-group">
                    <label for="user_email">Email</label>
                    <input type="text" name="user_email" class="form-control" >
                </div>

                <div class="form-group">
                    <label for="division_id">Division Name</label>
                        <select class="custom-select" name="division_id">
                            @foreach ($data as $id_division)
                                <option value= {{ $id_division->id }}> {{$id_division->name}} </option>
                            @endforeach
                        </select>
                </div>

                <div class="form-group">
                    <label for="user_status">Status</label>
                    <select class="custom-select" name="user_status">
                        <option>Choose User Status</option>
                        <option value="TRUE">Active</option>
                        <option value="FALSE">Pending</option>
                    </select>
                </div>
                
                <p>
                    <input type="submit" class="btn btn-primary" value="save">
                    <a class="btn btn-danger" href={{url("/user") }}>cancel</a>
                </p>
                    
            </form>
        </div>
    </div>
@endsection