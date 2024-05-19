<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Administrador</title>
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
        .admin-container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .admin-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .admin-options {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            justify-content: center;
        }
        .admin-option {
            background-color: #ffcc00;
            color: #333;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .admin-option:hover {
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
    </style>
</head>
<body>
    <header>
        <h1>Bienvenido Administrador</h1>
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
    <div class="admin-container">
        <h2 id="inicio">Panel de Control</h2>
        <div class="admin-options">
            <a href="gestion_productos.php" class="admin-option">
                <h3>Gestión de Productos</h3>
                <p>Administra los productos disponibles en la tienda.</p>
            </a>
            <a href="gestion_pedidos.php" class="admin-option">
                <h3>Gestión de Pedidos</h3>
                <p>Administra los pedidos recibidos.</p>
            </a>
           
        </div>
        <div class="admin-container">
            <h2 id="inicio"></h2>
            <div class="admin-options">
                <a href="productos.php" class="admin-option">
                    <h3>Visualiza Productos</h3>
                    <p>Muestra los productos disponibles en la tienda.</p>
                </a>
                <a href="ver_pedidos.php" class="admin-option">
                    <h3>Visualiza los Pedidos</h3>
                    <p>Visualiza los pedidos que llegaron en la semana.</p>
                </a>
               
            </div>
        </div>
    </div>
    <footer>
    <p>&copy; 2024 Paletería Don Jose | Dirección: Ayutla #5637, Guadalajara Jalisco Mexico | Teléfono: (332) 914 5027 </p>
    </footer>
</body>
</html>
