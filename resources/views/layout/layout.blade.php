<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel-sw</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <style>
        .menu{
            margin:0px !important;
            width:100%;

        }
        p{
            text-align:justify;
        }
        img{
            display: block;
            margin: auto;
        }

        </style>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">COLOMBIA</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="{{ Request::is('/') ? 'active' : '' }} "><a href="{{ url('/') }}">Bogota <span class="sr-only">(current)</span></a></li>
                    <li class="{{ Request::is('bucaramanga') ? 'active' : '' }} "><a href="{{ url('bucaramanga') }}">Bucaramanga</a></li>
                    <li class="{{ Request::is('cali') ? 'active' : '' }} "><a href="{{ url('cali') }}">Cali</a></li>
                    <li class="{{ Request::is('medellin') ? 'active' : '' }} "><a href="{{ url('medellin') }}">Medellin</a></li>
                </ul>
                </div>
            </div>
        </nav>
        <div class="container">
           
          @yield('content')
        </div>
          
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>