@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Solicitacao de Sangue</h2>
            <form>
                <div class="form-group">
                    <label for="nome_paciente">Nome do Paciente</label>
                    <input type="text" class="form-control" id="nome_paciente">
                </div>
                <div class="form-group">
                    <label for="prontuario">Prontuario</label>
                    <input type="text" class="form-control" id="prontuario">
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">Tipo Sanguíneo</label>
                    <div class="col-lg-10">
                        <div class="radio">
                            <label>
                                <input name="tipo_sanguineo" id="tipo_sanguineo1" value="manha" checked=""
                                       type="radio">
                                AB
                            </label>
                        </div><div class="radio">
                            <label>
                                <input name="tipo_sanguineo" id="tipo_sanguineo1" value="manha" checked=""
                                       type="radio">
                                A
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input name="tipo_sanguineo" id="tipo_sanguineo1" value="manha" checked=""
                                       type="radio">
                                B
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input name="tipo_sanguineo" id="tipo_sanguineo2" value="tarde" type="radio">
                                O
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">Fator RH</label>
                    <div class="col-lg-10">
                        <div class="radio">
                            <label>
                                <input name="fator_rh" id="tipo_sanguineo1" value="+" checked=""
                                       type="radio">
                                +
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input name="fator_rh" id="tipo_sanguineo2" value="-" type="radio">
                                -
                            </label>
                        </div>
                    </div>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
@endsection
