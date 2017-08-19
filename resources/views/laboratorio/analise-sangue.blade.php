@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Análise de Sangue</h2>
            <table class="table table-striped table-hover ">
                <thead>
                <tr>
                    <th>Bolsa Chave</th>
                    <th>Tipo Sanguíneo/Fator RH</th>
                    <th>Data da Coleta</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($listaBolsasLab as $info)
                    <tr>
                        <td>{{$info->bolsa_chave}}</td>
                        <td>{{$info->tipo_sanguineo . $info->fator_rh}}</td>
                        <td>{{$info->data_coleta}}</td>
                        <td>
                            @if($info->analise_biomedico == 'em analise' )
                                <a href="{{route('laboratorio.inserir-exames',['bolsa_chave'=>$info->bolsa_chave])}}"
                                   role="button" class="btn btn-primary btn-xs btn-info">
                                    Formulário de Análise
                                </a>
                            @else
                                {{$info->analise_biomedico}}
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
