@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h5><i class="fas fa-list"></i> Etudiants</h5>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary btn-sm float-right mb-2" href="{{URL('etudiants/add')}}"> <i class="fas fa-user-plus"></i> Nouveau</a>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            @if ($message = Session::get('success'))
                <div class="col-md-12 alert alert-success text-center">
                    <p>{{ $message }}</p>
                </div>
            @endif
        </div>
        <div class="col-md-12">
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>Telephone</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach($etudiants as $etudiant)
                        <tr>
                            <td>{{$etudiant->matricule}}</td>
                            <td>{{$etudiant->nom}}</td>
                            <td>{{$etudiant->prenom}}</td>
                            <td>{{$etudiant->email}}</td>
                            <td>{{$etudiant->telephone}}</td>
                            <td>
                                <a href="{{URL('etudiants/edit/'.$etudiant->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-user-edit"></i> </a>
                                <a href="{{URL('etudiants/diplomes/'.$etudiant->id)}}" class="btn btn-secondary btn-sm"><i class="fas fa-list"></i> </a>
                                <a href="{{URL('etudiants/delete/'.$etudiant->id)}}" onclick="confirm('Etes vous sur de supprimer cet etudiant?')" class="btn btn-danger btn-sm"> <i class="fas fa-user-times"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
