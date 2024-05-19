<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    echo '
    <script>
    alert("Por favor inicie sesión");
    window.location ="index.php";
    </script>
    ';
    session_destroy();
    die();
}


include 'conexion.php';


$sql = "SELECT * FROM pedidos";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Pedidos</title>
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
        .pedidos-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .pedidos-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        th {
            background-color: #333;
            color: #fff;
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
        <h1>Ver Pedidos</h1>
    </header>
    <div class="navbar">
    <a href="inicio_admin.php">Inicio</a>
        <a href="gestion_productos.php">Gestión de Productos</a>
        <a href="gestion_pedidos.php">Gestión de Pedidos</a>
        <a href="productos.php">Visualizar Productos</a>
        <a href="ver_pedidos.php">Visualizar Pedidos</a>
        <a href="registrar_empleado.php">Registrar Empleado</a> <!-- Nueva opción de registrar empleado -->
        <a href="ver_mensajes.php">Ver los mensajes</a>
        <a href="cerrar_sesion.php">Cerrar Sesión</a>
    </div>
    <div class="pedidos-container">
        <h2>Lista de Pedidos</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre del Cliente</th>
                <th>Descripción del Pedido</th>
                <th>Fecha del Pedido</th>
            
            </tr>
            <?php
            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['nombre_cliente'] . '</td>';
                    echo '<td>' . $row['descripcion_pedido'] . '</td>';
                    echo '<td>' . $row['fecha_pedido'] . '</td>';
               
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="4">No se encontraron pedidos.</td></tr>';
            }
            ?>
        </table>
    </div>
</body>
</html>
