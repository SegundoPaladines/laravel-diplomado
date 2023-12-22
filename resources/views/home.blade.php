@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bienvenido') }}

                    <h1>Proyecto Full Stack</h1>

                    <a href="{{route('lista-estudiantes')}}">
                        <div class="card" style="width: 18rem;">
                            <div class="container w-100">
                                <div class="row justify-content-center">
                                    <img src="img/est_img.png" class="w-50">
                                </div>
                            </div>
                            <div class="card-body">
                              <p class="card-text text-center">Estudiante Administrador.</p>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
