<?php

namespace App\Http\Controllers;
use App\Booking;
use App\User;
use App\Room;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(){
        $getbooking = Booking::orderBy('booking_start_date', 'DESC')->get();
        $getactive = Booking::where('status', 1) ->orderBy('booking_start_date', 'DESC')-> get();
        $getdeactive = Booking::where('status', 0)->orderBy('booking_start_date', 'DESC')-> get();
        return view('booking/index', ['alldata' => $getbooking, 'activedata' => $getactive, 'deactivedata' => $getdeactive]);
    }


    public function form(){
        $getdataroom = Room::all();
        return view('booking/formadd', ['data' => $getdataroom]);
    }

    public function save(Request $request){
        //echo $request
        $addbooking = new Booking(); 
        $addbooking->id_user = Auth::id();
        $addbooking->id_room = $request->input('room_id');
        $addbooking->booking_start_date = $request->input('booking_start_date');
        $addbooking->booking_end_date = $request->input('booking_end_date');
        $addbooking->status = $request->input('booking_status');
        $addbooking->created_by=Auth::id();
        $addbooking->modified_by=Auth::id();
        $addbooking->save();
        return redirect('booking/');
    }

    //ini function update
    public function update($id){
        $getdatabooking = Booking::find($id);
        $getdataroom = Room::all();
        return view('booking/formupdate', ['dataroom' => $getdataroom, 'databooking' => $getdatabooking]);
    }

    public function actionupdate(Request $request){
        $updatedatabooking = Booking::find($request->input('id'));
        $updatedatabooking->id_room = $request->input('room_id');
        $updatedatabooking->booking_start_date = $request->input('booking_start_date');
        $updatedatabooking->booking_end_date = $request->input('booking_end_date');
        $updatedatabooking->status = $request->input('booking_status');
        $updatedatabooking->modified_by=Auth::id();
        $updatedatabooking->save();
        return redirect('booking/');
    }

    public function actiondelete($id){
        $deletedatabooking = Booking::find($id);
        $deletedatabooking->status = 0;
        $deletedatabooking->save();
        return redirect('booking/');
    }
}
