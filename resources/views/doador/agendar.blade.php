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
        <div class="well bs-component">
            <form class="form-horizontal" method="POST" action="{{ route('agenda.store') }}">
                {{ csrf_field() }}
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
                <fieldset>
                    <legend>Agendamento</legend>
                    <div class="form-group">
                        <label for="inputLaboratorio" class="col-lg-2 control-label">Laboratório</label>
                        <div class="col-lg-10">
                            <select class="form-control" name="laboratorio_id" required {{ $disabled }}
                            title="Necessário Preencher" value="{{ old('laboratorio_id') }}">
                                <option value="">Selecione</option>
                                @foreach($laboratorios as $laboratorio)
                                    <option value="{{ $laboratorio->id }}">{{ $laboratorio->nome ." - ". ($laboratorio->endereco)}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputData" class="col-lg-2 control-label">Data</label>
                        <div class="col-lg-10">
                            <input class="form-control" id="inputData" placeholder="dd/mm/aaaa" name="data" type="text" {{ $disabled }}>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Turno</label>
                        <div class="col-lg-10">
                            <div class="radio">
                                <label>
                                    <input name="turno" id="optionsRadios1" value="manha" checked="" {{ $disabled }}
                                    type="radio">
                                    Manhã
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input name="turno" id="optionsRadios2" value="tarde" type="radio" {{ $disabled }}>
                                    Tarde
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" class="btn btn-default" {{ $disabled }}>Cancelar</button>
                            <button type="submit" class="btn btn-primary" {{ $disabled }}>Submeter</button>
                        </div>
                    </div>
                </fieldset>
            </form>
            <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="well bs-component">
            <legend>Últimas Doações</legend>
            <table class="table table-striped table-hover ">
                <thead>
                <tr>
                    <th>Local</th>
                    <th>Data/Hora</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>-</td>
                    <td>-</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
