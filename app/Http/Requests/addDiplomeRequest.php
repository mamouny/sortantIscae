<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addDiplomeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'intitule' => 'required|unique:diplomes,intitule,'.$this->id,
            'reference' => 'required',
            'nometablissement' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'intitule.required' => 'Le champ intitule est obligatoire et doit etre unique',
            'reference.required' => 'Le champ reference est obligatoire',
            'nometablissement.required' => 'Le champ nom \'etablissement est obligatoire',
        ];
    }
}
