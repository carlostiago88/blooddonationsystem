@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Doações agendadas para hoje</h2>
            <table class="table table-striped table-hover ">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nome do Doador</th>
                    <th>Turno</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>12</td>
                    <td>João Silva</td>
                    <td>Manhã</td>
                    <td><span class="label label-warning">Agendado</span></td>
                    <td><a href="#" role="button" class="btn btn-primary btn-xs btn-info">
                            Coletado
                        </a>
                        <a href="#" role="button" class="btn btn-primary btn-xs btn-danger">
                            Não Coletado
                        </a>
                        <a href="#" role="button" class="btn btn-primary btn-xs btn-default disabled">
                            Emitir ID
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>23</td>
                    <td>Marimar Luz</td>
                    <td>Manhã</td>
                    <td><span class="label label-success">Coletado</span></td>
                    <td><a href="#" role="button" class="btn btn-primary btn-xs btn-default disabled ">
                            Coletado
                        </a>
                        <a href="#" role="button" class="btn btn-primary btn-xs btn-default disabled">
                            Não Coletado
                        </a>
                        <a href="#" role="button" class="btn btn-primary btn-xs btn-success">
                            Emitir ID
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
