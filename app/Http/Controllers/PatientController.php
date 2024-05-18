<?php
namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'genre' => 'required|in:femme,homme',
            'numéro' => 'required|regex:/^[0-9]{10}$/',
            'email' => ['required', 'email', Rule::unique('patients')],
            'password' => [
                'required',
                Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
                    ->uncompromised()
            ]
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        }

        $patient = new Patient();
        $patient->prenom = $request->prenom;
        $patient->nom = $request->nom;
        $patient->genre = $request->genre;
        $patient->numero_tel = $request->numéro;
        $patient->email = $request->email;
        $patient->password = Hash::make($request->password);

        if ($patient->save()) {
            $request->session()->regenerate(); 
            return redirect()->route('home');
        } else {
            return redirect()->route('home');
        }
    }
}
