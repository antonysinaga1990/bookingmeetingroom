@extends('layouts.app')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Rooom Form Add</h6>
        </div>
        <div class="card-body"> 
            <form action="{{ url('room') }}" method="POST">
                @csrf 
                
                <div class="form-group">
                    <label for="room_name">Room Name</label>
                    <input type="text" name="room_name" class="form-control" >
                </div>
                
                <div class="form-group">
                    <label for="room_status">Room Status</label>
                    <input type="text" name="room_status" class="form-control" >
                </div>
                
                <p>
                    <input type="submit" class="btn btn-primary" value="save">
                    <a class="btn btn-danger" href={{url("/room") }}>cancel</a>
                </p>
                    
            </form>
        </div>
    </div>
@endsection