@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h5><i class="fas fa-list"></i> Diplomes</h5>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success btn-sm" href="{{URL('diplomes/add')}}"> <i class="fas fa-plus-circle"></i> Nouveau </a>
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
                <th>Intitulé</th>
                <th>Reference</th>
                <th>Nom d'etablissement</th>
                <th>Action</th>
                </thead>
                <tbody>
                @foreach($diplomes as $diplome)
                    <tr>
                        <td>{{$diplome->intitule}}</td>
                        <td>{{$diplome->reference}}</td>
                        <td>{{$diplome->nometablissement}}</td>
                        <td>
                            <a href="{{URL('diplomes/edit/'.$diplome->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-pen-square"></i> </a>
                            <a href="{{URL('diplomes/affecter/'.$diplome->id)}}" class="btn btn-secondary btn-sm"><i class="fas fa-user-plus"></i> </a>
                            <a href="{{URL('diplomes/delete/'.$diplome->id)}}" onclick="confirm('Etes vous sur  de supprimer cette diplome?')" class="btn btn-danger btn-sm"> <i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
