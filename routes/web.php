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

/*

Route::get('/', function () {
    return view('../auth/login');
});

Route::get('/schedule_appointment', function () {
    return view('/development/development_schedule_appointment');
});

Route::get('/create_client', function () {
    return view('/sales/sales_create_client');
});

Route::get('/create_project', function () {
    return view('/sales/sales_create_project');
});

Route::get('/appointments', function () {
    return view('/sales/sales_appointments');
});




Route::get('/home', 'HomeController@index')->name('home');

Route::get('/finance', function () {
    return view('/finance/finance_index');
});
Route::get('/create_invoice', function() {
    return view('/finance/finance_create_invoice');
});

*/

/*  Finance pages  */

Route::get('/', 'HomeController@index');

Route::get('/finance', 'FinanceController@index');
Route::get('/finance/create', 'FinanceController@create');
Route::get('/finance/client', 'FinanceController@client');
Route::get('/finance/overview', 'FinanceController@overview');

/*  Sales pages  */

Route::get('/sales', 'SalesController@index');
Route::get('/sales/schedule', 'SalesController@schedule');
Route::get('/sales/client', 'SalesController@client');
Route::get('/sales/create', 'SalesController@create');

/*  Development pages  */

Route::get('/development', 'DevelopmentController@index');
Route::get('/finance/schedule-appointment', 'FinanceController@show');
Route::get('/finance/client-information', 'FinanceController@show');
Route::get('/finance/create-client', 'FinanceController@show');

/*  Admin check route */

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');








Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index');



Route::get('/administrator', function () {
    return view('/administrator/administrator');
});


Auth::routes();
