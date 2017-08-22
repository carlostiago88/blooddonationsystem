@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Próximas Doações</h2>
            <h4></h4>
            <table class="table table-striped table-hover table-responsive">
                <thead>
                <tr>
                    <th>Documento</th>
                    <th>Nome do Doador</th>
                    <th>Nascimento</th>
                    <th>Sexo</th>
                    <th>Dia</th>
                    <th>Turno</th>
                    <th>Ação</th>
                    <!--<th>Ações</th>-->
                </tr>
                </thead>
                <!--
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
                 -->
                <tbody>
                @foreach($agenda_info as $doador)
                    <tr>
                        <td>{{$doador->documento}}</td>
                        <td>{{$doador->nome_doador}}</td>
                        <td>{{$doador->nascimento}}</td>
                        <td>{{$doador->sexo}}</td>
                        <td>{{$doador->data_doacao}}</td>
                        <td>{{$doador->turno}}</td>
                        <td>
                            <a href="{{route('laboratorio.coletar-sangue',['doador_id'=>$doador->doador_id])}}"
                               role="button" class="btn btn-primary btn-xs btn-info">
                                Coletar
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
