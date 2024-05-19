<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información - Paletería</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .informacion {
            margin-bottom: 15px;
        }
        h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        p {
            margin: 0;
        }
        .contacto {
            margin-top: 30px;
        }
        .contacto h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }
        .contacto p {
            margin-bottom: 5px;
        }
        .contacto a {
            color: #ff6f00;
            text-decoration: none;
            font-weight: bold;
        }
        .contacto a:hover {
            text-decoration: underline;
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
        header {
            background-color: #ffcc00;
            padding: 10px;
            text-align: center;
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
        <div class="informacion">
            <h2>Bienvenido a Paletería Don Jose</h2>
            <p>Somos una paletería familiar fundada hace 10 años en la ciudad del sabor. Ofrecemos una amplia variedad de sabores de paletas y helados artesanales.</p>
        </div>
        <div class="contacto">
            <h2>Contacto</h2>
            <p>Dirección: Ayutla #5637, Guadalajara Jalisco Mexico</p>
            <p>Teléfono: (123) 456-7890</p>
            <p>Correo Electrónico: <a href="mailto:Josepelayo89@gmail.com">Josepelayo89@gmail.com</a></p>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Paletería Don Jose | Dirección: Ayutla #5637, Guadalajara Jalisco Mexico | Teléfono: (332) 914 5027 </p>
    </footer>
</body>
</html>
