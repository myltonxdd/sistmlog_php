<?php


require("conection.php");

if($_SERVER["REQUEST_METHOD"]== "POST"){
    $correo = $_POST["email"];
    $constraseña = $_POST["pasword"];

    
// PREPARO EL QUERY

$query= "INSERT INTO users(email, pasword) VALUES('$correo', '$constraseña' )";

$resultado =$mysqli->query($query);
}

//cierra la conexion
$mysqli->close();



?>