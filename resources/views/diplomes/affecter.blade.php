@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb mb-1">
                <div class="pull-left">
                    <h5>Affectation Diplome aux etudiants</h5>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{URL('diplomes/')}}"> <i class="fas fa-arrow-circle-left"></i> Listes</a>
                </div>
            </div>
        </div>
        <form action="{{url('diplomes/affecter')}}" method="POST">
            @csrf
            <div class="form-row">
                <div class="col-md-4 form-group">
                    <label for="libelle">{{ trans('Intitule') }} </label>
                    <input type="text" name="intitule" disabled value="{{$diplome->intitule}}" class="form-control" placeholder="Intitulé">
                </div>
                <div class="col-md-4 form-group">
                    <label for="libelle">{{ trans('Reference') }} </label>
                    <input type="text" name="reference" disabled value="{{$diplome->reference}}" class="form-control" placeholder="Reference">
                </div>
                <div class="col-md-4 form-group">
                    <label for="libelle">{{ trans('Nom d\'etablissement') }} </label>
                    <input type="text" name="nometablissement" disabled value="{{$diplome->nometablissement}}" class="form-control" placeholder="Nom d'etablissement">
                </div>

                <div class="col-md-12 form-group">
                    <label for="libelle">{{ trans('Liste des etudiants') }} </label>
                    <select id="etudiant_id" name="etudiant_id"   title="@lang('selectionner')" class="form-control selectpicker bordered">
                        @foreach($etudiants as $etudiant)
                            <option value="{{$etudiant->id}}">{{$etudiant->matricule}} - {{$etudiant->nom}} - {{$etudiant->prenom}}</option>
                        @endforeach
                    </select>
                </div>
                <input type="hidden" name="diplome_id" value="{{$diplome->id}}" class="form-control">
                <div class="col-md-12">
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Affecter</button>
                        <div id="form-errors" class="text-left"></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

