@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Comunicação</h2>
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
                    <td><span class="label label-danger">Não coletado</span></td>
                </tr>
                <tr>
                    <td>23</td>
                    <td>Marimar Luz</td>
                    <td>Manhã</td>
                    <td><span class="label label-success">Coletado</span></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
