<?php

namespace App\Http\Controllers;
use App\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DivisionController extends Controller
{
    public function index(){
        //$testdata = "Hello World";
        $getdivision = Division::all();
        return view('division/index', ['data' => $getdivision]);
    }

    public function form(){
        return view('division/formadd');
    }

    public function save(Request $request){
        //echo $request;
        $adddivision = new Division(); 
        $adddivision->name = $request->input('division_name');
        $adddivision->status = $request->input('division_status');
        $adddivision->created_by=Auth::id();
        $adddivision->modified_by=Auth::id();
        $adddivision->save();
        return redirect('division/');
    }  
    
    public function update($id){
        $getdatadivision = Division::find($id);
        return view('division/formupdate', ['datadivision' => $getdatadivision]);
    }

    public function actionupdate(Request $request){
        $updatedatadivision = Division::find($request->input('id'));
        $updatedatadivision->name = $request->input('division_name');
        $updatedatadivision->status = $request->input('division_status');
        $updatedatadivision->modified_by=Auth::id();
        $updatedatadivision->save();
        return redirect('division/');
    }

    public function actiondelete($id){
        $deletedatadivision = Division::find($id);
        $deletedatadivision->status = false;
        $deletedatadivision->modified_by=Auth::id();
        $deletedatadivision->save();
        return redirect('division/');
    }
}
