<?php
        include "Config/funciones.php";
        $datos = new Funciones;

        $host_mysql = "localhost";
        $user_mysql = "root";
        $pass_mysql = "";
        $db_mysql = "proyecto";

        $mysqli = mysqli_connect($host_mysql,$user_mysql,$pass_mysql,$db_mysql);

        $username = $datos->clear($correo);
        $password = $datos->clear($pass);

		$hash=0;

		$q5 = $mysqli->query("SELECT * FROM clientes WHERE correo = '$username'");

		if(mysqli_num_rows($q5)>0){//si existe ese usuario
			while($r5=mysqli_fetch_array($q5)){
				$hash = $r5['password'];//obtengo el hash del usuario
			}
        }else{
           ?>
                <script>
                    alert("El correo no se encuentra registrado.");
                    window.location="registro.php";
                </script>
            <?php
            die();
		}

		if(password_verify($password, $hash)){
			$q = $mysqli->query("SELECT * FROM clientes WHERE correo = '$username' AND password = '$hash'");
			if(mysqli_num_rows($q)>0){
				$r = mysqli_fetch_array($q);
				$_SESSION['id_cliente'] = $r['id'];

				if(isset($return))
					redir("?p=".$return);
                else
                    $datos->redir("./");
				
			}else{
                ?>
                    <script>
                        alert("Los datos ingresados estan incorrectos");
                        window.location="login.php";
                    </script>
                <?php
                die();
			}	
		}else{
			?>
                <script>
                    alert("Los datos ingresados estan incorrectos");
                    window.location="login.php";
                </script>
            <?php
            die();
		}
    
?> 