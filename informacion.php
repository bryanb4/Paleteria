<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información - Paletería</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        html, body {
            height: 100%;
            font-family: Arial, sans-serif;
            background-image: url('../images/bg7.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        header {
            background-color: #ffcc00;
            padding: 10px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        header h1 {
            margin: 0;
            font-size: 2.5em;
            color: #333;
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
            font-size: 1.1em;
        }
        .navbar a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            flex-grow: 1; /* makes container expand to fill available space */
        }
        .informacion, .contacto {
            margin-bottom: 15px;
        }
        h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }
        p {
            margin: 0;
            margin-bottom: 10px;
            color: #555;
        }
        .contacto h2 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #333;
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
            position: relative;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
            flex-shrink: 0; /* prevents footer from shrinking */
        }
        footer p {
            margin: 5px 0;
            color: #fff; /* Cambié el color del texto a blanco */
        }
    </style>
</head>
<body>
<header>
    <h1>Paletería Don Jose</h1>
</header>
<div class="navbar">
    <a href="historia.php">Historia</a>
    <a href="https://www.google.com.mx/maps/place/Plaza+Principal_de_Ayutla/@20.1321504,-104.3443814,16z/data=!4m15!1m8!3m7!1s0x84243588bff3a7c1:0xf6f69c82fe8c3eca!2s48050+Ayutla,+Jal.!3b1!8m2!3d20.1280233!4d-104.3439311!16s%2Fg%2F11c5q4bn85!3m5!1s0x8424358fdda69375:0x8fcde9c853bba15e!8m2!3d20.130023!4d-104.3458549!16s%2Fg%2F11cn0mgcj6?entry=ttu" target="_blank">Ubicación</a>
    <a href="Informacion.php">Contáctanos</a>
    <a href="index.php">Inicio de Sesión</a>
</div>
<div class="container">
    <div class="informacion">
        <h2>Bienvenido a Paletería Don Jose</h2>
        <p>Somos una paletería familiar fundada hace 10 años en ayutla. Ofrecemos una amplia variedad de sabores de paletas y helados artesanales.</p>
        <p>En Paletería Don Jose, nos enorgullece usar ingredientes frescos y de alta calidad en la elaboración de nuestras paletas. Cada paleta es hecha a mano con dedicación y amor para brindar a nuestros clientes la mejor experiencia posible.</p>
        <p>Nuestro menú incluye sabores tradicionales como fresa y limón, así como sabores exóticos, ven y descúbrelos, ¡Hay algo para todos!</p>
        <p>Además de nuestras paletas, también ofrecemos una variedad de helados y postres congelados. Ven a visitarnos y descubre tus nuevos sabores favoritos.</p>
    </div>
    <div class="contacto">
        <h2>Contacto</h2>
        <p>Dirección: Ayutla #5637, Guadalajara Jalisco Mexico</p>
        <p>Teléfono: (123) 456-7890</p>
        <p>Correo Electrónico: <a href="mailto:Josepelayo89@gmail.com">Josepelayo89@gmail.com</a></p>
    </div>
    <div class="contacto">
        <h2>Horario</h2>
        <p>Lunes a Viernes: 10:00 AM - 8:00 PM</p>
        <p>Sábado: 11:00 AM - 7:00 PM</p>
        <p>Domingo: Cerrado</p>
    </div>
</div>
<footer>
    <p>&copy; 2024 Paletería Don Jose | Dirección: Ayutla #5637, Guadalajara Jalisco México | Teléfono: (332) 914 5027</p>
</footer>
</body>
</html>
