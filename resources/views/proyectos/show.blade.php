@extends('layouts.master')

@section('content')

    <div class="row m-4">

        <div class="col-sm-4">

            <a href="#"><img src="{{ asset('images/mp-logo.png') }}" alt="Logo-proyecto" style="height: 400px"></a>

        </div>
        <div class="col-sm-8">

            <header>
                <h3>{{ $proyecto['nombre'] }}</h3>
            </header>
            <p>ID del docente: {{ $proyecto['docente_id'] }}</p>
            <p>
                Dominio: <a href="http://github.com/2DAW-CarlosIII/{{ $proyecto['dominio'] }}">
                    http://github.com/2DAW-CarlosIII/{{ $proyecto['dominio'] }}
                </a>
            </p>
        </div>
    </div>

@stop

