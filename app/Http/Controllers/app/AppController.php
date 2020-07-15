<?php

namespace App\Http\Controllers;
use App\Employee; //ini untuk memanggil class model Employee yang berhubungan ke database dan table Employee
use App\Salary; // ini untuk memanggil class model Salary yang berhubungan ke database dan table Salary
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function app(){
        //$testdata = "Hello World";
        $getemp = Booking::all();
        return view('app');
    }

}

?>