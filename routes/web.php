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

Route::get('/halaman_utama','Puninarcontroller@index');
Route::get('/truck','Puninarcontroller@truck');
Route::post('/truck/store','Puninarcontroller@truck_store');
Route::get('/truck/edit/{ID_POWER_UNIT}','Puninarcontroller@truck_edit');
Route::post('/truck/update','Puninarcontroller@truck_update');
Route::get('/truck/delete/{ID_POWER_UNIT}','Puninarcontroller@truck_delete');
