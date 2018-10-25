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
    return view('../auth/login');
});

Route::get('/schedule_appointment', function () {
    return view('/sales/sales_schedule_appointment');
});

Auth::routes();

Route::get('/administrator', function () {
    return view('/administrator/administrator');
});




Route::get('/home', 'HomeController@index')->name('home');

Route::get('/create_invoice', function() {
    return view('/finance/finance_create_invoice');
});

Route::get ( '/search', function () {
    $data = App\Data::all ();
    return view ( '/finance/finance_client_information' )->withData ( $data );
} );