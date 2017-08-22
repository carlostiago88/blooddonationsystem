@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Relatórios</h2>
            <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab">Agendamentos</a></li>
                <li><a href="#profile" data-toggle="tab">Doações</a></li>
                <li><a href="#profile" data-toggle="tab">Avaliações</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active in" id="home">
                    <p>.</p>
                </div>
                <div class="tab-pane fade" id="profile">
                    <p>..</p>
                </div>
                <div class="tab-pane fade" id="dropdown1">
                    <p>...</p>
                </div>
                <div class="tab-pane fade" id="dropdown2">
                    <p>....</p>
                </div>
            </div>
        </div>
    </div>
@endsection
