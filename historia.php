<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paletería Don Jose - Historia</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        html, body {
            height: 100%;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
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
            margin: 0 15px;
            font-size: 1.1em;
        }
        .navbar a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
            flex-grow: 1; /* makes container expand to fill available space */
        }
        .section {
            margin-bottom: 30px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .section h2 {
            margin-bottom: 10px;
            color: #333;
        }
        .section p {
            margin-bottom: 20px;
            color: #555;
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
            flex-shrink: 0; /* prevents footer from shrinking */
        }
        footer p {
            margin: 5px 0;
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
    <section class="section">
        <h2>Historia de Paletería Don Jose</h2>
        <p>Paletería Don Jose es un negocio familiar fundado hace 10 años en la hermosa Ayutla, Jalisco. Todo comenzó con la pasión y dedicación de Don Jose por crear sabores únicos de paletas artesanales que deleitaran a sus clientes.</p>
        <p>Desde sus inicios, nos hemos comprometido a utilizar ingredientes frescos y de alta calidad en la elaboración de nuestras paletas, manteniendo así un estándar de excelencia que nos ha hecho destacar en el mercado.</p>
        <p>Con el paso de los años, hemos expandido nuestra variedad de sabores para satisfacer los gustos más exigentes. Nuestro compromiso con la calidad y la innovación nos ha llevado a ser reconocidos como una de las mejores paleterías de la región.</p>
        <p>¡Ven y disfruta de la experiencia única que ofrece Paletería Don Jose! Estamos seguros de que nuestros deliciosos sabores te conquistarán y te harán regresar por más.</p>
    </section>
</div>
<footer>
    <p>&copy; 2024 Paletería Don Jose | Dirección: Ayutla #5637, Guadalajara Jalisco México | Teléfono: (332) 914 5027</p>
</footer>
</body>
</html>
