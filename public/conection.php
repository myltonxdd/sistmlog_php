<?php
try {
    $mysqli = new mysqli("localhost", "root", "", "authentication");
    
} catch (mysqli_sql_exception $e) {
    echo "Error:". $e->getMessage();
}