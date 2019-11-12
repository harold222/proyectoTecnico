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
    <link rel="stylesheet" href="Recursos/fontawesome/css/all.css">
    <!-- main css -->
    <link href="Recursos/css/style.css" rel="stylesheet">
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
        <h1>Soporte Tecnico Laura&nbsp;P</h1>
        <p><a href="#">Inicio</a> / Blog</p>
    </div>
    <div class="content-wrap">
      <div class="content">
        <div class="container main-container clearfix">
            <section class="grey-bg" id="blog">
              <div class="container">

                <div class="row">
                  <div class="col-md-12">
                    <h3 class="title-small-center text-center">
                      <span>Blog</span>
                    </h3>
                    <div class="row">
                      <div class="col-md-6 col-md-offset-3">
                        <p class="content-details text-center" style="font-size: 19px;">
                          Encuentra aqui informacion de interes sobre nosotros y sobre lo que ofrecemos
                        </p>
                      </div>
                    </div>

                    <div class="grid">
                      <div class="grid-item">
                        <div class="wrap-article">
                          <img alt="blog-1" class="img-circle text-center" src="Recursos/img/blog/1.png">
                          <p class="subtitle fancy">
                            <span>Mantenimiento</span>
                          </p>
                          <a href="services.php" target="_blank">
                            <h3 class="title">Mantenimiento preventivo</h3>
                          </a>
                          <p class="content-blog">
                            Es el destinado a la conservación de equipos o instalacion
                            mediantela revisión y limpieza que garanticen 
                            su buen funcionamiento, se realiza en equipos en condiciones de funcionamiento, por 
                            oposición al mantenimiento correctivo que repararo pone en condiciones 
                            de funcionamiento aquellos que dejaron de funcionar.
                          </p>
                        </div>
                      </div>
          
                      <div class="grid-item">
                        <div class="wrap-article">
                          <img alt="blog-4" class="img-circle text-center" src="Recursos/img/blog/2.jpg">
                          <p class="subtitle fancy">
                            <span>Mantenimiento</span>
                          </p>
                          <a href="services.php" target="_blank">
                            <h3 class="title">Mantenimiento correctivo</h3>
                          </a>
                          <p class="content-blog">
                           Es aquel que me brinda o corrige los defectos observados en los equipamientos 
                           o instalaciones, es la forma más básica de mantenimiento y consiste en localizar 
                           averías o defectos para corregirlos o repararlos por su naturaleza no pueden planificarse 
                           en el tiempo presenta costos por reparación y repuestos no presupuestadas.
                          </p>
                        </div>
                      </div>
          
                      <div class="grid-item">
                        <div class="wrap-article">
                          <img alt="blog6" class="img-circle text-center" src="Recursos/img/blog/3.png">
                          <p class="subtitle fancy">
                            <span>Para empresas</span>
                          </p>
                          <a href="https://www.atlassian.com/es/software/jira" target="_blank">
                            <h3 class="title">Jira</h3>
                          </a>
                          <p class="content-blog">
                            Es una herramienta en línea para la administración de tareas de un proyecto, 
                            el seguimiento de errores y gestión operativa de proyectos, puede ser utilizado para la gestión y mejora de los procesos, gracias a sus 
                            funciones para la organización de flujos de trabajo, basado en Java EE, 
                            funciona en varias bases de datos y sistemas operativos
                          </p>
                        </div>
                      </div>
                            
                      <div class="grid-item">
                        <div class="wrap-article">
                          <img alt="blog2" class="img-circle text-center" src="Recursos/img/blog/4.png">
                          <p class="subtitle fancy">
                            <span>Para empresas</span>
                          </p>
                          <a href="https://trello.com/" target="_blank">
                            <h3 class="title">Trello</h3>
                          </a>
                          <p class="content-blog">
                            Trello es un software de administración de proyectos con interfaz web y con 
                            cliente para iOS y android para organizar proyectos, Empleando el sistema kanban, 
                            para el registro de actividades con tarjetas virtuales organiza tareas, permite 
                            agregar listas, adjuntar archivos, etiquetar eventos, agregar comentarios y 
                            compartir tableros.
                          </p>
                        </div>
                      </div>
          
                      <div class="grid-item">
                        <div class="wrap-article">
                          <img alt="blog5" class="img-circle text-center" src="Recursos/img/blog/5.png">
                          <p class="subtitle fancy">
                            <span>Para grupos de trabajo</span>
                          </p>
                          <a href="https://github.com/" target="_blank">
                            <h3 class="title">Github</h3>
                          </a>
                          <p class="content-blog">
                            GitHub es una forja plataforma de desarrollo colaborativo para alojar proyectos
                            utilizando el sistema de control de versiones Git, Se utiliza principalmente 
                            para la creación de código fuente de programas de ordenador, es una herramienta 
                            de trabajo colaborativo entre programadores.
                          </p>
                        </div>
                      </div>
                      
                      <div class="grid-item">
                        <div class="wrap-article">
                          <img alt="blog5" class="img-circle text-center" src="Recursos/img/blog/6.jpg">
                          <p class="subtitle fancy">
                            <span>Para grupos de trabajo</span>
                          </p>
                          <a href="https://teams.microsoft.com/downloads" target="_blank">
                            <h3 class="title">Microsoft Teams</h3>
                          </a>
                          <p class="content-blog">
                            Es una nueva plataforma creada por Microsoft que sustenta el trabajo en equipo 
                            en las empresas; este tipo de software, que pone a disposición salas de chat, 
                            fuentes de noticias y grupos para el año de las empresas, forma parte del paquete 
                            365 de Microsoft Office y no puede ser configurado individualmente.
                          </p>
                        </div>
                      </div>
                      
                      <div class="grid-item">
                        <div class="wrap-article">
                          <img alt="blog5" class="img-circle text-center" src="Recursos/img/blog/7.png">
                          <p class="subtitle fancy">
                            <span>Para empresas</span>
                          </p>
                          <a href="https://www.sap.com/latinamerica/about.html" target="_blank">
                            <h3 class="title">Sap</h3>
                          </a>
                          <p class="content-blog">
                            Es una empresa multinacional alemana dedicada al diseño de productos informáticos de 
                            gestión empresarial, tanto para empresas como para organizaciones y organismos públicos, 
                            sus productos cubren aspectos claves de gestión como CRM, ERP, PLM, SCM y SRM.
                          </p>
                        </div>
                      </div>
                      
                      <div class="grid-item">
                        <div class="wrap-article">
                          <img alt="blog5" class="img-circle text-center" src="Recursos/img/blog/8.png">
                          <p class="subtitle fancy">
                            <span>Software instalacion</span>
                          </p>
                          <a href="https://driver-booster.uptodown.com/windows" target="_blank">
                            <h3 class="title">Driver Booster</h3>
                          </a>
                          <p class="content-blog">
                          es una práctica herramienta diseñada para actualizar todos los controladores y drivers de nuestro 
                          sistema Windows, ya sean audio, vídeo o cualquier otro dispositivo externo conectado al equipo,
                           por lo que evitaremos problemas de rendimiento en nuestro hardware o los errores y agujeros de seguridad.
                          </p>
                        </div>
                      </div>
                      
                      <div class="grid-item">
                        <div class="wrap-article">
                          <img alt="blog5" class="img-circle text-center" src="Recursos/img/blog/9.png">
                          <p class="subtitle fancy">
                            <span>Software instalacion</span>
                          </p>
                          <a href="https://ninite.com/" target="_blank">
                            <h3 class="title">Ninite</h3>
                          </a>
                          <p class="content-blog">
                            Es un sistema de gestión de paquetes que permite a los usuarios instalar automáticamente aplicaciones
                             populares para su sistema operativo Windows. Permite a los usuarios hacer una selección 
                             de una lista de aplicaciones y agrupa la selección en un solo paquete de instalación.
                          </p>
                        </div>
                      </div>
                              
                    </div>

                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
          
    <br><footer style="background-color: rgb(95, 86, 86); bottom: 0; position: fixed; width: 100%;">
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