<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BloodDonationSystem') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'BloodDonationSystem') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">

                    @if(Auth::guest())
                        &nbsp;
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                Ações
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                @if(Auth::user()->perfil == 'admin')
                                    <li><a href="{{route('admin.index')}}">Index</a></li>
                                    <li><a href="{{route('admin.credentials')}}">Credenciais</a></li>
                                    <li><a href="{{route('admin.monitoring')}}">Monitoramento</a></li>
                                    <li><a href="{{route('admin.reports')}}">Relatórios</a></li>
                                @elseif(Auth::user()->perfil == 'lab.tecnico')
                                    <li><a href="{{route('laboratorio.listar-agendados')}}">Listar Agendados</a></li>
                                @elseif(Auth::user()->perfil == 'lab.logistico')
                                    <li><a href="{{route('laboratorio.estoque-sangue')}}">Estoque de Bolsas</a></li>
                                    <li><a href="{{route('laboratorio.despacho-sangue')}}">Despacho de Bolsas</a></li>
                                @elseif(Auth::user()->perfil == 'lab.biomedico')
                                    <li><a href="{{route('laboratorio.analise-sangue')}}">Análise de Sangue</a></li>
                                @elseif(Auth::user()->perfil == 'lab.gerente')
                                    <li><a href="{{route('laboratorio.agenda')}}">Agenda de Doações</a></li>
                                    <li><a href="{{route('laboratorio.comunicacao')}}">Comunicação de Exames</a></li>
                                    <li><a href="{{route('laboratorio.relatorios')}}">Relatórios</a></li>
                                @elseif(Auth::user()->perfil == 'hosp.enfermeiro')
                                    <li><a href="{{route('hospital.solicitar-sangue')}}">Solicitação de Bolsa</a></li>
                                    <li><a href="{{route('hospital.historico-solicitacoes')}}">Histórico de
                                            Solicitações</a></li>
                                @elseif(Auth::user()->perfil == 'doador')
                                    <li><a href="{{route('doador.index')}}">Index</a></li>
                                    <li><a href="{{route('doador.create')}}">Completar Cadastro</a></li>
                                    <li><a href="{{route('doador.agendar')}}">Agendar Doação</a></li>
                                    <li><a href="{{route('doador.avaliar')}}">Avaliar Atendimento</a></li>
                                @endif
                                <li role="separator" class="divider"></li>
                                <li><a href="{{route('campanhas')}}">Campanhas</a></li>
                                <li><a href="{{route('hospitais')}}">Hospitais</a></li>
                                <li><a href="{{route('laboratorios')}}">Laboratórios</a></li>

                            </ul>
                        </li>
                    @endif
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Entrar</a></li>
                        <li><a href="{{ route('register') }}">Novo Doador</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ Auth::user()->name }} ({{Auth::user()->perfil }}) <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Sair
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        @include('flash-message')
        @yield('content')
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}">
</script>
</body>
</html>
