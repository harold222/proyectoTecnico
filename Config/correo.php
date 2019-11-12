
<?php
class Correo{

    private $nombre;
    private $telefono;
    private $correo;
    private $mensaje;

    function __construct($name,$cor, $asunto, $msm){
        $this->nombre =  $name;
        $this->correo = $cor;
        $this->telefono= $asunto;
        $this->mensaje = $msm;
        $this->enviarCorreo();
    }
    function enviarCorreo(){
        $destino= "laura.prieto30@hotmail.com"; //a que correo se enviara
        $contenido = "Nombre ". $this->nombre ."\nCorreo: ".$this->correo . "\nAsunto: ".$this->telefono . "\n\n\tEl mensaje que ha dejado es: ".$this->mensaje;
        mail($destino,"Desde el formulario del contacto", $contenido);
        // Funcion mail solo sirve desde internet
        header("Location:../index.php");
    }
}
$abrir = new Correo($_POST["nombre"], $_POST["correo"], $_POST["asunto"],  $_POST["mensaje"]);
?>