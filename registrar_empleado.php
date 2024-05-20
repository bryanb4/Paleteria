<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Empleados - Paletería Don Jose</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('../images/bg7.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
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

        .container {
            max-width: 800px;
            margin: auto;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            flex-grow: 1;
        }

        .formulario__registro {
            display: flex;
            flex-direction: column;
        }

        .input-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
            margin-bottom: 15px;
        }

        button {
            padding: 10px;
            background-color: #ff6f00;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #e65100;
        }

        .btn__regresar {
            text-align: center;
            margin-top: 10px;
        }

        .btn__regresar a {
            color: #333;
            text-decoration: none;
            font-size: 14px;
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
        <h1>Paletería Don Jose</h1>
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
    <div class="container">
        <form action="registro_usuario.php" method="POST" class="formulario__registro">
            <h2 style="text-align: center;">Registrar un empleado</h2>
            <div class="input-group">
                <label for="nombre_completo">Nombre completo:</label>
                <input type="text" id="nombre_completo" name="nombre_completo" placeholder="Ingresa el nombre completo" required>
            </div>
            <div class="input-group">
                <label for="correo">Correo Electrónico:</label>
                <input type="text" id="correo" name="correo" placeholder="Ingresa el correo electrónico" required>
            </div>
            <div class="input-group">
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" placeholder="Ingresa un nombre de usuario" required>
            </div>
            <div class="input-group">
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" placeholder="Ingresa la contraseña" required>
            </div>
            <div class="input-group">
                <label for="rol">Rol:</label>
                <select name="rol" id="rol">
                    <option value="1">Empleado</option>
                    <option value="2">Administrador</option>
                </select>
            </div>
            <button type="submit">Registrar Empleado</button>
            <div class="btn__regresar">
                <a href="inicio_admin.php">Regresar a inicio</a>
            </div>
        </form>
    </div>
    <footer>
        <p>&copy; 2024 Paletería Don Jose | Dirección: Ayutla #5637, Guadalajara Jalisco Mexico | Teléfono: (332) 914 5027 </p>
    </footer>
</body>

</html>
