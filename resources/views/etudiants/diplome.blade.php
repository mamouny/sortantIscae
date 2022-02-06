@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h5><i class="fas fa-list"></i> Diplomes du : <b>{{$etudiant->nom}} {{$etudiant->prenom}} ({{$etudiant->matricule}})</b></h5>
                </div>
                <div class="pull-right">
                    <a href="{{URL('etudiants/')}}" class="btn btn-success text-center"><i class="fas fa-arrow-circle-left"></i> Listes</a>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered text-center">
                <thead>
                    <th>Intitulé</th>
                    <th>Reference</th>
                    <th>Nom d'etablissement</th>
                </thead>
                <tbody>
                    @if($diplomes->count() == 0)
                        <tr class="text-center"><td colspan="3"> Aucun diplome obtenu par cet etudiant</td></tr>
                    @else
                        @foreach($diplomes as $diplome)
                            <tr>
                                <td>{{$diplome->diplome->intitule}}</td>
                                <td>{{$diplome->diplome->reference}}</td>
                                <td>{{$diplome->diplome->nometablissement}}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
