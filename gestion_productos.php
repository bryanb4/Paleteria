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
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Productos</title>
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
        .form-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-container h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-container input,
        .form-container textarea,
        .form-container select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .form-container input[type="submit"] {
            background-color: #ffcc00;
            color: #333;
            border: none;
            cursor: pointer;
        }
        .form-container input[type="submit"]:hover {
            background-color: #e0b300;
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
        <h1>Gestión de productos</h1>
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
    <div class="form-container">
        <h1>Dar de Alta Productos</h1>
        <form action="guardar_producto.php" method="POST">
            Nombre: <input type="text" name="nombre" required><br>
            Descripción: <textarea name="descripcion"></textarea><br>
            Precio: <input type="number" step="0.01" name="precio" required><br>
            Stock: <input type="number" name="stock" required><br>
            <input type="submit" value="Guardar Producto">
        </form>
    </div>
    <footer>
    <p>&copy; 2024 Paletería Don Jose | Dirección: Ayutla #5637, Guadalajara Jalisco Mexico | Teléfono: (332) 914 5027 </p>
    </footer>
</body>
</html>
