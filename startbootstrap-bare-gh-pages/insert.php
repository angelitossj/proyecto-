<?php
require "database.php";


    $nombre = $_POST["usuario"];
    $contra = $_POST["contra"];
    $correo = $_POST["email"];
    $dni= $_POST["dni"];
    $cuil= $_POST["cuil"];
    $domicilio= $_POST["domicilio"];
    $telefono= $_POST["telefonos"];


    $consulta = "INSERT INTO `alumno`(`NOMBRE_APELLIDO`, `DNI`, `CUIL`, `DOMICILIO`, `E_MAIL`, `TELEFONO`,`contraseña`) VALUES ('$nombre','$dni','$cuil','$domicilio','$correo','$telefono','$contra')";

    $resultado = $conexion->query($consulta);
    header('Location: ./alumno.html');
    



    // $campos= array();

    // if ($nombre==""){
    //     array_push($campos,"El campo de nombre no puede estar vacio");
    // }
    // if ($dni==""){
    //     array_push($campos,"El campo de DNI no puede estar vacio");
    // }
    // if ($domicilio==""){
    //     array_push($campos,"El campo de Domicilio no puede estar vacio");
    // }
    // if ($telefono==""){
    //     array_push($campos,"El campo de Telefono no puede estar vacio");
    // }
    // if ($cuil==""){
    //     array_push($campos,"El campo de Cuil no puede estar vacio");
    // }
    // if ($contra == "" || strlen($contra)< 6){
    //     array_push($campos,"El campo de contraseña no puede estar vacio , ni tener menos de 6 caracteres");

    // }
    // if ($correo == "" || strpos($correo,"@") === false){
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


// session_start();
// $_SESSION['usuario']=$nombre;

// $consulta="SELECT*FROM alumno where alumno='$nombre' and contraseña='$contra' ";
// $resultado = $conexion->query($consulta);




// if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
//     echo "Esta dirección de correo ($correo) es válida.";
// }






// if ($count==1){
//     header('Location: ./index.html');
// }

?>