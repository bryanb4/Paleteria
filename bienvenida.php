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
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            background-color: rgba(255, 255, 255, 0.8);
        }
        .container h1 {
            font-size: 2em;
            margin-bottom: 20px;
        }
        .container p, .container ul, .container ol {
            font-size: 1.2em;
            line-height: 1.6;
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
            .container {
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
        <h1>Paleteria Don Jose</h1>
    </header>
    <nav>
        <a href="bienvenida.php">Inicio</a>
        <a href="catalogo.php">Catálogo</a>
        <a href="contacto.php">Reporte</a>
        <a href="cerrar_sesion.php">Cerrar sesión</a>
    </nav>
    <div class="container">
        <h1>Bienvenido a Paleteria Don Jose</h1>
        <p>Este espacio está dedicado para guiarte como empleado. Nos complace tenerte en nuestro equipo.</p>
        <p>Nuestra misión es ofrecer las mejores paletas y helados artesanales a nuestros clientes, asegurándonos de que cada visita sea una experiencia memorable.</p>
    </div>
    <div class="container">
        <h1>Instrucciones Generales</h1>
        <ul>
            <li>Saluda siempre a los clientes con una sonrisa y una actitud amable.</li>
            <li>Mantén el área de trabajo limpia y ordenada.</li>
            <li>Sigue las recetas y procedimientos al pie de la letra para garantizar la calidad de nuestros productos.</li>
            <li>Reporta cualquier problema o incidencia a tu supervisor de inmediato.</li>
        </ul>
    </div>
    <div class="container">
        <h1>Proceso de Venta</h1>
        <p>Para asegurarte de que el proceso de venta sea fluido y eficiente, sigue estos pasos:</p>
        <ol>
            <li>Recibe al cliente y ofrécele nuestras opciones de paletas y helados.</li>
            <li>Asiste al cliente en la elección de su producto.</li>
            <li>Confirma el pedido y procesa el pago de manera rápida y segura.</li>
            <li>Agradece al cliente por su compra y deséale un buen día.</li>
        </ol>
    </div>
    <div class="container">
        <h1>Información de Productos</h1>
        <p>Conoce bien nuestros productos para poder ofrecer la mejor atención a nuestros clientes:</p>
        <ul>
            <li>Paletas de frutas: 100% naturales y sin conservantes.</li>
            <li>Paletas de crema: hechas con leche fresca y sabores auténticos.</li>
            <li>Helados artesanales: una variedad de sabores únicos y deliciosos.</li>
            <li>Opciones veganas y sin azúcar disponibles.</li>
            <li>Agua de sabor: 100% naturales y deliciosas.</li>
        </ul>
    </div>
    <div class="container">
        <h1>Promociones y Ofertas</h1>
        <p>Mantente al tanto de las promociones y ofertas especiales que ofrecemos:</p>
        <ul>
            <li>Martes y Jueves de 2x1 en Paletas</li>
            <li>Oferta especial de temporada: 2x1 en helados durante los fines de semana.</li>
            <li>Promoción de fidelidad: acumula puntos con cada compra y canjéalos por productos gratis.</li>
        </ul>
    </div>
    <div class="container">
        <h1>Contacto y Soporte</h1>
        <p>Si tienes alguna pregunta o necesitas asistencia, no dudes en contactar a tu supervisor o utilizar los siguientes recursos:</p>
        <ul>
            <li>Teléfono de soporte: (332) 914 5027</li>
            <li>Email: Josepelayo89@gmail.com</li>
            <li>Manual del empleado: disponible en la oficina principal</li>
        </ul>
    </div>
    <footer>
        <p>&copy; 2024 Paletería Don Jose | Dirección: Ayutla #5637, Guadalajara Jalisco, México | Teléfono: (332) 914 5027</p>
    </footer>
</body>
</html>
