<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paleteria Don Jose</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('../images/bg7.jpg'); 
            background-size: 100%;
            background-position: top center;
            background-repeat: no-repeat;
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
        section {
            padding: 20px;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: rgba(0, 0, 0, 0.8); /* Cambiar opacidad del texto */
            background-color: transparent; /* Fondo transparente */
        }
    </style>
</head>
<body>
    <header>
        <h1>Paleteria Don Jose</h1>
    </header>
    <nav>
        <a href="bienvenida.php">Inicio</a>
        <a href="catalogo.php">Catálogo</a>
        <a href="contacto.php">Reporte</a>
        <a href="cerrar_sesion.php">Cerrar sesion</a>
    </nav>
    <div class="container">
        <h1>Bienvenido</h1>
        <p>Este espacio esta dedicado para guiarte como empleado</p>
        <p>Recuerde atender bien a los clientes </p>
    </div>
   
    <footer>
    <p>&copy; 2024 Paletería Don Jose | Dirección: Ayutla #5637, Guadalajara Jalisco Mexico | Teléfono: (332) 914 5027 </p>
    </footer>
</body>
</html>
