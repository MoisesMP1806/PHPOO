<?php

//crea aqui la clase Moto junto con dos propiedades public
class Moto{
	public $marca;
	public $tipo;
}
//crea aqui la instancia o el objeto de la clase Moto
$Moto1 = new Moto;
$mensaje = " ";

 if (!empty($_POST)){

 	// recibe aqui los valores mandados por post y arma el mensaje para front
	$Moto1->marca = $_POST['marcaMoto'];
	$Moto1->tipo = $_POST['tipoMoto'];

	$mensaje = "Marca de moto: ".$_POST['marcaMoto']." "."Tipo de moto: ".$_POST['tipoMoto'];
 }  


?>
