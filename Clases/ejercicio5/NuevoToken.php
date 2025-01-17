<?php

class NuevoToken{
    public $nombre;
    public $contrasena="";

    public function __construct($nombre){
        $this->nombre = $nombre;
        $this->contrasena = $this->contrasena();
    }

    public function contrasena($longitud = 4) {
        $letras = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $contrasena = substr(str_shuffle($letras), 0, $longitud);
        return $contrasena;
    }

    public function __destruct(){
        echo $this->contrasena;
    }
}

if (!empty($_POST)){
	//creacion de objeto de la clase
	$token2= new NuevoToken($_POST['nombre']);
}
?>