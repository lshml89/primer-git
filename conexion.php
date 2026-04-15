<?php
$host = "localhost";
$bd = "basedatos";
$usuario = "root";
$contrasena = "";

try {
    $conexion = new PDO("mysql:host=$host;dbname=$bd;charset=utf8", $usuario, $contrasena);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexion con PDO correcta";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>