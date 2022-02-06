@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-center"><h6>{{ __('Dashboard') }}</h6></div>
                <div class="card-body text-center p-0 m-0">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <img src="{{URL::asset('home.jpg')}}" height="50%" width="100%" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
