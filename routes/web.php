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
/*
Route::get('/', function () {
    return view('index0247');
});
Route::get('/index0247', function () {
    return view('index0247');
});
Route::get('/contactus0247', function () {
    return view('contactus0247');
});
Route::get('/data0247', function () {
    return view('data0247');
});
*/

Route::get('/', 'DataController@index');
Route::get('/export_excel', 'DataController@export_excel');
