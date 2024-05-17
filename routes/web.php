<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function(){
    return view('home');
});

Route::get('/doctor', function(){
    return view('doctor');
})->name('doctor');

Route::get('/register', function(){
    return view('register');
})->name('register');

Route::post('patientRegister', [App\Http\Controllers\PatientController::class ,'register'])
->name('patientRegister');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
->name('patientHome');