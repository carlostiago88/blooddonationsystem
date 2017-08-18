@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-12">
            @if(Session::has('message'))
                <div class="alert {{ Session::get('alert-class') }}">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    {{ Session::get('message') }}
                </div>
            @endif
        </div>
        <div class="row">
            @foreach($doador_info as $info)
                <h2>Info da Agenda {{ $info->nome_doador }}</h2>
                <div class="well well-sm col-lg-12">
                    <div class="col-lg-4">
                        <p>Cod. Agendamento: {{ $info->id }}</p>
                        <p>Data Doação: {{ $info->data_doacao }}</p>
                        <p>Turno: {{ $info->turno }}</p>
                        <p>Dia da Marcação: {{ $info->dia_marcarcao }}</p>
                    </div>
                    <div class="col-lg-4">
                        <p>Cod. Doador: {{ $info->doador_id }}</p>
                        <p>Nome Doador: {{ $info->nome_doador }}</p>
                        <p>Sexo: {{ $info->sexo }}</p>
                        <p>Documento: {{ $info->documento }}</p>
                        <p>Nascimento: {{ $info->nascimento }}</p>
                    </div>
                    <div class="col-lg-4">
                        @foreach($impedimentos_def as $impedimento)
                            <p>
                                <small>{{ $impedimento->nome }} | <span class="label label-success">apto</span></small>
                            </p>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <form class="form-horizontal" method="post" action="{{ route('laboratorio.receber-formulario') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                @foreach($doador_info as $info)
                    <input type="hidden" name="doador_id" value="{{$info->doador_id}}"/>
                @endforeach
                <fieldset>
                    <div class="well bs-component">
                        <legend>Condições Impeditivas</legend>
                        @php $i =1 @endphp
                        @foreach($impedimentos_temp as $impedimento)
                            <input type="hidden" name="maxCount" value="{{$i++}}"/>
                            <div class="form-group">
                                <label class="col-md-8 control-label" for="radios">{{ $impedimento->nome }}</label>
                                <div class="col-md-4">
                                    <label class="radio-inline" for="tipo_impedimento-s-{{ $impedimento->id }}">
                                        <input name="tp-{{ $impedimento->id }}"
                                               id="tipo_impedimento-s-{{ $impedimento->id }}" value="0" type="radio">
                                        Sim
                                    </label>
                                    <label class="radio-inline" for="tipo_impedimento-n-{{ $impedimento->id }}">
                                        <input name="tp-{{ $impedimento->id }}"
                                               id="tipo_impedimento-n-{{ $impedimento->id }}" value="1" type="radio" checked required>
                                        Não
                                    </label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="well bs-component">
                        <div class="form-group">
                            <div class="col-sm-12 col-lg-offset-4">
                                <button type="reset" class="btn btn-default">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Submeter</button>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
