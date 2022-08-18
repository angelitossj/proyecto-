<?php
require "database.php";

$nombreProfesor = $_POST["profesor"];
$contraProfe = $_POST["contraP"];
$correoProfe = $_POST["emailP"];
$dniProfe= $_POST["dniP"];
$cuilProfe= $_POST["cuilP"];
$domicilioProfe= $_POST["domicilioP"];
$telefonoProfe= $_POST["teleofonoP"];

$consulta = "INSERT INTO `profesores`(`NOMBRE_APELLIDO`, `DNI`, `CUIL`, `DIRECCION`, `E_MAIL`, `TELEFONO`) VALUES ('$nombreProfesor','$dniProfe','$cuilProfe','$domicilioProfe','$correoProfe','$telefonoProfe')";

$resultado = $conexion->query($consulta);
header('Location: ./profesor.html');

// $campos= array();

// if ($nombreProfesor==""){
//     array_push($campos,"El campo de nombre no puede estar vacio");
// }
// if ($dniProfe==""){
//     array_push($campos,"El campo de DNI no puede estar vacio");
// }
// if ($domicilioProfe==""){
//     array_push($campos,"El campo de Domicilio no puede estar vacio");
// }
// if ($telefonoProfe==""){
//     array_push($campos,"El campo de Telefono no puede estar vacio");
// }
// if ($cuilProfe==""){
//     array_push($campos,"El campo de Cuil no puede estar vacio");
// }
// if ($contraProfe == "" || strlen($contra)< 6){
//     array_push($campos,"El campo de contraseña no puede estar vacio , ni tener menos de 6 caracteres");

// }
// if ($correoProfe == "" || strpos($correo,"@") === false){
//     array_push($campos,"Ingresa un correo electronico Valido");
// }
// if (count($campos) > 0){
//     echo "<div class='error'></div>";
//     for ($i=0; $i<count($campos); $i++){
//         echo "<li>".$campos[$i]."</li>";
//     }
// }
// else {
//     echo "<div class='correcto'></div>";
// }



?>