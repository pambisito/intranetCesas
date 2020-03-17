<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Academia Cesas SMP</title>

        <!-- Menú despegable -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!-- Favicon -->
        <link type="image/x-icon" href="{{ asset('images/logo3.png') }}" rel="shortcut icon"/>
        <link rel="icon" href="{{ asset('images/logo3.png') }}">
        <link rel="shortcut-icon" href="{{ asset('images/logo3.png') }}">

        <!-- Estilos -->
        <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/libs/font-awesome.css') }}" type="text/css" rel="stylesheet"/>
        <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet"/>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


        <!-- Styles -->

    </head>
    <!-- BODY -->
    <body>
        <header>
            <!-- top menu -->
            <section id="top-menu">
                <div class="container">
                    <div class="row"></div>
                </div>
            </section>

            <!-- header -->
            <header id="header">
                <div class="container">
                    <div class="row header-top">
                        <div class="col-lg-6 logo">
                            <a class="logo-img" href="/" data-original-title="Academia Cesas SMP - Consorcio Educativo CESAS S.A.C">
                                <img src="{{ asset('images/logo3.png') }}" alt="CESAS">
                            </a>
                            <br>
                            <h1 style = "font-size: 23px;" class="tagline"><strong>Academia Cesas SMP</strong><br>Consorcio Educativo CESAS S.A.C</h1>
                        </div>
                    </div>
                </div>
            </header>

            <div class="container">
                <div class="navbar navbar-default" role="navigation" id="menu-home">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"></a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="/"><span class="fa fa-home" aria-hidden="true"></span> INICIO</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="fa fa-sitemap" aria-hidden="true"></span> 
                                    QUIÉNES SOMOS
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><span class="fa fa-caret-right" aria-hidden="true"></span> Qué es Cesas</a></li>
                                    <li><a href="#"><span class="fa fa-caret-right" aria-hidden="true"></span> Academia</a></li>
                                    <li><a href="#"><span class="fa fa-caret-right" aria-hidden="true"></span> Colegio</a></li>
                                </ul>
                            </li>

                            <li class=""><a href="#"><span class="fa fa-book" aria-hidden="true"></span> REGLAMENTO</a></li>

                            <li class=""><a href="#"><span class="fa fa-award" aria-hidden="true"></span> CICLOS</a></li>
                            


                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-share-alt" aria-hidden="true"></span> ENLANCES EXTERNOS
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="http://www.unmsm.edu.pe" target="_blank"><span class="fa fa-caret-right" aria-hidden="true"></span> UNMSM</a></li>
                                    
                                </ul>
                            </li>
                            <li class=""><a href="#"><span class="fa fa-users" aria-hidden="true"></span> CONTACTO</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="{{ route('login') }}" class="btn btn-default emerald-bg fg-color-white">
                                    <i class="fa fa-user"></i>
                                    Iniciar sesión
                                </a>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </header>
        <div class="container">
            @yield('content ')
        </div>
        <!-- footer -->
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xs-12">
                        <p class="heading">Academia Cesas</p>
                        <address>
                            <p><i class="fa fa-map-marker"></i><a href="https://www.google.com/maps/@-12.028709,-77.0854886,3a,75y,9.8h,91.5t/data=!3m6!1e1!3m4!1s_XfQXecA_2211LA-NMKrFQ!2e0!7i13312!8i6656"> Av. Lima 3606 SMP alt. cuadra 36 Av. Perú (Mercado 105)</a></p>
                            <p><i class="fa fa-phone"></i><a href="#"> Teléfono: 220 3298 </a></p>
                            <p><i class="fa fa-envelope"></i><a href="mailto:#"> alfalosolivos@hotmail.com</a></p>
                            <p><i class="fa fa-clock-o"></i><a href="#"> Horario de atención: Lunes a Viernes (9:00 a.m. a 2:00 p.m. y 4:00 p.m. a 7:00 p.m.) Sábado (9:00 a.m. a 2:00 p.m)</a></p>
                            <p><i class="fab fa-facebook"></i><a href="https://www.facebook.com/Academia.Cesas"> Academia Cesas SMP</a></p>
                            <p><i class="fab fa-instagram"></i><a href="https://www.instagram.com/academiacesas"> Academia Cesas SMP</a></p>
                            
                        </address>
                    </div>
                    <div class="col-lg-2 col-md-2 col-xs-12">
                        <p class="heading">Nosotros</p>
                        <ul class="footer-navigate">
                            <li><a href="#">¿Quiénes somos?</a></li>
                            <li><a href="#">Academia</a></li>
                            <li><a href="#">Colegio</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-2 col-xs-12">
                        <p class="heading">Reglamento</p>
                        <ul class="footer-navigate">
                            <li><a href="#">Reglamento</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-2 col-xs-12">
                        <p class="heading">Enlaces Externos</p>
                        <ul class="footer-navigate">
                            <li><a href="http://unmsm.edu.pe/">Portal de la UNMSM</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer menu-->
        <section id="footer-menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <p class="copyright">&copy; Copyright 2020 Academia Cesas. Todos los derechos reservados</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./ FIN DE BODY -->
    </body>
</html>
