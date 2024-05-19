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

// Incluir el archivo de conexión a la base de datos
include 'conexion.php';

// Consulta SQL para obtener todos los productos
$sql = "SELECT * FROM productos";
$resultado = $conexion->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Productos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
        .navbar {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
        .navbar a {
            color: #fff;
            text-decoration: none;
            margin-right: 20px;
        }
        .productos-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .productos-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .producto {
            border-bottom: 1px solid #ccc;
            padding: 10px 0;
            display: flex;
            justify-content: space-between;
        }
        .producto-info {
            flex-grow: 1;
        }
        .producto-actions {
            display: flex;
            align-items: center;
        }
        .eliminar-btn {
            background-color: #e65100;
            color: #fff;
            border: none;
            padding: 5px 10px;
            margin-left: 10px;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .eliminar-btn:hover {
            background-color: #ff7043;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        header {
            background-color: #ffcc00;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
<header>
        <h1>Ver productos</h1>
    </header>
    <div class="navbar">
        <a href="inicio_admin.php">Inicio</a>
        <a href="gestion_productos.php">Gestión de Productos</a>
        <a href="gestion_pedidos.php">Gestión de Pedidos</a>
        <a href="productos.php">Visualizar Productos</a>
        <a href="ver_pedidos.php">Visualizar Pedidos</a>
        <a href="registrar_empleado.php">Registrar Empleado</a>
        <a href="ver_mensajes.php">Ver los mensajes</a>
        <a href="cerrar_sesion.php">Cerrar Sesión</a>
    </div>
    <div class="productos-container">
        <h2>Lista de Productos</h2>
        <?php
        if ($resultado->num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) {
                echo '<div class="producto">';
                echo '<div class="producto-info">';
                echo '<strong>Nombre:</strong> ' . $row['nombre'] . '<br>';
                echo '<strong>Descripción:</strong> ' . $row['descripcion'] . '<br>';
                echo '<strong>Precio:</strong> $' . $row['precio'] . '<br>';
                echo '<strong>Stock:</strong> ' . $row['stock'] . '<br>';
                echo '</div>';
                echo '<div class="producto-actions">';
                echo '<button class="eliminar-btn" onclick="eliminarProducto(' . $row['id'] . ')">Eliminar</button>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo 'No se encontraron productos.';
        }
        ?>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function eliminarProducto(id) {
        if (confirm('¿Estás seguro de eliminar este producto?')) {
            $.ajax({
                url: 'eliminar_producto.php',
                type: 'POST',
                data: { id: id },
                success: function(response) {
                    if (response === 'success') {
                        alert('Producto eliminado correctamente');
                        location.reload(); // Recargar la página después de eliminar el producto
                    } else {
                         alert('Producto Eliminado Correctamente ' );
                         location.reload();
                    }
                },
                error: function(xhr, status, error) {
                    alert('Error al eliminar el producto: ' + error);
                }
            });
        }
    }
</script>


</body>
</html>
