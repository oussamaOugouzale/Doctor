<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use PhpParser\Node\Stmt\Catch_;
use PhpParser\Node\Stmt\TryCatch;
use App\Models\Coordonne;
use App\Models\Specialite;
use App\Models\Formation;

class DoctorController extends Controller
{
    public function information(Request $request)
    {
        $request->validate([
            'genre' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'numero_tel' => 'required',
            'email' => 'required|email',
            'languages' => 'required',
            'photo' => 'required|image|max:4096',
            'document' => 'required|image|max:4096',
        ]);

        $doctor = auth()->guard('doctor')->user();

        $doctor->genre = $request->genre;
        $doctor->nom = $request->nom;
        $doctor->prenom = $request->prenom;
        $doctor->numero_tel = $request->numero_tel;
        $doctor->email = $request->email;
        $doctor->languages = $request->languages;

        if ($request->hasFile('document')) {
            $file = $request->file('document');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->move(public_path('documents'), $fileName);
            $doctor->document = 'documents/' . $fileName;
        }

        if ($request->hasFile('photo')) {
            $photoFile = $request->file('photo');
            $photoFileName = time() . '_' . $photoFile->getClientOriginalName();
            $photoFilePath = $photoFile->move(public_path('documents'), $photoFileName);
            $doctor->photo = 'documents/' . $photoFileName;
        }

        $doctor->partCompleted = true;
        $doctor->save();

        return redirect()->back()->with('success', 'Informations mises à jour avec succès !');

    }
    public function coordonne(Request $request)
    {
        
            $doctor = auth()->guard('doctor')->user();
            $coordonne = new Coordonne();
            $coordonne->adresse = $request->adresse;
            $coordonne->ville = $request->ville;
            $coordonne->delegation = $request->delegation;
            $coordonne->tele_fixe = $request->tele_fixe;
            $coordonne->tele_mobile = $request->tele_mobile;
            $coordonne->latitude = $request->latitude;
            $coordonne->longitude = $request->longitude;
            $coordonne->doctor_id = $doctor->id;
            $coordonne->partCompleted = true;
            $coordonne->save();
        
        return redirect()->back()->with('success', 'Coordonnées modifiés avec succès !');
    }
    public function store(Request $request)
    {
        $formations = $request->input('educations');
        $doctor = auth()->guard('doctor')->user();
        Specialite::create([
            'specialite' => $request->specialite,
                'autre_specialite' => $request->autre_specialite,
                'doctor_id' => $doctor->id,
        ]);
        foreach ($formations as $formation) {
            Formation::create([
                'institution_name' => $formation['institution_name'],
                'formation' => $formation['formation'],
                'start_date' => $formation['start_date'],
                'end_date' => $formation['end_date'],
                'years' => $formation['years'],
                'description' => $formation['description'],
                'doctor_id' => $doctor->id,
            ]);
        }

        return redirect()->back()->with('success', 'Formations enregistrées avec succès');
}
}