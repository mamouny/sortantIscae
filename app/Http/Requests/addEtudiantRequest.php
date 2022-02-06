<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addEtudiantRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'matricule' => 'required|unique:etudiants,matricule,'.$this->id,
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'tel' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'matricule.required' => 'Le champ matricule est obligatoire et doit etre unique',
            'nom.required' => 'Le champ nom est obligatoire',
            'prenom.required' => 'Le champ prenom est obligatoire',
            'email.required' => 'Le champ email est obligatoire',
            'tel.required' => 'Le champ telephone est obligatoire',
        ];
    }
}
