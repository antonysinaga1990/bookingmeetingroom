@extends('layouts.app')
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Update Room Form</h6>
    </div>
    <div class="card-body">
        <form action="{{ url('user') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$datauser->id}}">
        <input type="hidden" name="_method" value="PUT">

        <div class="form-group">
            <label for="name">User Name</label>
            <input type="text" value="{{$datauser->name}}" name="user_name" class="form-control">
        </div>

        <div class="form-group">
            <label for="name">Email</label>
            <input type="text" value="{{$datauser->email}}" name="user_email" class="form-control">
        </div>

        <div class="form-group">
            <label for="room_id">Division Name</label>
                <select class="custom-select" name="room_id">
                    @foreach ($datadivision as $division)
                        <option value= {{ $division->id }}> {{$division->name}} </option>
                    @endforeach
                </select>
        </div>

        <div class="form-group">
            <label for="room_status">Status</label>
            <select class="custom-select" value="{{$datadivision->status}}" name="division_status">
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