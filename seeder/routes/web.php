<?php

use Illuminate\Support\Facades\Route;


Route::get('/home', 'TestController@home')
-> name('home');

Route::get('/movie/{id}', 'TestController@movie')
-> name('movie');

Route::get('/form/movie', 'TestController@form')
    -> name('form');

Route::post('/store/movie', 'TestController@store')
    -> name('store');
