<?php
// Creación de la clase Carro
class Carro2 {
    // Declaración de propiedades
    public $color;
    public $modelo;
    public $circula;

    public $anioFabricacion = "";

    // Declaración del método verificación
    public function verificacion($anio) {
        if ($anio < 1990) {
            return "No"; 
        } else if ($anio < 2010) {
            return "Revision";
        } else if ($anio >= 2010) {
            return "Si";
        }
    }
}

// Creación de instancia a la clase Carro
$Carro1 = new Carro2();

if (!empty($_POST)) {
    $Carro1->color = $_POST['color'];
    $Carro1->modelo = $_POST['modelo'];

    $fecha = $_POST['anio'];
    $partes = explode("-", $fecha);
    $Carro1->anioFabricacion = $partes[0]; 

    $Carro1->circula = $Carro1->verificacion($Carro1->anioFabricacion);
}
?>



