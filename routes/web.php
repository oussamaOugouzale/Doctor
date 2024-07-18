<?php

use Illuminate\Support\Facades\Route;

// Page d'accueil
Route::get('/', function () {
    return view('home');
});

// Page des docteurs
Route::get('/doctor', function () {
    return view('doctor');
})->name('doctor');

// Page d'inscription
Route::get('/register', function () {
    return view('register');
})->name('register');

// Inscription des patients
Route::post('patientRegister', [App\Http\Controllers\PatientController::class, 'register'])
    ->name('patientRegister');

// Page d'accueil après connexion
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');

// Formulaire de connexion
Route::get('/connexion', function () {
    return view('login');
})->name('loginForm');

// Connexion
Route::post('/login', [App\Http\Controllers\LoginController::class, 'login'])
    ->name('login');

// Gestion des horaires des docteurs
Route::middleware('auth')->group(function () {
    Route::post('/set-profile-hours-settings', [App\Http\Controllers\HoraireController::class, 'update'])
        ->name('set-profile-hours-settings');

    // Tableau de bord des docteurs
    Route::get('dashboard/', [App\Http\Controllers\DoctorController::class, 'index'])->name('dashboard');

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

    // Déconnexion
    Route::get('/doctor-logout', [App\Http\Controllers\LoginController::class, 'logout'])
        ->name('doctorLogout');


    // Informations des docteurs
    Route::post('/doctorInformations', [App\Http\Controllers\DoctorController::class, 'Information'])
        ->name('doctorInformations');

    // Coordonnées des docteurs
    Route::post('/doctorCoordonnes', [App\Http\Controllers\DoctorController::class, 'coordonne'])
        ->name('doctorCoordonnes');

    // Pratiques des docteurs
    Route::post('/doctorPratiques', [App\Http\Controllers\DoctorController::class, 'uploadPhotos'])
        ->name('doctorPratiques');

    // Formations des docteurs
    Route::post('/doctorFormations', [App\Http\Controllers\DoctorController::class, 'store'])
        ->name('doctorFormation');


    //doctor appointment 
    Route::get('/doctor-appointment', [App\Http\Controllers\DoctorController::class, 'appointment'])
        ->name('appointment');

    //doctor password 
    Route::post('/doctor-change-password', [App\Http\Controllers\DoctorController::class, 'password'])
        ->name('doctor-change-password');
    Route::get(
        '/doctor-password',
        function () {
            return view('doctor.dashboard.password');
        }
    )
        ->name('doctor-password');
});

// Affichage d'un docteur
Route::get('/doctor/{id}', [App\Http\Controllers\DoctorSearchController::class, 'show'])->name('doctorShow');

Route::middleware('patAuth')->group(function () {

    // Prise de rendez-vous
    Route::get('/rdv/{id}', [App\Http\Controllers\RdvController::class, 'index'])->name('prendreRdv');

    // Recherche de docteurs


    // Confirmation de rendez-vous par téléphone
    Route::get('/rdv-confirmation-téléphone', function () {
        return view('rdv-telephone');
    })->name('rdvTelephone');

    // Envoi de code de confirmation
    Route::post('/send-code', [App\Http\Controllers\RdvController::class, 'sendCode'])
        ->name('sendCode');

    // Vérification du code de confirmation
    Route::post('/verifie-code', [App\Http\Controllers\RdvController::class, 'verifierCode'])
        ->name('verifierCode');

    // Formulaire de confirmation du code
    Route::get('/code-confirmation', function () {
        return view('code-confirmation');
    })->name('codeForm');

    Route::get('/rdv', [App\Http\Controllers\RdvController::class, 'store'])->name('rdv.store');
    Route::post('/store-selected-time', [App\Http\Controllers\RdvController::class, 'storeSelectedTime'])->name('storeSelectedTime');


    Route::get('/patient-dashboard', [App\Http\Controllers\PatientController::class, 'appointment'])->name('pat-appointments');
    //profile seetings
    Route::get('/patient-profile-settings', [App\Http\Controllers\PatientController::class, 'settings'])->name('pat-profile-settings');
    Route::post('/patient-profile-settings-update', [App\Http\Controllers\PatientController::class, 'information'])->name('pat-profile-settings-update');

    //logout
    Route::get('/patient-logout', [App\Http\Controllers\LoginController::class, 'logoutPatient'])
        ->name('patientLogout');


    //patient change password 
    Route::post('/patient-change-password', [App\Http\Controllers\PatientController::class, 'password'])
        ->name('patient-change-password');
    Route::get(
        '/patient-password',
        function () {
            return view('patient.dashboard.password');
        }
    )
        ->name('patient-password');
});


Route::post('/cancel-rdv', [App\Http\Controllers\RdvController::class, 'cancelRdv'])->name('cancelRdv');
Route::post('/accept-rdv', [App\Http\Controllers\RdvController::class, 'acceptRdv'])->name('acceptRdv');

Route::post('/médecin', [App\Http\Controllers\DoctorSearchController::class, 'search'])
    ->name('doctorSearch');