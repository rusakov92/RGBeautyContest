<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'HomeController@index');
    Route::post('/store', 'HomeController@store');

    Route::get('/login', 'Auth\AuthController@getLogin');
    Route::post('/login', 'Auth\AuthController@postLogin');
    Route::get('/logout', 'Auth\AuthController@getLogout');
});


