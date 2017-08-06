@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Hospitais</h2>
            <table class="table table-striped table-hover ">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Local</th>
                    <th>Data/Hora</th>
                    <th>Compartilhe</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Slogan da campanha</td>
                    <td>Local do Evento</td>
                    <td>07/01/2018 08h00</td>
                    <td><span class="glyphicon glyphicon-share" aria-hidden="true"></span></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
