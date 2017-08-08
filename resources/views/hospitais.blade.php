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
                    <th>Endereço</th>
                </tr>
                </thead>
                <tbody>
                @foreach($hospitais as $hospital)
                    <tr>
                        <td>{{ $hospital->id }}</td>
                        <td>{{ $hospital->nome }}</td>
                        <td>{{ $hospital->endereco }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
