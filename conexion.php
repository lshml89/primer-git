<?php
$conexion = mysqli_connect("localhost", "root", "", "bd_prueba");

if (!$conexion) {
    die("Error de conexión");
}

echo "Conexión con MySQLi correcta";
?> 