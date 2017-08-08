@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Campanhas</h2>
            <table class="table table-striped table-hover ">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Data/Hora</th>
                </tr>
                </thead>
                <tbody>
                @foreach($campanhas as $campanha)
                    <tr>
                        <td>{{ $campanha->id }}</td>
                        <td>{{ $campanha->nome }}</td>
                        <td>{{ $campanha->local }}</td>
                        <td>{{ $campanha->data_hora }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
