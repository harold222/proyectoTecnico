<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php

    include "Config/funciones.php";

    $host_mysql = "localhost";
    $user_mysql = "root";
    $pass_mysql = "";
    $db_mysql = "proyecto";

    $mysqli = mysqli_connect($host_mysql,$user_mysql,$pass_mysql,$db_mysql);

    $datos = new Funciones;
    
    $nombre = $llamar1 = $datos->clear($nombre);
	$username = $llamar1 = $datos->clear($correo);
	$password = $llamar1 = $datos->clear($pass);
	$cpassword = $llamar1 = $datos->clear($pass2);
    
    
    $q = $mysqli->query("SELECT * FROM clientes WHERE correo = '$username'");

    if(mysqli_num_rows($q)>0){ //si el username ya esta registrado
        ?>
            <script>
                alert("Este usuario ya esta en uso");
                window.location="registro.php";
            </script>
        <?php
        die();
    }
    
	if($password != $cpassword){ //si el confirmar contraseña no es igual
        ?>
        <script>
            alert("Las contraseñas no coinciden");
            window.location="registro.php";
        </script>
        <?php
        die();
    }

    $hash = password_hash($password, PASSWORD_DEFAULT, ['cost' => 10]);

	$mysqli->query("INSERT INTO clientes (password, name, correo) VALUES ('$hash', '$nombre', '$username')");
    
    $q2 = $mysqli->query("SELECT * FROM clientes WHERE correo = '$username'");
	$r = mysqli_fetch_array($q2);
    $_SESSION['id_cliente'] = $r['id'];
    ?>
    <script>
        alert("Te has registrado satisfactoriamente");
        window.location="index.php";
    </script>
    <?php
	die();
?>