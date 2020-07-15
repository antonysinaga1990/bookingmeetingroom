@extends('layouts.app')
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Update Room Form</h6>
    </div>
    <div class="card-body">
        <form action="{{ url('room') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$dataroom->id}}">
        <input type="hidden" name="_method" value="PUT">

        <div class="form-group">
            <label for="name">Room Name</label>
            <input type="text" value="{{$dataroom->name}}" name="room_name" class="form-control">
        </div>

        <div class="form-group">
            <label for="room_status">Status</label>
            <select class="custom-select" value="{{$dataroom->status}}" name="room_status">
                <option value="TRUE">Active</option>
                <option value="FALSE">Pending</option>
            </select>
        </div>

        <p>
            <input type="submit" class="btn btn-primary" value="save">
            <a class="btn btn-danger" href={{url("/room") }}>cancel</a>
        </p>

        </form>    
    </div>
</div>


@endsection