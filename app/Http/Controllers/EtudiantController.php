<?php

namespace App\Http\Controllers;

use App\Http\Requests\addEtudiantRequest;
use App\Models\Etudiant;
use App\Models\EtudiantsDiplome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class EtudiantController extends Controller
{
    public function index()
    {
        $etudiants = Etudiant::all();
        return view('etudiants.index',['etudiants'=>$etudiants]);
    }

    public function formAdd()
    {
        return view('etudiants.add');
    }
    public function add(addEtudiantRequest $request)
    {
        $etudiant = new Etudiant();
        $etudiant->matricule = $request->matricule;
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->telephone = $request->tel;
        $etudiant->email = $request->email;
        $etudiant->save();
        return redirect('etudiants');
    }

    public function formEdit($id)
    {
        $etudiant = Etudiant::find($id);
        return view('etudiants.edit',['etudiant'=>$etudiant]);
    }
    public function edit(addEtudiantRequest $request)
    {
        $etudiant = Etudiant::find($request->id);
        $etudiant->matricule = $request->matricule;
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->telephone = $request->tel;
        $etudiant->email = $request->email;
        $etudiant->save();
        return redirect('etudiants');
    }

    public function delete($id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect('etudiants');
    }

    public function listeDiplomes($id)
    {
        $etudiant = Etudiant::find($id);
        $diplomes = EtudiantsDiplome::where('etudiant_id',$etudiant->id)->get();
        return view('etudiants.diplome',['diplomes'=>$diplomes,'etudiant'=>$etudiant]);
    }
}
