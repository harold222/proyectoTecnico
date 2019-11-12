<?php 
    class Base_Datos {

        public function conexion(){
            $server = "localhost";
            $usuario = "root";
            $contraseña = "";
            $basedeDatos = "proyecto";
            $conectar = mysqli_connect($server, $usuario, $contraseña, $basedeDatos) or 
            die ("Error al conectar a la base de datos");
            mysqli_set_charset($conectar,"utf8");
            return $conectar;
        }

        public function CerrarConexion($conectar){
            mysqli_close($conectar);
        }
        
    }
    class Objeto{}
?>