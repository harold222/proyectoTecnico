<?php
    include "Config/funciones.php";
    $datos = new Funciones;

    @session_destroy();
    
    $datos->redir("./");
?>