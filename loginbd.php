<?php

require("conection.php");

//Guarda las variables 

$correo = $_POST["email"];
$constraseña = $_POST["pasword"];

//Preparar el query

$query = "SELECT * FROM users WHERE email='$correo' AND pasword='$constraseña'";

$resultado = $mysqli->query($query);
$numFilas = $resultado->num_rows;

if($numFilas==1){
    echo "Usuario Encontrado, Wellcome";
}
else{
    echo "Usuario no encontrado";
    header("Location: login.php");
}
print_r($resultado);