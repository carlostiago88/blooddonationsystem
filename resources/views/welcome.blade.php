<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blood Donation System</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            /*color: #636b6f;
            color: #761c19;*/
            color: #2c3e50;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 64px;
        }

        .links > a {
            color: #761c19;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>

    <title>{{ config('app.name', 'BloodDonationSystem') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            BDS - Blood Donation System
        </div>

        <div class="links">
            <!--<a href="{{--route('doador.login')--}}">Doador</a>
                    <a href="">Doador</a>
                    <a href="https://laravel.com/docs">Laboratório</a>
                    <a href="https://laravel.com/docs">Hospital</a>
                    <a href="https://laravel.com/docs">Hemocentro</a>-->
            <a href="{{ route('campanhas') }}">Campanhas</a>
            @if (Route::has('login'))
                @if (!Auth::check())
                    <a href="{{ url('/login') }}">Entrar</a>
                    <a href="{{ url('/register') }}">Novo Doador</a>
                @endif
            @endif
        </div>
    </div>
</div>
</body>
</html>
