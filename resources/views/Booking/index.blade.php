@extends('layouts.app')
@section('content')
<div class="mb-2">
    <a class="btn btn-success" href={{url("booking/formadd") }}>Book Room</a>

</div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Booking List</h6>
        </div>  
        
                <div class="card-body">

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#all" role="tab" aria-controls="home" aria-selected="true">All</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#active" role="tab" aria-controls="profile" aria-selected="false">Active</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#deactive" role="tab" aria-controls="contact" aria-selected="false">Deactive</a>
                        </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="home-tab">
                            <table class="table table-striped">      
                                <tr>
                                    <th>Booking Id</th>
                                    <th>User</th>
                                    <th>Room</th>
                                    <th>Start Date</th>
                                    <th>Start Hour</th>
                                    <th>End Date</th>
                                    <th>End Hour</th>
                                    <th>Status</th>
                                    <th>Update</th>
                                    <th>Cancel</th>
                                </tr>
                                @foreach ($alldata as $booking)    
                                <tr>
                                    <td>
                                        {{ $booking->id }}
                                      </td>
                                      <td>
                                          {{ $booking->user->name }}
                                      </td>
                                      <td>
                                          {{ $booking->room->name }}
                                      </td>
                                      <td>
                                          {{ $booking->booking_start_date }}
                                      </td>
                                      <td>
                                          {{ $booking->booking_time_start }}
                                      </td>
                                      <td>
                                          {{ $booking->booking_end_date }}
                                      </td>
                                      <td>
                                        {{ $booking->booking_time_end }}
                                    </td>
                                    <td>
                                        {{ $booking->Active_Deactive }}
                                    </td>
                                     <td>
                                          <a class="btn btn-info" href={{url("/booking/{$booking->id}/update ") }}>update</a>
                                      </td>
                                      <td>
                                          <a class="btn btn-danger" onclick="return confirm('Are you sure you want to cancel this booking?');"  href={{url("/booking/{$booking->id}/delete ") }}>cancel</a>
                                      </td>
                                </tr>
                            @endforeach
                            </table>
                        </div>
                        <div class="tab-pane fade" id="active" role="tabpanel" aria-labelledby="profile-tab">
                            <table class="table table-striped">      
                                <tr>
                                    <th>Booking Id</th>
                                    <th>User</th>
                                    <th>Room</th>
                                    <th>Start Date</th>
                                    <th>Start Hour</th>
                                    <th>End Date</th>
                                    <th>End Hour</th>
                                    <th>Status</th>
                                    <th>Update</th>
                                    <th>Cancel</th>
                                </tr>
                                @foreach ($activedata as $booking)    
                                <tr>
                                    <td>
                                        {{ $booking->id }}
                                      </td>
                                      <td>
                                          {{ $booking->user->name }}
                                      </td>
                                      <td>
                                          {{ $booking->room->name }}
                                      </td>
                                      <td>
                                          {{ $booking->booking_start_date }}
                                      </td>
                                      <td>
                                          {{ $booking->booking_time_start }}
                                      </td>
                                      <td>
                                          {{ $booking->booking_end_date }}
                                      </td>
                                      <td>
                                        {{ $booking->booking_time_end }}
                                    </td>
                                    <td>
                                        {{ $booking->Active_Deactive }}
                                        
                                    </td>
                                     <td>
                                          <a class="btn btn-info" href={{url("/booking/{$booking->id}/update ") }}>update</a>
                                      </td>
                                      <td>
                                          <a class="btn btn-danger" onclick="return confirm('Are you sure you want to cancel this booking?');"  href={{url("/booking/{$booking->id}/delete ") }}>cancel</a>
                                      </td>
                                </tr>
                            @endforeach
                            </table>
                        </div>
                        <div class="tab-pane fade" id="deactive" role="tabpanel" aria-labelledby="contact-tab">
                            <table class="table table-striped">      
                                <tr>
                                    <th>Booking Id</th>
                                    <th>User</th>
                                    <th>Room</th>
                                    <th>Start Date</th>
                                    <th>Start Hour</th>
                                    <th>End Date</th>
                                    <th>End Hour</th>
                                    <th>Status</th>
                                    <th>Update</th>
                                    <th>Cancel</th>
                                </tr>
                                @foreach ($deactivedata as $booking)    
                                <tr>
                                    <td>
                                        {{ $booking->id }}
                                      </td>
                                      <td>
                                          {{ $booking->user->name }}
                                      </td>
                                      <td>
                                          {{ $booking->room->name }}
                                      </td>
                                      <td>
                                          {{ $booking->booking_start_date }}
                                      </td>
                                      <td>
                                          {{ $booking->booking_time_start }}
                                      </td>
                                      <td>
                                          {{ $booking->booking_end_date }}
                                      </td>
                                      <td>
                                        {{ $booking->booking_time_end }}
                                    </td>
                                    <td>
                                        {{ $booking->Active_Deactive }} 
                                    </td>
                                     <td>
                                          <a class="btn btn-info" href={{url("/booking/{$booking->id}/update ") }}>update</a>
                                      </td>
                                      <td>
                                          <a class="btn btn-danger" onclick="return confirm('Are you sure you want to cancel this booking?');"  href={{url("/booking/{$booking->id}/delete ") }}>cancel</a>
                                      </td>
                                </tr>
                            @endforeach
                            </table>
                        </div>
                      </div>

                    
                </div>
    </div>    
@endsection
