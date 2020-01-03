<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/index.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/8fff6865c6.js" crossorigin="anonymous"></script>

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Montserrat+Alternates&display=swap" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

</head>

<body>

    <header id="header">
        <div class="container-fluid">
            <div id="logo" class="pull-left">
                <h1><a href="#intro" class="scrollto">Saude<strong><i class="fas fa-plus" id="plus"></i></strong></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
             <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>
          </div>

          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li class="menu-active"><a href="#intro">Início</a></li>
                <li><a href="#about">Sobre</a></li>
                <li><a href="#prev">Prevenção</a></li>
                <li><a href="#news">Notícias</a></li>
                @guest
                    <li><a href="{{ route("login") }}">Entrar</a></li>
                    <li><a href="{{ route("register") }}">Cadastre-se</a></li>
                @else
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Sair</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                        style="display: none;">
                        @csrf
                    </form>
                    </li>
                @endguest
            </ul>
          </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->


        <main class="cont">
            @yield('content')
        </main>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!--<div id="preloader"></div>-->

    <!-- JavaScript Libraries -->
    <script src="{{ asset('jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('jquery/jquery-migrate.min.js') }}"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>

    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
