<?php

namespace App\Http\Controllers;
use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //untuk mendapatkan data user yang login, agar create by dan modified by bisa terisi ketika create lewat aplikasi

class RoomController extends Controller
{
    public function index(){
        //$testdata = "Hello World";
        $getroom = Room::all();
        return view('room/index', ['data' => $getroom]);
    }

    public function form(){
        return view('room/formadd');
    }

    public function save(Request $request){
        //echo $request;
        $addroom = new Room(); 
        $addroom->name = $request->input('room_name');
        $addroom->status = $request->input('room_status');
        $addroom->created_by=Auth::id();
        $addroom->modified_by=Auth::id();
        $addroom->save();
        return redirect('room/');
    }
    
    public function update($id){
        $getdataroom = Room::find($id);
        return view('room/formupdate', ['dataroom' => $getdataroom]);
    }

    public function actionupdate(Request $request){
        $updatedataroom = Room::find($request->input('id'));
        $updatedataroom->name = $request->input('room_name');
        $updatedataroom->status = $request->input('room_status');
        $updatedataroom->modified_by=Auth::id();
        $updatedataroom->save();
        return redirect('room/');
    }

    public function actiondelete($id){
        $deletedataroom = Room::find($id);
        $deletedataroom->status = false;
        $deletedataroom->modified_by=Auth::id();
        $deletedataroom->save();
        return redirect('room/');
    }
}