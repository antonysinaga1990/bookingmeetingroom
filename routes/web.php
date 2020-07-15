<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {

Route::get('/room', 'RoomController@index');
Route::get('/room/formadd', 'RoomController@form');
Route::post('/room', 'RoomController@save');
Route::get('/room/{id}/update', 'RoomController@update');
Route::put('/room','RoomController@actionupdate');
Route::get('/room/{id}/delete', 'RoomController@actiondelete');

Route::get('/division', 'DivisionController@index');
Route::get('/division/formadd', 'DivisionController@form');
Route::post('/division', 'DivisionController@save');
Route::get('/division/{id}/update', 'DivisionController@update');
Route::put('/division','DivisionController@actionupdate');
Route::get('/division/{id}/delete', 'DivisionController@actiondelete');

Route::get('/booking', 'BookingController@index');
Route::get('/booking/formadd', 'BookingController@form');
Route::post('/booking', 'BookingController@save');
Route::get('/booking/{id}/update', 'BookingController@update');
Route::put('/booking','BookingController@actionupdate');
Route::get('/booking/{id}/delete', 'BookingController@actiondelete');


Route::get('api/room', 'HomeController@room');

Route::group(['middleware' => ['role:administrator|manager|supervisor']], function () {
Route::get('/user', 'UserController@index');

    });

Route::group(['middleware' => ['role:administrator|manager|supervisor']], function () {
Route::get('/user/formadd', 'UserController@form');
Route::post('/user', 'UserController@save');
    });

Route::group(['middleware' => ['role:administrator|manager']], function () {
Route::get('/user/{id}/update', 'UserController@form');
Route::put('/user','UserController@actionupdate');
    });

Route::group(['middleware' => ['role:administrator|manager']], function () {
Route::get('/user/{id}/delete', 'UserController@actiondelete');
    });

});

Auth::routes();
Route::get('/app', 'AppController@index');


Route::get('/home', 'HomeController@index')->name('home');
