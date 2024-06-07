<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use Illuminate\Http\Request;

class CandidatureController extends Controller
{
    public function create($concours_id)
    {
        return view('candidature.create', compact('concours_id'));
    }

    public function store(Request $request)
    {
        // Validation des données du formulaire de candidature
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'cin' => 'required|string|max:255',
            'mail' => 'required|email|max:255',
            'niveau_scolaire' => 'required|string|max:255',
            'filiere' => 'required|string|max:255',
            'concours_id' => 'required|exists:concours,id', // Assurez-vous que l'ID du concours existe
            
        ]);

        // Création d'une nouvelle candidature
        Candidat::create([
            'concours_id' => $request->concours_id,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'cin' => $request->cin,
            'mail' => $request->mail,
            'niveau_scolaire' => $request->niveau_scolaire,
            'filiere' => $request->filiere,
            'concours_id' => $request->concours_id,
        ]);

        // Redirection avec un message de succès
        return redirect()->route('concours.index')->with('success', 'Votre candidature a été soumise avec succès.');
    }
}
