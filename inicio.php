<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paletería Don Jose</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
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
        .hero-image {
            background-image: url('paleteria.jpg');
            background-size: cover;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            text-align: center;
        }
        .hero-content {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 10px;
            max-width: 600px;
        }
        .hero-content h1 {
            font-size: 40px;
            margin-bottom: 10px;
        }
        .hero-content p {
            font-size: 20px;
            margin-bottom: 20px;
        }
        section {
            padding: 20px;
            text-align: center;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Paletería Don Jose</h1>
    </header>
    <nav>
        <a href="bienvenida.php">Inicio</a>
        <a href="#">Catálogo</a>
        <a href="contacto.php">Reporte</a>
        <a href="cerrar_sesion.php">Cerrar sesion</a>
    </nav>
    <div class="hero-image">
        <div class="hero-content">
            <h1>Descubre el Sabor de lo Auténtico</h1>
            <p>Bienvenido a Paletería La Delicia, donde encontrarás paletas artesanales con ingredientes frescos y sabores inigualables.</p>
            <a href="#" style="background-color: #ffcc00; color: #333; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Ver Catálogo</a>
        </div>
    </div>
    <section>
        <h2>¿Por Qué Elegirnos?</h2>
        <p>Nuestra paletería se distingue por:</p>
        <ul>
            <li>Ingredientes frescos y de alta calidad.</li>
            <li>Variedad de sabores tradicionales y exóticos.</li>
            <li>Paletas elaboradas de manera artesanal.</li>
            <li>Compromiso con la satisfacción de nuestros clientes.</li>
        </ul>
    </section>
    <section style="background-color: #f7f7f7;">
        <h2>Nuestros Sabores Destacados</h2>
        <div class="producto">
            <img src="paleta1.jpg" alt="Paleta de Fresa">
            <h3>Paleta de Fresa</h3>
            <p>Precio: $1.50</p>
        </div>
        <div class="producto">
            <img src="paleta2.jpg" alt="Paleta de Mango">
            <h3>Paleta de Mango</h3>
            <p>Precio: $1.75</p>
        </div>
        <div class="producto">
            <img src="paleta3.jpg" alt="Paleta de Coco">
            <h3>Paleta de Coco</h3>
            <p>Precio: $1.50</p>
        </div>
    </section>
    <footer>
    <p>&copy; 2024 Paletería Don Jose | Dirección: Ayutla #5637, Guadalajara Jalisco Mexico | Teléfono: (332) 914 5027 </p>
</body>
</html>
