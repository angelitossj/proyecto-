<?php 

$usario="root";
$contra="";
$Base_de_datos = "alumnos";
$equipo="localhost";

$conexion= new mysqli ($equipo,$usario,$contra,$Base_de_datos);

if ($conexion->connect_error){
    die ("Fallo en la conexion: (" . $mysqli-> mysqli_connect_errno() . ")" . $mysqli-> mysqli_connect_errno());
}

?>