@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Análise de Sangue</h2>
            <table class="table table-striped table-hover ">
                <thead>
                <tr>
                    <th>ID Bolsa</th>
                    <th>Tipo Sanguíneo/Fator RH</th>
                    <th>Data da Coleta</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>BS201708080001</td>
                    <td>AB+</td>
                    <td>08/08/2017</td>
                    <td><a href="#" role="button" class="btn btn-primary btn-xs btn-info">
                            Formulário de Análise
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>BS201708080084</td>
                    <td>O-</td>
                    <td>08/08/2017</td>
                    <td><a href="#" role="button" class="btn btn-primary btn-xs btn-info">
                            Formulário de Análise
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
