<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorSearchController extends Controller
{
    public function search(Request $request)
    {
        if (!$request->filled('nom') && !$request->filled('localisation') && !$request->filled('specialite')) {
            return redirect()->back()->with('error', 'Veuillez remplir au moins un champ de recherche.');
        }

        $query = Doctor::query();

        if ($request->filled('nom')) {
            $query->where('nom', 'like', '%' . $request->nom . '%');
        }

        if ($request->filled('localisation')) {
            $query->whereHas('coordonnes', function ($q) use ($request) {
                $q->where('adresse', 'like', '%' . $request->localisation . '%');
            });
        }

        if ($request->filled('specialite')) {
            $query->whereHas('specialites', function ($q) use ($request) {
                $q->where('specialite', 'like', '%' . $request->specialite . '%');
            });
        }

        $doctors = $query->get();

        if ($doctors->isEmpty()) {
            return redirect()->back()->with('notfound', 'Aucun résultat trouvé.');
        }

        return view('doctors', compact('doctors'));

    }

    public function show($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('doctor', compact('doctor'));
    }

}
