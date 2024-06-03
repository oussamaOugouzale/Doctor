<?php

namespace App\Http\Controllers;

use App\Models\Horaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;

class HoraireController extends Controller
{
    public function update(Request $request)
    {

        $horaires = $request->horaires;
        try {
            foreach ($horaires as $jour => $horaire) {
                Horaire::updateOrCreate(
                    ['jour' => $jour],
                    [
                        'debut_première' => $horaire['debut_premiere'],
                        'fin_première' => $horaire['fin_premiere'],
                        'debut_deuxième' => $horaire['debut_deuxieme'],
                        'fin_deuxième' => $horaire['fin_deuxieme'],
                        'disponible_première' => (!$horaire['debut_premiere'] == null),
                        'disponible_deuxième' => (!$horaire['debut_deuxieme'] == null),
                        'doctor_id' => Auth::guard('doctor')->user()->id,
                    ]
                );
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Une erreur est survenue lors de la modification des horaires.');
        }
        return redirect()->route('profile-settings-hours')->with('success', 'Horaires modifiés avec succès.');
    }
}
