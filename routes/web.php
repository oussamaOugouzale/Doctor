<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function(){
    return view('home');
});

Route::get('/doctor', function(){
    return view('doctor');
})->name('doctor');