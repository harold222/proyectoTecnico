
<?php

@session_start();/* Me permite abrir archivos mas comodamente sin la extension.php */
@extract($_REQUEST);

require_once("basedatos.php"); /* Para importar la otra clase */

class Funciones extends Base_Datos{
    
    private $conexionBase;
    private $desconectar;

    function __construct(){
        $this->conexionBase = new Base_Datos;
        $this->desconectar = new Base_Datos;
    }

    function clear($var) {
        htmlspecialchars($var);
        return $var;
    }
    
    function redir($var){
        ?>
	        <script>
		        window.location="<?=$var?>";
	        </script>
	    <?php
	    die();
    }

    function alert($txt,$type,$url){
        if($type==0){
            $t = "error";
        }elseif($type==1){
            $t = "success";
        }elseif($type==2){
            $t = "info";
        }else{
            $t = "info";
        }
        echo '<script>swal({ title: "Alerta", text: "'.$txt.'", icon: "'.$t.'"});';
        echo '$(".swal-button").click(function(){ 
                window.location=".$url."; 
            });';
        echo '</script>';

        // $dat = new Funciones;

        // $dat->redir($url);
    }

    function obtenerProductos(){
        $consulta = "SELECT * FROM  Productos";
        $resultado = mysqli_query($this->conexionBase->conexion(),$consulta) 
                     or die ("Error al obtener los productos");
        $this->desconectar->CerrarConexion($this->conexionBase->conexion());
        
        return $resultado;
    }

    function obtenerUnProducto($id){
        $consulta = "SELECT * FROM  Productos WHERE id = $id";
        $resultado = mysqli_query($this->conexionBase->conexion(),$consulta) 
                     or die ("Error al obtener los productos");
        $this->desconectar->CerrarConexion($this->conexionBase->conexion());
        
        return $resultado;
    }

    function obtenerServicios(){
        $consulta = "SELECT * FROM  Servicios";
        $resultado = mysqli_query($this->conexionBase->conexion(),$consulta) 
                     or die ("Error al obtener los servicios");
        $this->desconectar->CerrarConexion($this->conexionBase->conexion());
        return $resultado;
    }

}
    
?>