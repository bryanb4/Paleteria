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
    <title>Paletería Don Jose - Historia</title>
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
            margin: 20px auto;
            padding: 0 20px;
        }
        .section {
            margin-bottom: 30px;
        }
        .section h2 {
            margin-bottom: 10px;
        }
        .section p {
            margin-bottom: 20px;
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
        <h1>Paletería Don Jose</h1>
    </header>
<header class="navbar">
    <a href="historia.php">Historia</a>
    <a href="https://www.google.com.mx/maps/place/Plaza+Principal_de_Ayutla/@20.1321504,-104.3443814,16z/data=!4m15!1m8!3m7!1s0x84243588bff3a7c1:0xf6f69c82fe8c3eca!2s48050+Ayutla,+Jal.!3b1!8m2!3d20.1280233!4d-104.3439311!16s%2Fg%2F11c5q4bn85!3m5!1s0x8424358fdda69375:0x8fcde9c853bba15e!8m2!3d20.130023!4d-104.3458549!16s%2Fg%2F11cn0mgcj6?entry=ttu" target="_blank">Ubicacion</a>
    <a href="Informacion.php">Contactanos</a>
    <a href="index.php">Inicio de Sesión</a>
</header>

<div class="container">
    <section class="section">
        <h2>Historia de Paletería Don Jose</h2>
        <p>Paletería Don Jose es un negocio familiar fundado hace 10 años en la hermosa ciudad de Ayutla, Jalisco. Todo comenzó con la pasión y dedicación de Don Jose por crear sabores únicos de paletas artesanales que deleitaran a sus clientes.</p>
        <p>Desde sus inicios, nos hemos comprometido a utilizar ingredientes frescos y de alta calidad en la elaboración de nuestras paletas, manteniendo así un estándar de excelencia que nos ha hecho destacar en el mercado.</p>
        <p>Con el paso de los años, hemos expandido nuestra variedad de sabores para satisfacer los gustos más exigentes. Nuestro compromiso con la calidad y la innovación nos ha llevado a ser reconocidos como una de las mejores paleterías de la región.</p>
        <p>¡Ven y disfruta de la experiencia única que ofrece Paletería Don Jose! Estamos seguros de que nuestros deliciosos sabores te conquistarán y te harán regresar por más.</p>
    </section>
</div>
<footer>
<p>&copy; 2024 Paletería Don Jose | Dirección: Ayutla #5637, Guadalajara Jalisco Mexico | Teléfono: (332) 914 5027 </p>
</footer>
</body>
</html>
