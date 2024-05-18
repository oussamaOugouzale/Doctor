<?php

namespace App\Http\Controllers;

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
        $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required'
            ]
        );
        $email = $request->email;
        $password = $request->password;
        $patient = Patient::where('email', $email)->first();

        if ($patient == null) {
            return back()->WithInput(['password' => $password])->withErrors([
                'email' => 'Aucun utilisateur trouvé'
            ]);
        } else {
            if (!Hash::check($password, $patient->password))
                return back()->WithInput(['email' => $email])->withErrors([
                    'password' => 'mot de passe invalide'
                ]);
            else {
                return redirect()->route('home');
            }
        }

    }
}

