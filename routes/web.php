<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Route::get('/doctor', function () {
    return view('doctor');
})->name('doctor');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('patientRegister', [App\Http\Controllers\PatientController::class, 'register'])
    ->name('patientRegister');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');

//login
Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [App\Http\Controllers\LoginController::class, 'login'])
    ->name('login');

//dashboard

Route::get('dashboard/', function () {
    return view('doctor.dashboard.dashboard');
});

Route::get('index/', function () {
    return view('doctor.dashboard.index');
});

Route::get('/profile-settings-hours', function () {
    return view('doctor.dashboard.profile-settings-hours');
})->name('profile-settings-hours');

Route::get('/profile-settings-details', function () {
    return view('doctor.dashboard.profile-settings-details');
})->name('profile-settings-details');

Route::get('/profile-settings-experiences', function () {
    return view('doctor.dashboard.profile-settings-experiences');
})->name('profile-settings-experiences');

// doctor hours 

Route::post('/set-profile-hours-settings', [App\Http\Controllers\HoraireController::class, 'update'])
->name('set-profile-hours-settings');