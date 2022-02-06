<?php

namespace App\Http\Controllers;

use App\Http\Requests\addDiplomeRequest;
use App\Models\Diplome;
use App\Models\Etudiant;
use App\Models\EtudiantsDiplome;
use Illuminate\Http\Request;

class DiplomeController extends Controller
{
    public function index()
    {
        $diplomes = Diplome::all();
        return view('diplomes.index',['diplomes'=>$diplomes]);
    }

    public function formAdd()
    {
        return view('diplomes.add');
    }

    public function add(addDiplomeRequest $request)
    {
        $diplome = new Diplome();
        $diplome->intitule = $request->intitule;
        $diplome->reference = $request->reference;
        $diplome->nometablissement = $request->nometablissement;
        $diplome->save();
        return redirect('diplomes/')->with('success','Diplome bien été ajouté.');
    }

    public function formEdit($id)
    {
        $diplome = Diplome::find($id);
        return view('diplomes.edit',['diplome'=>$diplome]);
    }
    public function edit(addDiplomeRequest $request)
    {
        $diplome = Diplome::find($request->id);
        $diplome->intitule = $request->intitule;
        $diplome->reference = $request->reference;
        $diplome->nometablissement = $request->nometablissement;
        $diplome->save();
        return redirect('diplomes/')->with('success','Diplome bien été modifié.');
    }

    public function delete($id)
    {
        $diplome = Diplome::find($id);
        $etudiantsDiplome = EtudiantsDiplome::where('diplome_id',$diplome->id)->get();
        if($etudiantsDiplome->count() != 0)
        {
            foreach ($etudiantsDiplome as $item)
            {
                $item->forceDelete();
            }
        }
        $diplome->forceDelete();
        return redirect('diplomes/')->with('success','Diplome bien été supprimé.');
    }

    public function affecterEtudiantForDiplome($id)
    {
        $diplome = Diplome::find($id);
        $etudiants = Etudiant::whereNotIn('id',EtudiantsDiplome::where('diplome_id',$diplome->id)->pluck('etudiant_id'))->get();
        return view('diplomes.affecter',['diplome'=>$diplome,'etudiants'=>$etudiants]);
    }

    public function affecterDiplome(Request $request)
    {
        $affecter = new EtudiantsDiplome();
        $affecter->diplome_id = $request->diplome_id;
        $affecter->etudiant_id = $request->etudiant_id;
        $affecter->save();
        return redirect('diplomes/')->with('success','Etudiant bien été affecte.');
    }
}
