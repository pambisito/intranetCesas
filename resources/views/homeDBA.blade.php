<!DOCTYPE html>
<html lang="en" class=" js no-touch cssanimations js no-touch cssanimations">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema de Notas | Academia Cesas SMP</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Favicon -->
        <link type="image/x-icon" href="{{ asset('images/logo3.png') }}" rel="shortcut icon"/>
        <link rel="icon" href="{{ asset('images/logo3.png') }}">
        <link rel="shortcut-icon" href="{{ asset('images/logo3.png') }}">



        <link href="{{ asset('css/bootstrap/bootstrap1.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/propio.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/cesas/theme-white.css') }}" rel="stylesheet"/>
        
        <link href="{{ asset('css/libs/font-awesome.css') }}" type="text/css" rel="stylesheet"/>
        <link rel="stylesheet" href="{{ asset('css/libs/nanoscroller.css') }}" type="text/css"/>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/compiled/layout.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/compiled/elements.css') }}">
        
        <link rel="stylesheet" type="text/css" href="{{ asset('css/cesas/dataTables.bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/cesas/responsive.bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/cesas/jquery-confirm.min.css') }}">
        
        <link href="{{ asset('css/cesas/select2.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/cesas/select2-bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/cesas/daterangepicker.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/cesas/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" />        

        <link rel="stylesheet" href="{{ asset('css/libs/fullcalendar.css') }}" type="text/css"/>
        <!--<link rel="stylesheet" href="../assets/css/libs/fullcalendar.print.css" type="text/css" media="print"/>
        <link rel="stylesheet" href="../assets/css/compiled/calendar.css" type="text/css" media="screen"/>-->
        <link rel="stylesheet" href="{{ asset('css/libs/morris.css') }}" type="text/css"/>
        <!--<link rel="stylesheet" href="../assets/css/libs/daterangepicker.css" type="text/css"/>-->
        <link rel="stylesheet" href="{{ asset('css/libs/jquery-jvectormap-1.2.2.css') }}" type="text/css"/>

        <!--Importante para mostrar Notificaciones-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/libs/ns-default.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/libs/ns-style-attached.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/libs/ns-style-bar.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/libs/ns-style-growl.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/libs/ns-style-other.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/libs/ns-style-theme.css') }}">

        <!--Importante para mostrar efectos en modales-->
        <!--<link rel="stylesheet" type="text/css" href="../assets/css/libs/nifty-component.css">-->

        <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap-editable.css') }}" type="text/css"/>


        <link href="{{ asset('css/pace/pace-theme-barber-shop.css') }}" rel="stylesheet" />

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <!-- RECURSOS DE JQUERY + BOOTSTRAP -->
        <script type="text/javascript" src="{{ asset('js/jquery/jquery-2.2.3.min.js') }}"></script>
        <!-- <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script> -->
        <!-- <script type="text/javascript" src="{{ asset('js/jquery/jquery.mCustomScrollbar.min.js') }}"></script> -->
        <!-- <script type="text/javascript" src="{{ asset('js/jquery/jquery.bestupper.min.js') }}"></script>  -->
        
        <!-- <script type="text/javascript" src="{{ asset('js/jquery/moment.min.js') }}"></script>  
        <script src="{{ asset('js/jquery/daterangepicker.js') }}"></script>
        <script src="{{ asset('js/jquery/bootstrap-datetimepicker.min.js') }}"></script> 
        <script src="{{ asset('js/cesas/popper.min.js') }}"></script> -->
        
        <!-- <script type="text/javascript" src="{{ asset('js/datatables/jquery.dataTables.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/datatables/dataTables.bootstrap.min.js') }}"></script>        
        <script type="text/javascript" src="{{ asset('js/datatables/dataTables.responsive.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/datatables/dataTables.show.rows.js') }}"></script> -->

        <!-- <script type="text/javascript" src="{{ asset('js/jquery/bootstrap-notify.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery/jquery.serializejson.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery/jquery.validate.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery/jquery-confirm.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery/jquery.animate.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery/select2.full.min.js') }}"></script> -->

        <!-- <script type="text/javascript" src="{{ asset('js/cesas/util/formularioUtil.js') }}"></script>   
        <script type="text/javascript" src="{{ asset('js/cesas/util/util.js') }}"></script>  -->
        
        <!-- <script src="{{ asset('js/bootstrap-editable.min.js') }}"></script>
        <script src="{{ asset('js/pace/pace.min.js') }}"></script> -->

        <script src="{{ asset('js/scripts.js') }}"></script>

    </head>
    <body class="theme-blue-gradient fixed-header pace-done">
        <div class="pace pace-inactive">
            <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
                <div class="pace-progress-inner"></div>
            </div>
            <div class="pace-activity"></div>
        </div>
        <!-- MENÚ SUPERIOR -->
        <header class="navbar" id="header-navbar">
            <div class="container">
                <a href="#" id="logo" class="navbar-brand">Sistema de Notas</a>
                <div class="clearfix">
                    <button class="navbar-toggle" data-target=".navbar-ex1-collapse" data-toggle="collapse" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="nav-no-collapse navbar-left pull-left hidden-sm hidden-xs">
                        <ul class="nav navbar-nav pull-left">
                            <li>
                                <a class="btn" id="make-small-nav">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav-no-collapse pull-right" id="header-nav">
                        <ul class="nav navbar-nav pull-right">
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="hidden-xs">
                                        {{ Auth::user()->apellidoPaterno." ".Auth::user()->apellidoMaterno." ".Auth::user()->nombres }}
                                    </span> 
                                </a>
                            </li>
                            <li class="hidden-xxs">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fa fa-power-off"></i><span>Salir</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </header>
        <!-- ./ MENÚ SUPERIOR -->

        <!-- CONTAINER PAGINA -->
        <div id="page-wrapper" class="container">
            <div class="row">
                <!-- MENU IZQUIERDA -->
                <div id="nav-col">
                    <section id="col-left" class="col-left-nano" style="position: relative;">
                        <div id="col-left-inner" class="col-left-nano-content" style="position: relative;">
                            <div id="user-left-box" class="clearfix hidden-sm hidden-xs">
                                <div class="user-box">
                                    <span class="name">
                                        Bienvenido
                                        <br/>
                                        {{ Auth::user()->nombres }}
                                    </span>
                                    <span class="status">
                                        <i class="fa fa-circle"></i> En línea
                                    </span>
                                </div>
                            </div>
                            <div class="collapse navbar-collapse navbar-ex1-collapse" id="sidebar-nav">
                                <ul class="nav nav-pills nav-stacked">
                                    <li>
                                        <a href="{{ route('login') }}">
                                            <i class="fa fa-home"></i>
                                            <span>Inicio</span>
                                        </a>
                                    </li>

                                    <li class="dropdown ">
                                        <a href="#" class="dropdown-toggle">
                                            <i class="fa fa-user"></i>
                                            <span>Registrar Persona</span>
                                            <i class="fa fa-chevron-circle-right drop-icon"></i>
                                        </a>
                                        <ul class="submenu" style="display: none;">
                                            <li class="admin-menu-perfil"><a href="#">&nbsp;&nbsp;Academia</a></li>
                                            <li class="admin-menu-historial"><a href="#">&nbsp;&nbsp;Colegio</a></li>
                                            <li><a href="#">&nbsp;&nbsp;Profesor</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="fa fa-power-off"></i>
                                            <span>Salir</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- ./MENU IZQUIERDA -->

                <!-- CONTAINER DERECHA -->
                <div id="content-wrapper">
                    @yield('content')
                    <!-- FOOTER -->
                    <footer id="footer-bar" class="row" style="opacity: 1;">
                        <p id="footer-copyright" class="col-xs-12">&copy; Copyright 2020 Academia Cesas. Todos los derechos reservados</p>
                    </footer>
                    <!-- ./FOOTER -->

                </div>
                <!-- ./FIN CONTAINER DERECHA -->
            </div>
        </div>
        <!-- ./ FIN CONTAINER PAGINA -->
        
    </body>
</html>
