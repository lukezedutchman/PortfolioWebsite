<?php

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

Route::get('/schedule_appointment', function () {
    return view('/sales/sales_schedule_appointment');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
