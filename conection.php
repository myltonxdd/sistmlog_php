<?php
try {
    $mysqli = new mysqli("localhost", "root", "", "red_social");
    echo "conectado";
} catch (mysqli_sql_exception $e) {
    echo "Error:". $e->getMessage();
}