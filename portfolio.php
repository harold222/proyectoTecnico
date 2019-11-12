<?php
    include_once("Config/funciones.php");
    $datos2 = new Funciones;

    $products = $datos2->obtenerProductos();

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
            <!-- box-nav -->
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
        <p><a href="#">Inicio</a> / Productos</p>
    </div>

    <!-- main container -->
    <div class="main-container portfolio-inner clearfix">

        <h2 class="text-center" style="color: black;">Busca aqui tus productos favoritos..!</h2>

        <div class="portfolio-div">
            <div class="portfolio">
                <!-- portfolio_filter -->
                <div class="categories-grid wow fadeInLeft">
                    <nav class="categories text-center">
                        <ul class="portfolio_filter">
                            <li><a href="" class="active" data-filter="*">All</a></li>
                            <li><a href="" data-filter=".cel">Celulares</a></li>
                            <li><a href="" data-filter=".pc">Computadores</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="no-padding portfolio_container clearfix">

                    <?php
                        foreach($rows as $row){
                    ?>
                        <div class="col-md-4 col-sm-6  fashion <?= $row['tipo'] ?>">
                        <a href="detalles.php?id=<?= $row['id']?>" class="portfolio_item">
                            <img src="Recursos/img/venta/<?= $row['imagen']?>" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <h4><span><?= $row['name']?></span></h4>
                                        <p style="font-size: 21px"><em><?= $row['descripcionProducto']?></em></p>
                                        <p style="font-size: 22px">precio: $<?= number_format($row['price'])?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php
                        }
                    ?>
                </div>
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

</body>

</html>