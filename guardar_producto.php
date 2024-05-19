<?php
session_start();

include 'conexion.php';


$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];

$sql = "INSERT INTO productos (nombre, descripcion, precio, stock) VALUES ('$nombre', '$descripcion', $precio, $stock)";

if ($conexion->query($sql) === TRUE) {
   
    header("Location: productos.php");
    exit(); 
} else {
    echo "Error al guardar el producto: " . $conexion->error;
}


$conexion->close();
?>
