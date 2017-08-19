@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @if(Session::has('message'))
                <div class="alert {{ Session::get('alert-class') }}">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    {{ Session::get('message') }}
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-md-3">
                <a href="{{route ('laboratorio.listar-agendados')}}" class="btn btn-default btn-block">Voltar ao
                    inicio</a>
            </div>
        </div>
    </div>
@endsection