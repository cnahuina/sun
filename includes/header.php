<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>SunTime Store | Estilo & Moda</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/logo_ofi.png">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- JS InstanFeed-->
    <script src="https://cdn.rawgit.com/stevenschobert/instafeed.js/master/instafeed.min.js"></script>
    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">


    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
    <!--===============================================================================================-->
    


</head>

<body>
    <!-- CODE SDK FACEBOOK -->

    <script>
        window.fbAsyncInit = function() {
            FB.init({
            appId            : '630445934016844',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v3.1'
            });
        };

        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    
    <!-- FIN CODE SDK FACEBOOK -->


    <!-- Preloader 
    <div id="preloader">
        <div class="preload-content">
            <div id="original-load"></div>
        </div>
    </div>-->

    <!-- Subscribe Modal -->
    <div class="subscribe-newsletter-area">
        <div class="modal fade" id="subsModal" tabindex="-1" role="dialog" aria-labelledby="subsModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="modal-body">
                        <h5 class="title">Suscríbete</h5>
                            <?php include("includes/mailling.php");?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Subscribe Modal -->
    <div class="subscribe-newsletter-area">
        <div class="modal fade" id="subsModal" tabindex="-1" role="dialog" aria-labelledby="subsModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="modal-body">
                        <h5 class="title">Producto</h5>
                        <form action="#" class="newsletterForm" method="post">
                            <input type="email" name="email" id="subscribesForm2" placeholder="Ingresa tu Email">
                            <button type="submit" class="btn original-btn">Suscribir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <!-- Breaking News Area -->
                    <div class="col-12 col-sm-8">
                        <div class="breaking-news-area">
                            <div id="breakingNewsTicker" class="ticker">
                                <ul>
                                    <li><a href="#">Envío Gratis a todo lima</a></li>
                                    <li><a href="#">30% de Descuento en toda la tienda</a></li>
                                    <li><a href="#">Participa de la encuesta y gana</a></li>
                                  
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Top Social Area -->
                    <div class="col-12 col-sm-4">
                        <div class="top-social-area">
                        <!-- Subscribe btn -->
                        <div class="subscribe-btn">
                            <a href="#" class="btn subscribe-btn" data-toggle="modal" data-target="#subsModal">Suscribirme</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logo Area 
        <div class="logo-area text-center">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <a href="index.php" class="suntime-logo"><img src="img/core-img/logo_ofi.png" width="80" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        -->
        <!-- Nav Area -->
        <div class="original-nav-area" id="stickyNav">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between">


                        <!-- Logo -->
                        <div class="logo_movil">
                            <a href="index.php" class="suntime-logo"><img src="img/core-img/logo_ofi.png" width="80" alt=""></a>
                        </div>  
                        <!-- fin logo -->

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu" id="originalNav">
                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul >
                                    <li><a href="index.php">Inicio</a></li>
                                    <li><a href="nosotros.php">Nosotros</a></li>
                                    <li><a href="suntime-travel.php">Suntime Travel</a></li>
                                    <li><a href="#">Productos</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li class="title">Lentes</li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li class="title">Relojes</li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li class="title">Gorras</li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li class="title">Ofertas</li>
                                                <li><img src="img/kit.jpg" alt="" width="200"></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="contacto.php">Contacto</a></li>
                                </ul>

                                <!-- Search Form  -->
                                <div id="search-wrapper">
                                    <form action="#">
                                        <input type="text" id="search" placeholder="Empezar a buscar...">
                                        <div id="close-icon"></div>
                                        <input class="d-none" type="submit" value="">
                                    </form>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->