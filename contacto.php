<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['usuario'])) {
    header('Location: login_usuario.php');
    exit;
}

$nombre_completo = isset($_SESSION['nombre_completo']) ? $_SESSION['nombre_completo'] : '';

// Verificar si se ha enviado una nueva compra y actualizar el mensaje de reporte
if (isset($_SESSION['nueva_compra'])) {
    // Actualizar la variable de sesión que contiene la nueva compra
    $_SESSION['reporte_ventas'] = isset($_SESSION['reporte_ventas']) ? $_SESSION['reporte_ventas'] : '';
    $_SESSION['reporte_ventas'] .= "<hr>" . $_SESSION['nueva_compra'];
    // Eliminar la variable de sesión que indica una nueva compra
    unset($_SESSION['nueva_compra']);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte - Paletería Don Jose</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('../images/bg7.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #333;
        }
        header {
            background-color: #ffcc00;
            padding: 20px;
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
            padding: 10px;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1.1em;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .contacto-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .contacto-container h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.8em;
        }
        .contacto-form label,
        .contacto-form textarea,
        .contacto-form input[type="email"],
        .contacto-form input[type="text"] {
            display: block;
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            box-sizing: border-box;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .contacto-form textarea {
            resize: vertical;
        }
        .contacto-form button {
            background-color: #ffcc00;
            color: #333;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: block;
            margin: 0 auto;
        }
        .contacto-form button:hover {
            background-color: #e0b300;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
            position: relative;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
        }
        footer p {
            margin: 5px 0;
        }
        @media (max-width: 768px) {
            .contacto-container {
                margin: 20px;
                padding: 20px;
            }
            header h1 {
                font-size: 2em;
            }
            nav a {
                display: block;
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Paletería Don Jose</h1>
    </header>
    <nav>
        <a href="bienvenida.php">Inicio</a>
        <a href="catalogo.php">Catálogo</a>
        <a href="contacto.php">Reporte</a>
        <a href="cerrar_sesion.php">Cerrar sesión</a>
    </nav>
    <div class="contacto-container">
        <h2>Enviar Reporte De Ventas</h2>
        <form class="contacto-form" action="enviar_formulario.php" method="POST" enctype="multipart/form-data">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($nombre_completo); ?>" readonly disabled>

            <label for="correo_remitente">Correo Electrónico del Remitente:</label>
            <input type="email" id="correo_remitente" name="correo_remitente" value="<?php echo isset($_SESSION['usuario']) ? $_SESSION['usuario'] : ''; ?>" readonly disabled>

            <label for="asunto">Asunto:</label>
            <input type="text" id="asunto" name="asunto" value="Reporte de ventas" readonly disabled>

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje_reporte" rows="4" required><?php echo isset($_SESSION['reporte_ventas']) ? $_SESSION['reporte_ventas'] : ''; ?></textarea>

            <button type="submit" name="enviar_mensaje">Enviar Mensaje</button>
        </form>
    </div>
    <footer>
        <p>&copy; 2024 Paletería Don Jose | Dirección: Ayutla #5637, Guadalajara Jalisco Mexico | Teléfono: (332) 914 5027</p>
    </footer>
</body>
</html>
