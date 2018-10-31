<?php

Route::group(['middleware' => ['web']], function(){
    Route::get('/','MainController@home');
    Route::get('cv','MainController@cv');
    Route::get('gallery','MainController@gallery');
    Route::get('upload','MainController@upload');
    Route::get('login','MainController@login');
    Route::get('upload', 'MainController@upload');
    Route::get('register', 'MainController@register');

    Route::post('image-upload', 'MainController@imageUpload')->name('UploadImage');

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
