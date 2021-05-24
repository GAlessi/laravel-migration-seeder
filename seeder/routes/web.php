<?php

use Illuminate\Support\Facades\Route;


Route::get('/home', 'TestController@home')
-> name('home');

Route::get('/movie/{id}', 'TestController@movie')
-> name('movie');
