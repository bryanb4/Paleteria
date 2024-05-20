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
            padding: 30px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            margin: 0;
            font-size: 2.5em;
            color: #333;
        }

        nav {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1.2em;
            transition: color 0.3s ease;
        }

        nav a:hover {
            text-decoration: underline;
            color: #ffcc00;
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
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f7f7f7;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .message h3 {
            margin-bottom: 10px;
            color: #333;
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
            flex-shrink: 0;
        }
    </style>
</head>

<body>
    <header>
        <h1>Ver Mensajes</h1>
    </header>
    <nav>
    <a href="inicio_admin.php">Inicio</a>
        <a href="gestion_productos.php">Gestión Productos</a>
        <a href="gestion_pedidos.php">Gestión Pedidos</a>
        <a href="productos.php">Ver Productos</a>
        <a href="ver_pedidos.php">Ver Pedidos</a>
        <a href="registrar_empleado.php">Registrar Empleado</a> <!-- Nueva opción de registrar empleado -->
        <a href="ver_mensajes.php">Ver mensajes</a>
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
