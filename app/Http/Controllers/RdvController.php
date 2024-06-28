<?php

namespace App\Http\Controllers;

use App\Models\Horaire;
use App\Models\Rdv;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Doctor;
use Illuminate\Support\Facades\Session;
use Twilio\Rest\Client;
use Auth;

class RdvController extends Controller
{

    public function store()
    {
        $doctor_id = Session::get('doctor_id');
        $horaire = Session::get('selected_time');
        $jour = Session::get('selected_date');
        $motif = Session::get('motif');
        $patient_id = Auth::guard('patient')->user()->id;

        if (!$doctor_id || !$patient_id) {
            return response()->json(['error' => 'Informations du docteur ou du patient manquantes dans la session.'], 400);
        }

        $time = Carbon::createFromFormat('g:i A', $horaire)->format('H:i:s');

        if (!Carbon::createFromFormat('Y-m-d', $jour)) {
            return response()->json(['error' => 'Format de date invalide.'], 400);
        }

        $date = Carbon::createFromFormat('Y-m-d', $jour)->toDateString();
        Rdv::create([
            'doctor_id' => $doctor_id,
            'patient_id' => $patient_id,
            'motif' => $motif,
            'horaire' => $time,
            'jour' => $date,
        ]);

        return response()->json(['success' => 'Rendez-vous enregistré avec succès.']);
    }


    private function translateFrenchMonthToEnglish($frenchMonth)
    {
        $months = [
            'janvier' => 1,
            'février' => 2,
            'mars' => 3,
            'avril' => 4,
            'mai' => 5,
            'juin' => 6,
            'juillet' => 7,
            'août' => 8,
            'septembre' => 9,
            'octobre' => 10,
            'novembre' => 11,
            'décembre' => 12,
        ];

        return $months[strtolower($frenchMonth)] ?? false;
    }


    public function sendCode(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'motif' => 'required|string',
            'phone' => 'required|numeric|digits:10'
        ]);

        $phone = '+212' . substr($request->phone, 1);
        $motif = $request->input('motif');

        $code = rand(10000, 99999);

        Session::put('confirmation_code', $code);
        Session::put('motif', $motif);
        Session::put('phone', $phone);
        Session::put('nom', $request->nom);
        Session::put('prenom', $request->prenom);

        $sid = env('TWILIO_SID');
        $token = env('TWILIO_TOKEN');
        $twilio = new Client($sid, $token);

        $twilio->messages->create(
            $phone,
            [
                'from' => env('TWILIO_FROM'),
                'body' => 'Bonjour Mr ' . $request->nom . ', Votre code de confirmation est ' . $code
            ]
        );

        return view('code-confirmation');
    }

    public function verifierCode(Request $request)
    {
        $request->validate([
            'verification_code' => 'required|numeric'
        ]);
        $verificationCode = Session::get('confirmation_code');

        if ($request->verification_code == $verificationCode) {
            return redirect()->route('rdv.store');
        }

        return redirect()->route('codeForm')->with('error', 'Le code de confirmation est incorrecte!.');
    }

    public function storeSelectedTime(Request $request)
    {
        $request->validate([
            'time' => 'required|string',
            'date' => 'required|string'
        ]);

        session([
            'selected_time' => $request->input('time'),
            'selected_date' => $request->input('date')
        ]);

        return redirect()->route('rdvTelephone');
    }


    public function index($doctor_id)
    {
        $rdvs = Rdv::where('doctor_id', $doctor_id)->get();
        $doctor = Doctor::where('id', $doctor_id)->first();
        Session::put('doctor_id', $doctor_id);

        $horaires_reserves = $rdvs->groupBy('jour')->map(function ($group) {
            return $group->pluck('horaire')->toArray();
        })->toArray();

        $jours = [];
        for ($i = 0; $i < 7; $i++) {
            $jours[] = Carbon::now()->addDays($i);
        }

        return view('rdv', compact('doctor', 'horaires_reserves', 'jours'));
    }


    public function cancelRdv(Request $request)
    {
        $rdv = Rdv::find($request->rdv_id);
        if ($rdv) {
            $rdv->etat = 'annule'; 
            $rdv->save();
            return response()->json(['success' => 'Rendez-vous annulé avec succès.']);
        } else {
            return response()->json(['error' => 'Rendez-vous non trouvé.'], 404);
        }
    }

    public function acceptRdv(Request $request)
    {
        $rdv = Rdv::find($request->rdv_id);
        if ($rdv) {
            $rdv->etat = 'accepte'; 
            $rdv->save();
            return response()->json(['success' => 'Rendez-vous accepté avec succès.']);
        } else {
            return response()->json(['error' => 'Rendez-vous non trouvé.'], 404);
        }
    }




}
