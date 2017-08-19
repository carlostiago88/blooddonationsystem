@extends('layouts.app')

@section('content')
    <div class="col-lg-12">
        @if(Session::has('message'))
            <div class="alert {{ Session::get('alert-class') }}">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{ Session::get('message') }}
            </div>
        @endif
    </div>
    <div class="col-lg-6">

        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Bolsa chave: {{$bolsa_chave}}</h3>
            </div>
            <div class="panel-body">

                <form class="form-horizontal" method="POST" action="{{ route('laboratorio.inserir-exames') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
                    <input type="hidden" name="bolsa_chave" value="{{ $bolsa_chave }}"/>
                    @php $i =1 @endphp
                    @foreach($exames as $exame)
                        <input type="hidden" name="maxCount" value="{{$i++}}"/>
                        <div class="form-group">
                            <label class="col-md-4 control-label"
                                   for="textinput-{{$exame->id}}">{{$exame->nome}}</label>
                            <div class="col-md-4">
                                <input id="textinput" name="textinput-{{$exame->id}}" placeholder="Resultado"
                                       class="form-control input-md"
                                       type="text">
                            </div>
                        </div>
                    @endforeach

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="radios">Analise Biomédico</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label for="radios-0">
                                    <input name="analise_biomedico" id="radios-0" value="Disponivel para Doacao"
                                           type="radio">
                                    Disponível para Transfusão
                                </label>
                            </div>
                            <div class="radio">
                                <label for="radios-1">
                                    <input name="analise_biomedico" id="radios-1" value="Improprio para Doacao"
                                           type="radio">
                                    Improprio para Transfusão
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" class="btn btn-default">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Submeter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
