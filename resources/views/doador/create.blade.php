@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-6">
            <div class="well bs-component">
                <form class="form-horizontal" method="POST" action="{{ route('doador.store') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
                    <fieldset>
                        <legend>Completar Cadastro</legend>
                        <div class="form-group">
                            <label for="inputNascimento" class="col-lg-2 control-label">Nascimento</label>
                            <div class="col-lg-10">
                                <input class="form-control" id="inputNascimento" placeholder="dd/mm/aaaa"
                                       name="nascimento" type="text" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Sexo</label>
                            <div class="col-lg-10">
                                <div class="radio">
                                    <label>
                                        <input name="sexo" id="optionsRadios1" value="M" checked=""
                                               type="radio">
                                        Masculino
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input name="sexo" id="optionsRadios2" value="F" type="radio">
                                        Feminino
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputTelefone" class="col-lg-2 control-label">Contato</label>
                            <div class="col-lg-10">
                                <input class="form-control" id="inputTelefone" placeholder="Telefone" name="contato"
                                       type="text" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="textEndereco" class="col-lg-2 control-label">Endereço</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" rows="3" id="textEndereco" name="endereco" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-lg-2 control-label">Já é doador(a)?</label>
                            <div class="col-lg-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="ja_e_doador" value="S"> Sim
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-6 control-label" for="checkboxes">Condições que impedem doação</label>
                            <div class="col-lg-12">
                                @foreach($impedimentos as $impedimento)
                                    <div class="checkbox">
                                        <label for="imp-{{ $impedimento->id }}">
                                            <input name="tipo_impedimento[{{ $impedimento->id }}]" id="imp-{{ $impedimento->id }}" value="{{ $impedimento->tipo_impedimento }}"
                                                   type="checkbox">
                                            {{ $impedimento->nome }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button type="reset" class="btn btn-default">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Submeter</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
                <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div>
            </div>
        </div>
    </div>
@endsection
