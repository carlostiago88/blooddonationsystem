@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Avalie o Atendimento</h2>
            <table class="table table-striped table-hover table-responsive">
                <thead>
                <th>Data</th>
                <th>Laboratório</th>
                <th>Avaliação</th>
                </thead>
                <tbody>
                <tr>
                    <td>09/08/2017</td>
                    <td>Laboratório Sabin</td>
                    <td>
                        <a href="#" role="button" class="btn btn-primary btn-xs btn-danger">
                            Ruim
                        </a>
                        <a href="#" role="button" class="btn btn-primary btn-xs btn-warning">
                            Médio
                        </a>
                        <a href="#" role="button" class="btn btn-primary btn-xs btn-success">
                            Ótimo
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>

        </div>
@endsection
