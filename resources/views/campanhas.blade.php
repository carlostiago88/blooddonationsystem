@extends('layouts.app')

@section('content')
    <div class="container">
        @if (Auth::check())
            @if(\Illuminate\Support\Facades\Auth::user()->perfil =='doador')
                <div class="row">
                    <div class="jumbotron">
                        <h1>Seja bem vindo!</h1>
                        <p>Doar sangue é se preocupar com o próximo. Pratique esse hábito! Existem muitas pessoas que
                            estão
                            precisando urgentemente de doações de sangue, por que não ajudar? </p>
                        <p><a class="btn btn-primary btn-lg" href="{{route('doador.agendar')}}">Clique aqui para
                                agendar</a></p>
                    </div>
                </div>
            @endif
        @endif
        <div class="row">
            <h2>Campanhas</h2>
            <table class="table table-striped table-hover table-responsive">
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
