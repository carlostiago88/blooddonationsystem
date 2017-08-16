@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($doador_info as $info)
                <h2>Info da Agenda {{ $info->nome_doador }}</h2>
                <div class="well well-sm col-lg-12">
                    <div class="col-lg-5">
                        <p>Cod. Agendamento: {{ $info->id }}</p>
                        <p>Data Doação: {{ $info->data_doacao }}</p>
                        <p>Turno: {{ $info->turno }}</p>
                        <p>Dia da Marcação: {{ $info->dia_marcarcao }}</p>
                    </div>
                    <div class="col-lg-5">
                        <p>Cod. Doador: {{ $info->doador_id }}</p>
                        <p>Nome Doador: {{ $info->nome_doador }}</p>
                        <p>Sexo: {{ $info->sexo }}</p>
                        <p>Documento: {{ $info->documento }}</p>
                        <p>Nascimento: {{ $info->nascimento }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="well bs-component">
                    <form class="form-horizontal">
                        <fieldset>
                            <!-- Form Name -->
                            <legend>Condições Impeditivas</legend>
                            <!-- Multiple Radios (inline) -->
                            @foreach($impedimentos as $impedimento)
                                <div class="form-group">
                                    <label class="col-md-8 control-label" for="radios">{{ $impedimento->nome }}</label>
                                    <div class="col-md-4">
                                        <label class="radio-inline" for="radios-0">
                                            <input name="radios" id="radios-0" value="1" checked="checked" type="radio">
                                            Sim
                                        </label>
                                        <label class="radio-inline" for="radios-1">
                                            <input name="radios" id="radios-1" value="2" type="radio">
                                            Não
                                        </label>
                                    </div>
                                </div>
                            @endforeach

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
