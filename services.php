<?php
    include_once("Config/funciones.php");
    $datos2 = new Funciones;

    $products = $datos2->obtenerServicios();

    while($row = $products->fetch_array()){
        $rows[] = $row;
    }
?>

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

    <!-- main css -->
    <link href="Recursos/css/style.css" rel="stylesheet">

    <!-- modernizr -->
    <script src="Recursos/js/modernizr.js"></script>
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div class="pre-container">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- end Preloader -->

    <div class="container-fluid">
        <!-- box header -->
        <header class="box-header">
            <div class="box-logo">
                <a href="index.html"><img src="Recursos/img/logo.png" width="80" alt="Logo"></a>
            </div>
            <!-- box-nav -->
            <a class="box-primary-nav-trigger" href="#0">
                <span class="box-menu-text">Menu</span><span class="box-menu-icon"></span>
            </a>
            <!-- box-primary-nav-trigger -->
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
        <p><a href="#">Inicio</a> / Sevicios</p>
    </div>

    <div class="container or">
            <div class="row" style="position: relative;">
            <?php
                foreach($rows as $row){
            ?>
                <div class="col-8" style="border: 1px solid #999;">
                    <hr>
                    <img class="imgServicios" src="Recursos/img/servicios/<?= $row['imagenServicio'] ?>" style="width: 250px; display:flex; margin:0 auto;"><br>
                    <h3 class="mt-2 text-center"><?= $row['nameServicio'] ?></h3>
                    <div class="h-8 text-center"></div>
                    <p style="21px" class="text-center"> <?= $row['descripcionServicio'] ?></p>
                </div>
            <?php
                }
            ?>
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