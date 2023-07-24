<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    extract($_POST);
    
    require("conection.php");

    $hash = password_hash($pasword,PASSWORD_DEFAULT);

    $query="INSERT INTO users(email,pasword) VALUES('$email', '$hash')";

    $resultado = $mysqli->query($query);

    var_dump($resultado);
    session_start();

    if($resultado){
        /* $queryUsuario = "SELECT FROM users(email,pasword) VALUES('$email', '$hash')"; */
        $queryUsuario = "SELECT * FROM users WHERE email='$email' AND pasword='$hash'";


        $usuarioDB=$mysqli->query($queryUsuario);

        $_SESSION["users"] = $usuarioDB->fetch_assoc();
        header("Location: perfil.php");
    }
};
?>
