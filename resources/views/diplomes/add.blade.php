@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb mb-5">
                <div class="pull-left">
                    <h5>Nouveau Diplome</h5>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{URL('diplomes/')}}"> <i class="fas fa-arrow-circle-left"></i> Listes</a>
                </div>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (\Session::get('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
        <form action="{{url('diplomes/add')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Intitulé:</strong>
                        <input type="text" name="intitule" class="form-control" placeholder="Intitulé">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Reference:</strong>
                        <input type="text" name="reference" class="form-control" placeholder="Reference">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nom d'etablissement:</strong>
                        <input type="text" name="nometablissement" class="form-control" placeholder="Nom d'etablissement">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Créer</button>
                </div>
            </div>
        </form>
    </div>
@endsection

