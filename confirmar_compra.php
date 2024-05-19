<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Compra - Paletería Don Jose</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-bottom: 20px;
        }
        p {
            margin-bottom: 10px;
        }
        button {
            background-color: #ffcc00;
            color: #333;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #e0b300;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>¡Compra realizada con éxito!</h2>
        <p>Gracias por tu compra en Paletería Don Jose.</p>
        <p>Puedes volver al catálogo o al inicio:</p>
        <button onclick="window.location.href='catalogo.php'">Volver al Catálogo</button>
        <button onclick="window.location.href='bienvenida.php'">Volver al Inicio</button>
    </div>
</body>
</html>
