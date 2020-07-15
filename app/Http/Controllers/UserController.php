<?php

namespace App\Http\Controllers;
use App\User;
use App\Division;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $getuser = User::all();
        return view('user/index', ['data' => $getuser]);
    }

    public function form(){
        $getdatadivision = Division::all();
        return view('user/formadd', ['data' => $getdatadivision]);
    }

    public function save(Request $request){
        //echo $request;
        $adduser = new User(); 
        $adduser->id_user = Auth::id();
        $adduser->name = $request->input('user_name');
        $adduser->email = $request->input('user_email');
        $adduser->id_division = $request->input('division_id');
        $adduser->status = $request->input('user_status');
        $adduser->created_by=Auth::id();
        $adduser->modified_by=Auth::id();
        $adduser->save();
        return redirect('user/');
    }

    public function update($id){
        $getdatauser = User::find($id);
        $getdatadivision = Division::all();
        return view('user/formupdate', ['datauser' => $getdatauser, 'datadivision' => $getdatadivision]);
    }

    public function actionupdate(Request $request){
        $updatedatauser = User::find($request->input('id'));
        $updatedatauser->name = $request->input('user_name');
        $updatedatauser->email = $request->input('user_email');
        $updatedatauser->id_division = $request->input('division_id');
        $updatedatauser->status = $request->input('user_status');
        $updatedatauser->modified_by=Auth::id();
        $updatedatauser->save();
        return redirect('user/');
    }

    public function actiondelete($id){
        $deletedatauser = User::find($id);
        $deletedatauser->status = 'FALSE';
        $deletedatauser->save();
        return redirect('user/');
    }
}
