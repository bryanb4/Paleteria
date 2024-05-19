<?php
session_start();
if(!isset($_SESSION['usuario'])){
    echo'
    <script>
    alert("Por favor inicie sesión");
    window.location ="index.php";
    </script>
    ';    
    session_destroy();
    die();
}


include 'conexion.php';


$nombre_cliente = $_POST['nombre_cliente'];
$descripcion_pedido = $_POST['descripcion_pedido'];
$fecha_pedido = $_POST['fecha_pedido'];

$sql = "INSERT INTO pedidos (nombre_cliente, descripcion_pedido, fecha_pedido) 
        VALUES ('$nombre_cliente', '$descripcion_pedido', '$fecha_pedido')";

if ($conexion->query($sql) === TRUE) {
    echo "Pedido guardado correctamente.";
    header("Location: ver_pedidos.php");
} else {
    echo "Error al guardar el pedido: " . $conexion->error;
}

$conexion->close();
?>
