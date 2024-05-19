<?php

include 'conexion.php';


$sql = "SELECT * FROM mensajes ORDER BY fecha_envio DESC";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Mensajes - Administrador</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
        header {
            background-color: #ffcc00;
            padding: 10px;
            text-align: center;
        }
        nav {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin-right: 20px;
        }
        .messages-container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .message {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f7f7f7;
        }
        .message h3 {
            margin-bottom: 10px;
        }
        .message p {
            margin-bottom: 5px;
        }
        .message small {
            color: #888;
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
    </style>
</head>
<body>
    <header>
        <h1>Ver Mensajes</h1>
    </header>
    <nav>
    <a href="inicio_admin.php">Inicio</a>
        <a href="gestion_productos.php">Gestión de Productos</a>
        <a href="gestion_pedidos.php">Gestión de Pedidos</a>
        <a href="productos.php">Visualizar Productos</a>
        <a href="ver_pedidos.php">Visualizar Pedidos</a>
        <a href="registrar_empleado.php">Registrar Empleado</a> <!-- Nueva opción de registrar empleado -->
        <a href="ver_mensajes.php">Ver los mensajes</a>
        <a href="cerrar_sesion.php">Cerrar Sesión</a>
    </nav>
    <div class="messages-container">
        <h2>Mensajes Recibidos</h2>
        <?php
        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                echo '<div class="message">';
                echo '<h3>' . $fila['asunto'] . '</h3>';
                echo '<p>' . $fila['mensaje'] . '</p>';
                echo '<small>Enviado por: ' . $fila['nombre_remitente'] . ' (' . $fila['correo'] . ') - ' . $fila['fecha_envio'] . '</small>';
                echo '</div>';
            }
        } else {
            echo '<p>No hay mensajes recibidos.</p>';
        }
        ?>
    </div>
    <footer>
    <p>&copy; 2024 Paletería Don Jose | Dirección: Ayutla #5637, Guadalajara Jalisco Mexico | Teléfono: (332) 914 5027 </p>
    </footer>
</body>
</html>