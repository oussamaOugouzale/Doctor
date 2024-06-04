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
Route::get('/connexion', function () {
    return view('login');
})->name('loginForm');

Route::post('/login', [App\Http\Controllers\LoginController::class, 'login'])
    ->name('login');

//dashboard




// doctor hours 

Route::middleware('auth')->group(function () {
    Route::post('/set-profile-hours-settings', [App\Http\Controllers\HoraireController::class, 'update'])
        ->name('set-profile-hours-settings');
    Route::get('dashboard/', function () {
        return view('doctor.dashboard.dashboard');
    })->name('dashboard');
    Route::middleware('doctorMiddleware')->group(function () {
        Route::get('/profile-settings-hours', function () {
            return view('doctor.dashboard.profile-settings-hours');
        })->name('profile-settings-hours');
    });
    Route::get('/profile-settings-details', function () {
        return view('doctor.dashboard.profile-settings-details');
    })->name('profile-settings-details');

    Route::get('/profile-settings-experiences', function () {
        return view('doctor.dashboard.profile-settings-experiences');
    })->name('profile-settings-experiences');
    Route::get('/profile-settings-coordonnes', function () {
        return view('doctor.dashboard.profile-settings-coordonnes');
    })->name('profile-settings-coordonnes');
    Route::get('/profile-settings-formations', function () {
        return view('doctor.dashboard.profile-settings-formations');
    })->name('profile-settings-formations');
    Route::get('/profile-settings-pratiques', function () {
        return view('doctor.dashboard.profile-settings-pratiques');
    })->name('profile-settings-pratiques');

    //logout
    Route::get('/doctor-logout', [App\Http\Controllers\LoginController::class, 'logout'])
        ->name('doctorLogout');
    //doctor informations
    Route::post('/doctorInformations', [App\Http\Controllers\DoctorController::class, 'Information'])
        ->name('doctorInformations');
    //doctor Coordonnes
    Route::post('/doctorCoordonnes', [App\Http\Controllers\DoctorController::class, 'coordonne'])
        ->name('doctorCoordonnes');
    //doctor pratiques
    Route::post('/doctorPratiques', [App\Http\Controllers\DoctorController::class, 'uploadPhotos'])
        ->name('doctorPratiques');
    //doctor formations
    Route::post('/doctorFormations', [App\Http\Controllers\DoctorController::class, 'store'])
        ->name('doctorFormation');

});

//doctor show
Route::get('/doctor/{id}', [App\Http\Controllers\DoctorSearchController::class, 'show'])->name('doctorShow');
//doctor search

Route::post('/médecin', [App\Http\Controllers\DoctorSearchController::class, 'search'])
    ->name('doctorSearch');

