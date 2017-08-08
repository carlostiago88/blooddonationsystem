@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Laboratórios</h2>
            <table class="table table-striped table-hover ">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Endereço</th>
                </tr>
                </thead>
                <tbody>
                @foreach($laboratorios as $laboratorio)
                    <tr>
                        <td>{{ $laboratorio->id }}</td>
                        <td>{{ $laboratorio->nome }}</td>
                        <td>{{ $laboratorio->endereco }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
