<?php
try {
    $conexion = new PDO("mysql:host=localhost;dbname=bd_prueba", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión con PDO correcta";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>