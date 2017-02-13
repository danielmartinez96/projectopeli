<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pelis</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

    </body>
    </html>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
        .body-page{

          border-style: double;
          border-width: 3px;
          border-color: black;
          background-color: #f8f8f8;
 }
          .side-bar{
            border-style: ridge;
            border-width: 4px;
            border-color: grey;
            background-color: lightgrey;
            font-family: fantasy;
             position:relative;
             z-index: 2;


          }

          .imagen-grande{

            width: 250px;
            height:350px;

          }

          .imagen-pelicula{

            border-style: ridge;
            border-width: 4px;
            border-color: grey;
          }

          .informacion-pelicula
          {

            border-style: ridge;
            border-width: 4px;
            border-color: grey;
            font-family: fantasy;

          }
          .comentario-pelicula
          {

            border-style: ridge;
            border-width: 4px;
            border-color: grey;
            font-family: fantasy;

          }
          .comentario-recuadro
          {

            border-bottom:ridge;
            border-top: ridge;
            border-width: 4px;
            border-color: grey;
            font-family: fantasy;

          }


        .poster{
        width: 100%;
        height: 100%;
        }
        .poster-media-card{
          border-color: black;
          border-bottom: 1px;
          width: 150px;
          height: 190px;



        }
        .poster-relativo
        {
          width: 200px;
          height: 230px;


        }




        h1 {


        }
        .genero
        {
          border-bottom: 3px solid black;
          background-color: lightgrey;
          font-size: 16px;
        }


        .info
        {
          text-align: center;
          color: red;
          text-decoration: underline;
          text-decoration-color: red;
        }

    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Pelis
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/peliculas') }}">Peliculas</a></li>
                </ul>




                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/user/alquileres') }}"><i class="fa fa-btn fa-sign-out"></i>Alquileres</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>


    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
