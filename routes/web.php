<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::GET('/', 'ContactController@index')->name('contact.index');
    Route::POST('/', 'ContactController@store')->name('contact.store');
});
