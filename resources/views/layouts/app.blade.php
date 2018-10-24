<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
        <!-- Scripts -->
    
    <script src="{{ asset('js/app.js') }}"></script>


    <!-- FONTAWESOME -->
    <script type="text/javascript" src="{{ asset('js\fontawesome-all.js') }}"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- JQUERY -->
    <script type="text/javascript" src="{{ asset('js\jquery.js') }}"></script>
    <!-- BOOTSTRAP -->
    <script type="text/javascript" src="{{ asset('js\bootstrap.min.js') }}"></script>  
    <script type="text/javascript" src="{{ asset('js\bootstrap-dropdown.js') }}"></script> 

    <title>{{ config('app.name', 'Centro Deportes') }}</title>

    <!--DATA TABLES LIVE SEARCH-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.css') }}"> 
    <!-- Styles -->
    <link href="" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">
</head>
<body>    

    <div id="app">

               <div id="wrapper" class="toggled">
                <!-- Sidebar -->
                    <div id="sidebar-wrapper">
                        <ul class="sidebar-nav">
                            <li class="sidebar-brand">
                                <a style="cursor: default;">
                                    Centro Deportes
                                </a>
                            </li>
                            <li>
                                <a href="articulos">Articulos</a>
                            </li>
                            <li>
                                <a href="proveedores">Proveedores</a>
                            </li>
                            <li>
                                <a href="remitos">Remitos</a>
                            </li>
                            <li>
                                <a href="renglones">Renglones</a>
                            </li>
                            <li>
                                <a href="historialStock">Historial de ventas</a>
                            </li>
                        </ul>
                    </div>


                
    <!-- /#wrapper -->

    <!-- Menu Toggle Script -->

        <div id="page-content-wrapper">
            <div class="container-fluid">
                <nav class="navbar navbar-default navbar-top">
                    <div class="container-fluid">

                        <div class="navbar-header">

                            <!-- Collapsed Hamburger -->
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                                <span class="sr-only">Toggle Navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div>

                        <div class="collapse navbar-collapse" id="app-navbar-collapse">
                            <!-- Left Side Of Navbar -->
                            <ul class="nav navbar-nav">
                                &nbsp;
                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="nav navbar-nav navbar-right">

                                <!-- Authentication Links -->
                                @guest
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                @else
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        </div>
        @yield('content')
    </div>



    <script>
        $(document).ready(function(){

            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        });
    </script> 
    
        <!--DATA TABLES LIVE SEARCH -->
    <script type="text/javascript" src="{{ asset('js\dataTables.js') }}"></script>
</body>
</html>
