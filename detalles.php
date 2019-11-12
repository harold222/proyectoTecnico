<?php
    $a = $_GET['id'];

    include_once("Config/funciones.php");
    $datos2 = new Funciones;

    $products = $datos2->obtenerUnProducto($a);

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

    <link href="Recursos/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Recursos/fontawesome/css/all.css">
    <link href="Recursos/css/style.css" rel="stylesheet">

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
       <!-- box-header -->
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
        <!-- end box-header -->
        
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
        <p><a href="#">Inicio</a> / detalle del producto</p>
    </div>
    
    <!-- main-container -->
    <div class="container main-container">
        <div class="col-md-12">
            <img src="img/portfolio/portfolio.jpg" alt="" class="img-responsive" />
            <div class="h-30"></div>
        </div>

        <?php
            foreach($rows as $row){
        ?>
        <div class="col-md-12">
            <h3 class="text-uppercase text-center text-success"><?= $row['name'] ?></h3>
            <h3  class="text-center">Precio: $<?= number_format($row['price']) ?></h3>
            <div class="h-30"></div>
        </div>

        <div class="col-md-9">
            <h3 class="text-success">Descripcion del producto:</h3>
            <p><?= $row['descripcionProducto'] ?></p>
            
            <h3 class="text-success">Escoja la cantidad del producto:</h3>
            <select name="lista1" id="lista1" class="form-control">
                <?php
                    for ($i=1; $i <= number_format($row['cantidad']); $i++) { 
                        ?>
                            <option value="<?=$i?>"><?=$i?> </option>
                        <?php
                    }
                ?>
            </select>
            <?php
                if(isset($_SESSION['id_cliente'])){
            ?>
                <br><a href="#" style="font-size:19px;" class="btn btn-success btn-block"><i class="fas fa-shopping-cart"></i> Comprar</a>
            <?php
                }
            ?>
        </div>

                  
        <div class="col-md-3">
            <img src="Recursos/img/venta/<?= $row['imagen'] ?>" alt="" width="100%">
        </div>

        <?php
            }
        ?>
    </div>
    <!-- end main-container -->


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