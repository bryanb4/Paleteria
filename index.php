<?php

session_start();

if(isset($_SESSION['usuario'])){
    header("location: bienvenida.php");
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Paletería</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .formulario__login {
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
        body {
    font-family: Arial, sans-serif;
    background-image: url('../images/bg7.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    margin: 0;
    padding: 0;
}
header {
            background-color: #ffcc00;
            padding: 10px;
            text-align: center;
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
    </style>
</head>
<body>
<header>
        <h1>Paletería Don Jose</h1>
    </header>
    <header class="navbar">
    <a href="historia.php">Historia</a>
    <a href="https://www.google.com.mx/maps/place/Plaza+Principal_de_Ayutla/@20.1321504,-104.3443814,16z/data=!4m15!1m8!3m7!1s0x84243588bff3a7c1:0xf6f69c82fe8c3eca!2s48050+Ayutla,+Jal.!3b1!8m2!3d20.1280233!4d-104.3439311!16s%2Fg%2F11c5q4bn85!3m5!1s0x8424358fdda69375:0x8fcde9c853bba15e!8m2!3d20.130023!4d-104.3458549!16s%2Fg%2F11cn0mgcj6?entry=ttu" target="_blank">Ubicacion</a>
    <a href="Informacion.php">Contactanos</a>
    <a href="index.php">Inicio de Sesión</a>
</header>
    <div class="container">
        <form action="login_usuario.php" method="POST" class="formulario__login">
            <h2>Iniciar Sesión</h2>
            <div class="input-group">
                <label for="correo">Correo Electrónico:</label>
                <input type="text" id="correo" name="correo" placeholder="Ingresa tu correo">
            </div>
            <div class="input-group">
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" placeholder="Ingresa tu contraseña">
            </div>
            <button type="submit">Entrar</button>
        </form>
    </div>
    <footer>
    <p>&copy; 2024 Paletería Don Jose | Dirección: Ayutla #5637, Guadalajara Jalisco Mexico | Teléfono: (332) 914 5027 </p>
    </footer>
</body>
</html>
