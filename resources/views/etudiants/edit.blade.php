@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="modal-header mb-5">
            <h5 class="modal-title"><i class="fas fa-user"></i>  {{ trans('Modifier Etudiant') }}</h5>
            <a href="{{URL('etudiants/')}}" class="btn btn-success text-center"><i class="fas fa-arrow-circle-left"></i> Listes</a>
        </div>
        <div class="w-60 m-auto ">
            <form method="POST" action="{{url('etudiants/edit')}}" name="editEtudiant">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="matricule" class="col-sm-2 col-form-label">Matricule:</label>
                    <div class="col-sm-10 mb-3">
                        <input type="text" name="matricule" value="{{$etudiant->matricule}}" class="form-control oblig " required id="matricule" placeholder="">
                    </div>
                    <label for="nom" class="col-sm-2 col-form-label">Nom:</label>
                    <div class="col-sm-10 mb-3">
                        <input type="text" name="nom" value="{{$etudiant->nom}}" class="form-control oblig"  id="nom" placeholder="">
                    </div>
                    <label for="prenom" class="col-sm-2 col-form-label">Prenom:</label>
                    <div class="col-sm-10 mb-3">
                        <input type="text" name="prenom" value="{{$etudiant->prenom}}" class="  form-control oblig" id="prenom" >
                    </div>
                    <label for="nin" class="col-sm-2 col-form-label">Telephone:</label>
                    <div class="col-sm-10 mb-3">
                        <input type="number" name="tel" value="{{$etudiant->telephone}}" class="form-control" id="tel">
                    </div>
                    <label for="email" class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-10 mb-3">
                        <input type="email" name="email" value="{{$etudiant->email}}" class="form-control" id="email">
                    </div>
                </div>
                <input type="hidden" name="id" value="{{$etudiant->id}}">
                <div class="float-right">
                    <button type="submit" class="btn btn-primary "><i class="fas fa-user-plus"></i> Modifier</button>
                </div>
            </form>
        </div>
    </div>
@endsection

