<?php
namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Rdv;

class PatientController extends Controller
{


    public function settings()
    {
        return view('patient.dashboard.pat-profile-settings');
    }
    public function information(Request $request)
    {
        $request->validate([
            'genre' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'numero_tel' => 'required',
            'email' => 'required|email',
            'age' => 'required',
            'photo' => 'required|image|max:4096',
        ]);

        $patient = auth()->guard('patient')->user();

        $patient->genre = $request->genre;
        $patient->nom = $request->nom;
        $patient->prenom = $request->prenom;
        $patient->numero_tel = $request->numero_tel;
        $patient->email = $request->email;
        $patient->age = $request->age;

        if ($request->hasFile('photo')) {
            $photoFile = $request->file('photo');
            $photoFileName = time() . '_' . $photoFile->getClientOriginalName();
            $photoFilePath = $photoFile->move(public_path('documents'), $photoFileName);
            $patient->photo = 'documents/' . $photoFileName;
        }

        $patient->save();

        return redirect()->back()->with('success', 'Informations mises à jour avec succès !');

    }
    public function appointment()
    {
        $rdvs = Auth::guard('patient')->user()->rdv()->get();
        $aVenir = Rdv::where('etat', null)->count();
        $annule = Rdv::where('etat', 'annule')->count();
        $complete = Rdv::where('etat', 'accepte')->count();
        if ($rdvs->isEmpty())
            return view('patient.dashboard.pat-appointments');
        else
            return view('patient.dashboard.pat-appointments', compact('rdvs', 'aVenir', 'annule', 'complete'));
    }
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'genre' => 'required|in:femme,homme',
            'user_type' => 'required',
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
        $user_type = $request->user_type;
        if ($user_type === 'patient') {
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
                return back();
            }
        } else {
            $doctor = new Doctor();
            $doctor->prenom = $request->prenom;
            $doctor->nom = $request->nom;
            $doctor->genre = $request->genre;
            $doctor->numero_tel = $request->numéro;
            $doctor->email = $request->email;
            $doctor->password = Hash::make($request->password);

            if ($doctor->save()) {
                $request->session()->regenerate();
                return redirect()->route('dashboard');
            } else {
                return back();
            }
        }
    }

    public function password(Request $request)
    {
        $request->validate(
            [
                'oldPassword' => 'required|string',
                'newPassword' => 'required|string|confirmed',
            ]
        );
        $oldPassword = $request->oldPassword;
        $newPassword = $request->newPassword;
        $confirmedPassword = $request->newPassword_confirmation;
        $user = Auth::guard('patient')->user();
        if (!Hash::check($oldPassword, $user->password)) {
            return back()->withInput()->withErrors([
                'password' => 'Mot de passe invalide'
            ]);
        } else {
            $user->update([
                'password' => Hash::make($request->newPassword),
            ]);
            return back()->with('success', 'mot de passe a été modfier avec succès');
        }


    }

}
