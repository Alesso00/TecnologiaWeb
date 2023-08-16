<?php

class Registro {

// lo hice en php porque no encontre supe cono hacerlo solo html :)
public $nombre;
public $correo;
public $genero;
public $pais;
public $contraseña;


function __construct($nombre, $correo, $genero,$pais, $contraseña)
{
    $this -> nombre = $nombre;
    $this -> genero = $genero;
    $this ->correo = $correo;
    $this -> contraseña = $contraseña;
    $this -> pais =  $pais ;
}

function  Mostrar(){

        echo "Su nombre es: ".$this->nombre . "<br>" ; 
        echo "Su correo es: ".$this->correo . "<br>";
        echo  "Su genero es: ".$this->genero. "<br>";
        echo  "Su pais de recidencia es: ".$this->pais . "<br>";
        echo  "Su contraseña ingresada es: ".$this->contraseña . "<br>"
        ;
}
}
if ($_SERVER ["REQUEST_METHOD"]=="POST"){
$pagar = new Registro($_POST['nombre'], $_POST['correo'], $_POST['genero'], $_POST['pais'] ,$_POST['pwd']);
$pagar ->Mostrar();


}
?>