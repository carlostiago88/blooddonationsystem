@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Identificação da bolsa</h2>
            <div class="col-lg-5">
                <div class="panel panel-warning">
                    @foreach($bolsa_info as $info)
                        @php
                        $bolsa_chave = $info->bolsa_chave
                        @endphp
                        <div class="panel-heading">
                            <h3 class="panel-title">{{$info->nome_doador}}</h3>
                        </div>
                        <div class="panel-body">
                            <p>id_doador: {{ $info->doador_id }}</p>
                            <p>bolsa_chave: <b>{{ $info->bolsa_chave}}</b></p>
                            <p>nascimento: {{ $info->nascimento}}</p>
                            <p>fator_rh: {{ $info->fator_rh}}</p>
                            <p>tipo_sanguineo: {{ $info->tipo_sanguineo}}</p>
                            <p>documento: {{ $info->documento}}</p>
                            <p>contato: {{ $info->contato}}</p>
                            <p>nome_lab: {{ $info->nome_lab}}</p>
                            <p>nome_tecnico: {{ $info->nome_tecnico}}</p>
                        </div>
                    @endforeach
                </div>
                <a href="{{route('laboratorio.finalizar-coleta',['asd'=>$bolsa_chave])}}" class="btn btn-info btn-lg btn-block">Finalizar Doação</a>
            </div>
        </div>
    </div>
@endsection
