<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Models\Patient;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Doctor::create([
        //     'nom'=> 'doctor3',
        //     'prenom'=> 'prenom3',
        //     'numero_tel'=> '3333333',
        //     'email'=> 'doc3@gmail.com',
        //     'password'=> Hash::make('Doc2004@2004'),
        //     'photo'=> 'photo',
            
        // ]);
        // Patient::create([
        //     'nom'=> 'pat1',
        //     'prenom'=> 'pattt1',
        //     'numero_tel'=> '3333333',
        //     'genre'=> 'homme',
        //     'email'=> 'pat@gmail.com',
        //     'password'=> Hash::make('Pat2004@2004'),            
        // ]);
        $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required'
            ]
        );

        $email = $request->email;
        $password = $request->password;


        $patient = Patient::where('email', $email)->first();
        $doctor = Doctor::where('email', $email)->first();

        if ($patient) {
            if (Hash::check($password, $patient->password)) {
                auth()->guard('patient')->login($patient);
                return redirect()->route('home');
            } else {
                return back()->withInput()->withErrors([
                    'password' => 'Mot de passe invalide'
                ]);
            }
        } elseif ($doctor) {
            if (Hash::check($password, $doctor->password)) {
                Auth::guard('doctor')->login($doctor);
                return redirect()->route('dashboard');
            } else {
                return back()->withInput()->withErrors([
                    'password' => 'Mot de passe invalide'
                ]);
            }
        } else {
            return back()->withInput()->withErrors([
                'email' => 'Aucun utilisateur trouvé'
            ]);
        }
    }

    public function logout(){
        Auth::guard('doctor')->logout();
        return redirect()->back();
    }
    public function logoutPatient(){
        Auth::guard('patient')->logout();
        return redirect()->back();
    }
}

