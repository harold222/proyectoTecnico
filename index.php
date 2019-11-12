<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Soporte tecnico LauraP</title>
    <link rel="icon" href="Recursos/img/fav.jpg" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="Recursos/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome -->
    <link rel="stylesheet" href="Recursos/fontawesome/css/all.css">
    <!-- main css -->
    <link href="Recursos/css/style.css" rel="stylesheet">
    <!-- Js personalizable -->
    <script src="js/modernizr.js"></script>
</head>

<body>

    <!--Icono de precarga -->
    <div id="preloader">
        <div class="pre-container">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <!-- box header -->
        <header class="box-header">
            <div class="box-logo">
                <a href="index.html"><img src="Recursos/img/logo.png" width="80" alt="Logo"></a>
            </div>
            <a class="box-primary-nav-trigger" href="#0">
                <span class="box-menu-text">Menu</span><span class="box-menu-icon"></span>
            </a>
        </header>
        <!-- end box header -->

        <nav>
            <ul class="box-primary-nav">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="services.php">Servicios</a></li>
                <li><a href="portfolio.php">productos</a></li>
                <li><a href="contact.php">Contactanos</a></li>
                <?php
                    include "Config/funciones.php";
                    $datos = new Funciones;
                    
                    if(isset($_SESSION['id_cliente'])){
                        $a = $datos->clear($_SESSION['id_cliente']);
                    }

                    if( isset($a) ){
                ?>
                        <li><a href="salir.php">Salir</a></li>
                <?php
                    }else{
                ?>
                        <li><a href="login.php">Login</a></li>
                <?php 
                    }
                ?>
            </ul>
        </nav>

        <!-- box-intro -->
        <section class="box-intro">
            <div class="table-cell">
                <h1 class="box-headline letters rotate-2">
                    <span class="box-words-wrapper">
                        <b class="is-visible">Soporte</b>
                        <b>Tecnico</b>
                        <b>Laura&nbsp;P</b>
                    </span>
		        </h1>
                <h5>¿Deseas aumentar la productividad de tu empresa?</h5>
            </div>
        </section>
        <!-- end box-intro -->
    </div>

    <!--SERVICIOS-->
    <section class="white-bg" id="services">
        <div class="container">
          <div class="row">

            <div class="col-md-3">
              <h3 class="title-small">
                <span>Servicios</span>
              </h3>
              <p class="content-detail"> Nuestra empresa presta diversos tipos de servicios como son 
              </p>
            </div>

            <div class="col-md-9 content-right">
              <div class="row">
                <ul class="listing-item">
                  <li>
                    <div class="col-md-4 col-sm-4">
                        <i class="fas fa-laptop fa-2x"></i>
                        <p class="head-sm">Mantenimiento Computadores</p>
                        <p class="text-grey">
                            Prestamos servicios de mantenimiento de computadores
                        </p>
                    </div>
                  </li>

                  <li>
                    <div class="col-md-4 col-sm-4">
                        <i class="fas fa-mobile-alt fa-2x"></i>
                        <p class="head-sm">Mantenimiento Celulares</p>
                        <p class="text-grey">
                            Prestamos servicios de mantenimiento de celulares 
                        </p>
                    </div>
                  </li>

                  <li>
                    <div class="col-md-4 col-sm-4">
                        <i class="fas fa-compact-disc fa-2x"></i>
                        <p class="head-sm">Instalacion de software </p>
                        <p class="text-grey">
                            Prestamos servicios de instalacion de distintos softwares.
                        </p>
                        </div>
                  </li>
                </ul>

                <ul class="listing-item">
                  <li>
                    <div class="col-md-4 col-sm-4">
                        <i class="fas fa-hammer fa-2x"></i>
                        <p class="head-sm">Desarrollamos Sofware</p>
                        <p class="text-grey">
                            Prestamos servicios de desarrollo de software a la medida del cliente
                        </p>
                    </div>
                  </li>

                  <li>
                    <div class="col-md-4 col-sm-4">
                        <i class="fas fa-book-reader fa-2x"></i>
                        <p class="head-sm">Damos a conocer</p>
                        <p class="text-grey">
                            Enseñamos distantas herramientas de software que pueden aumentar la productividad en las empresas
                        </p>
                    </div>
                  </li>

                  <li>
                    <div class="col-md-4 col-sm-4">
                        <i class="fas fa-money-check-alt fa-2x"></i>
                        <p class="head-sm">Venta</p>
                        <p class="text-grey">
                            Vendemos diversos productos 
                        </p>
                    </div>
                  </li>
                </ul>

              </div>
            </div>
          </div>
        </div>
      </section>

    <!-- portfolio div -->
    <div class="portfolio-div">
        <div class="portfolio">
            <div class="no-padding portfolio_container">
                <!-- single work -->
                <div class="col-md-3 col-sm-6  fashion logo">
                    <a href="services.php" class="portfolio_item">
                        <img src="Recursos/img/portfolio/01.jpg" alt="image" class="img-responsive"/>
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>Elaboracion de</span>
                                    <em>Software</em>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end single work -->

                <!-- single work -->
                <div class="col-md-3 col-sm-6 ads graphics">
                    <a href="services.php" class="portfolio_item">
                        <img src="Recursos/img/portfolio/03.jpg" alt="image" class="img-responsive" />
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>Herramientas en empresas para</span>
                                    <em>Aumentar la productividad</em>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end single work -->

                <!-- single work -->
                <div class="col-md-6 col-sm-12 photography">
                    <a href="services.php" class="portfolio_item">
                        <img src="Recursos/img/portfolio/02.jpg" alt="image" class="img-responsive"  />
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>Mantenimiento de</span>
                                    <em>Celulares</em>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end single work -->

                <!-- single work -->
                <div class="col-md-3 col-sm-6 fashion ads">
                    <a href="services.php" class="portfolio_item">
                        <img src="Recursos/img/portfolio/04.jpg" alt="image" class="img-responsive" />
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>Mantenimiento de</span>
                                    <em>Computadores</em>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end single work -->

                <!-- single work -->
                <div class="col-md-3 col-sm-6 graphics ads">
                    <a href="services.php" class="portfolio_item">
                        <img src="Recursos/img/portfolio/05.jpg" alt="image" class="img-responsive" />
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>Instalacion de</span>
                                    <em>Herramientas digitales</em>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- end portfolio_container -->
        </div>
        <!-- portfolio -->
    </div>
    <!-- end portfolio div -->

    <!-- footer -->
    <br><footer style="background-color: rgb(95, 86, 86);">
        <div class="container-fluid">
            <p class="copyright" style="color: white; font-size: 20px;">© LauraP 2019</p>
        </div>
    </footer>
    <!-- end footer -->

    <!-- back to top -->
    <a href="#0" class="cd-top"><i class="fas fa-arrow-up"></i></a>
    <!-- end back to top -->


    <script src="Recursos/js/jquery-2.1.1.js"></script>
    <!--  plugins -->
    <script src="Recursos/js/bootstrap.min.js"></script>
    <script src="Recursos/js/menu.js"></script>
    <script src="Recursos/js/animated-headline.js"></script>
    <script src="Recursos/js/isotope.pkgd.min.js"></script>

    <!--  custom script -->
    <script src="Recursos/js/custom.js"></script>
    
    <!-- google analytics  -->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-76796224-1', 'auto');
        ga('send', 'pageview');
    </script>
</body>
</html>