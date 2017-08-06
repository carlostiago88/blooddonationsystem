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
                <input type="hidden" name="pessoa_id" value="{{ $pessoa_id }}"/>
                <fieldset>
                    <legend>Agendamento</legend>
                    <div class="form-group">
                        <label for="inputLaboratorio" class="col-lg-2 control-label">Laboratório</label>
                        <div class="col-lg-10">
                            <select class="form-control" name="laboratorio_id" required
                                    title="Necessário Preencher" value="{{ old('laboratorio_id') }}">
                                <option value="">Selecione</option>
                                @foreach($laboratorios as $laboratorio)
                                    <option value="{{ $laboratorio->id }}">{{ $laboratorio->nome ." - ". ($laboratorio->endereco)}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="textArea" class="col-lg-2 control-label">Textarea</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="textArea"></textarea>
                            <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Radios</label>
                        <div class="col-lg-10">
                            <div class="radio">
                                <label>
                                    <input name="optionsRadios" id="optionsRadios1" value="option1" checked=""
                                           type="radio">
                                    Option one is this
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input name="optionsRadios" id="optionsRadios2" value="option2" type="radio">
                                    Option two can be something else
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Selects</label>
                        <div class="col-lg-10">
                            <select class="form-control" id="select">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                            <br>
                            <select multiple="" class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
            <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="well bs-component">
            <legend>Últimos Agendamentos</legend>
            <table class="table table-striped table-hover ">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Local</th>
                    <th>Data/Hora</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Slogan da campanha</td>
                    <td>Local do Evento</td>
                    <td>07/01/2018 08h00</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
