@extends('layouts.app')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Booking Form</h6>
        </div>
        <div class="card-body"> 
            <form action="{{ url('booking') }}" method="POST">
                @csrf 

                <div class="form-group">
                <label for="room_id">Room Name</label>
                    <select class="custom-select" name="room_id">
                        @foreach ($data as $id_room)
                            <option value= {{ $id_room->id }}> {{$id_room->name}} </option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="booking_start_date">Booking Start Date</label>
                    <input type="text" name="booking_start_date" class="form-control datetimepicker">
                </div>

                <div class="form-group">
                    <label for="booking_end_date">Booking End Date</label>
                    <input type="text" name="booking_end_date" class="form-control datetimepicker">
                </div>

                <div class="form-group">
                    <label for="booking_status">Status</label>
                    <select class="custom-select" name="booking_status">
                        <option>Choose Booking Status</option>
                        <option value="1">Active</option>
                        <option value="0">Pending</option>
                    </select>
                </div>

                <p>
                    <input type="submit" class="btn btn-primary" value="save">
                    <a class="btn btn-danger" href={{url("/booking") }}>cancel</a>
                </p>
                    
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
            $('.datetimepicker').datetimepicker({
            format: 'yyyy-mm-dd hh:ii:ss',
            autoclose:true
            });
    </script>
@endsection