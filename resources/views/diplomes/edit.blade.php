@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="modal-header mb-2">
            <h5 class="modal-title"><i class="fas fa-user"></i>  {{ trans('Modifier Diplome') }}</h5>
            <a href="{{URL('diplomes/')}}" class="btn btn-success float-right"><i class="fas fa-arrow-circle-left"></i> Listes </a>
        </div>

{{--        @if ($errors->any())--}}
{{--            <div class="alert alert-danger">--}}
{{--                <ul>--}}
{{--                    @foreach ($errors->all() as $error)--}}
{{--                        <li>{{ $error }}</li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        @endif--}}
{{--        @if (\Session::get('success'))--}}
{{--            <div class="alert alert-success">--}}
{{--                <p>{{ \Session::get('success') }}</p>--}}
{{--            </div>--}}
{{--        @endif--}}
        <div class="w-60 m-auto ">
            <form method="POST" action="{{url('diplomes/edit')}}" name="editDiplome">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="intitule" class="col-sm-4 col-form-label">Intitulé:</label>
                    <div class="col-sm-8 mb-3">
                        <input type="text" name="intitule" value="{{$diplome->intitule}}" class="form-control oblig " id="intitule" placeholder="">
                    </div>
                    <label for="nom" class="col-sm-4 col-form-label">Reference:</label>
                    <div class="col-sm-8 mb-3">
                        <input type="text" name="reference" value="{{$diplome->reference}}"  class="form-control oblig"  id="reference" placeholder="">
                    </div>
                    <label for="prenom" class="col-sm-4 col-form-label">Nom d'etablissement:</label>
                    <div class="col-sm-8 mb-3">
                        <input type="text" name="nometablissement" value="{{$diplome->nometablissement}}" class="  form-control oblig" id="nometablissement" >
                    </div>
                </div>
                <input type="hidden" name="id" value="{{$diplome->id}}">
                <div class="float-right" >
                    <button type="submit" class="btn btn-primary "><i class="fas fa-user-plus"></i> Modifier</button>
                </div>
            </form>
        </div>
    </div>
@endsection

