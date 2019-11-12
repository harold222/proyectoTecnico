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
    <!-- modernizr -->
    <script src="Recursos/js/modernizr.js"></script>
</head>

<body>

    <div id="preloader">
        <div class="pre-container">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <header class="box-header">
            <div class="box-logo">
                <a href="index.html"><img src="Recursos/img/logo.png" width="80" alt="Logo"></a>
            </div>

            <a class="box-primary-nav-trigger" href="#0">
                <span class="box-menu-text">Menu</span><span class="box-menu-icon"></span>
            </a>

        </header>

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

    </div>

    <div class="top-bar">
        <h1>Soporte Tecnico LauraP</h1>
        <p><a href="#">Inicio</a> / Contactanos</p>
    </div>

    <div class="container main-container">
        <div class="col-md-6">
            <form action="Config/correo.php" method="post">
                <div class="row">

                    <div class="col-md-6">
                        <div class="input-contact">
                            <input type="text" name="nombre" required>
                            <span style="color: black; z-index: -50;">Tu nombre</span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-contact">
                            <input type="email" name="correo" required>
                            <span style="color: black; z-index: -50;">Tu correo</span>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="input-contact">
                            <input type="text" name="asunto" required>
                            <span style="color: black; z-index: -50;">Asunto</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="textarea-contact">
                            <textarea name="mensaje" required></textarea>
                            <span style="color: black; z-index: -50;">Mensaje</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-box btn-block" value="Enviar">
                    </div>
                </div>
            </form>
        </div>

        <div style="margin-top: -15px;" class="col-md-6">
            <h3 class="text-uppercase">Contactanos</h3>
            <h5>Tecnico en informacion de sistemas</h5>
            <div class="h-30"></div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3976.1011588136294!2d-74.09644758590976!3d4.752451592531584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1scalle%20152b%20%23104-50!5e0!3m2!1ses-419!2sco!4v1573007549694!5m2!1ses-419!2sco" width="95%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            
            <div class="contact-info">
                <p><i class="fas fa-envelope-square fa-2x"></i>laura.prieto30@hotmail.com</p>
            </div>
        </div>


    </div>

    <br><footer style="background-color: rgb(95, 86, 86);">
        <div class="container-fluid">
            <p class="copyright" style="color: white; font-size: 20px;">© LauraP 2019</p>
        </div>
    </footer>

    <a href="#0" class="cd-top"><i class="fas fa-arrow-up"></i></a>

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