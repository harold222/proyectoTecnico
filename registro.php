
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
        <p><a href="#">Inicio</a> / Registro</p>
    </div>

    <h2 class="text-center text-danger">Registrate en la pagina web</h2>    

    <div class="container main-container">
        <div class="col-md-12">
            <form action="completar.php" method="post">
                <div class="row">

                    <div class="col-md-6">
                        <div class="input-contact">
                            <input type="text" autocomplete="off" name="nombre" required>
                            <span style="color: black; z-index: -50;">Tu nombre</span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-contact">
                            <input type="email" autocomplete="off" name="correo" required>
                            <span style="color: black; z-index: -100;">Tu correo</span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-contact">
                            <input type="password" autocomplete="off" name="pass" required>
                            <span style="color: black; z-index: -100;">Contraseña</span>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="input-contact">
                            <input type="password" autocomplete="off" name="pass2" required>
                            <span style="color: black; z-index: -100;">Confirme contraseña</span>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <p>Al hacer clic en "Registrarme", estas aceptando nuestras Condiciones, 
                           el uso de sesiones y el tratamiento de tus datos. 
                           Es posible que te enviemos mensajes a tu correo</p>
                    </div>

                    <div class="col-md-12">
                        <input type="submit" name="enviar" class="btn btn-box btn-block" value="Registrarme">
                    </div>
                    <div class="col-md-12">
                        <a href="login.php" style="font-size: 18px;" class="btn btn-ligtht btn-block">Ya tienes una cuenta?</a>
                    </div>
                </div>
            </form>
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

</body>

</html>