@extends('layouts.app')
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Update Division Form</h6>
    </div>
    <div class="card-body">
        <form action="{{ url('division') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$datadivision->id}}">
        <input type="hidden" name="_method" value="PUT">

        <div class="form-group">
            <label for="name">Division Name</label>
            <input type="text" value="{{$datadivision->name}}" name="division_name" class="form-control">
        </div>

        <div class="form-group">
            <label for="division_status">Status</label>
            <select class="custom-select" value="{{$datadivision->status}}" name="division_status">
                <option value="TRUE">Active</option>
                <option value="FALSE">Pending</option>
            </select>
        </div>

        <p>
            <input type="submit" class="btn btn-primary" value="save">
            <a class="btn btn-danger" href={{url("/division") }}>cancel</a>
        </p>

        </form>    
    </div>
</div>


@endsection