<?php
session_start();
include 'conexion.php';

if (!isset($_SESSION['usuario'])) {
    echo '
    <script>
    alert("Por favor inicie sesión");
    window.location = "index.php";
    </script>
    ';
    session_destroy();
    die();
}

$sql = "SELECT * FROM productos";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo - Paletería Don Jose</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
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
        .catalogo-container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        .producto {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }
        .producto img {
            max-width: 100%;
            border-radius: 5px;
        }
        .producto h3 {
            margin-top: 10px;
            margin-bottom: 5px;
        }
        .producto p {
            margin-bottom: 10px;
        }
        #catalogo, #carrito {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        #carrito {
            text-align: center;
        }
        #lista-carrito {
            list-style-type: none;
            padding: 0;
        }
        #total-carrito {
            font-weight: bold;
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
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
        .centrar-botones {
            text-align: center;
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
        <a href="cerrar_sesion.php">Cerrar sesion</a>
    </nav>
    <div id="catalogo" class="catalogo-container">
        <?php
        if ($resultado->num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) {
                echo '<div class="producto">';
                echo '<img src="" alt="">';
                echo '<h3>' . $row['nombre'] . '</h3>';
                echo '<p>Precio: $' . $row['precio'] . '</p>';
                echo '<button onclick="agregarAlCarrito(\'' . $row['nombre'] . '\', ' . $row['precio'] . ')">Agregar al carrito</button>';
                echo '</div>';
            }
        } else {
            echo 'No se encontraron productos.';
        }
        ?>
    </div>
    
    <!-- Carrito de compras -->
    <div id="carrito">
        <h2>Carrito de Compras</h2>
        <ul id="lista-carrito"></ul>
        <p>Total: $<span id="total-carrito"></span></p>
    </div>
    
    <!-- Formulario de compra y botón de comprar -->
    <form id="form-compra" method="POST" action="procesar_compra.php">
        <input type="hidden" id="input-carrito" name="carrito" value="">
        <input type="hidden" id="input-total" name="total" value="">
        <div class="centrar-botones">
            <button type="button" onclick="prepararCompra()">Comprar</button>
        </div>
    </form>
    
    <script>
        let carrito = [];
        function eliminarProducto(index) {
            carrito.splice(index, 1);
            actualizarCarrito();
        }

        function vaciarCarrito() {
            carrito = [];
            actualizarCarrito();
        }

        function agregarAlCarrito(nombre, precio) {
            carrito.push({ nombre, precio });
            actualizarCarrito();
        }

        function actualizarCarrito() {
            let listaCarrito = document.getElementById('lista-carrito');
            let totalCarrito = document.getElementById('total-carrito');
            listaCarrito.innerHTML = '';
            let total = 0;
            carrito.forEach(item => {
                let li = document.createElement('li');
                li.textContent = `${item.nombre} - $${item.precio.toFixed(2)}`;
                listaCarrito.appendChild(li);
                total += item.precio;
            });
            totalCarrito.textContent = total.toFixed(2);
        }

        function prepararCompra() {
            document.getElementById('input-carrito').value = JSON.stringify(carrito);
            document.getElementById('input-total').value = document.getElementById('total-carrito').textContent;
            document.getElementById('form-compra').submit();
        }
    </script>
    
    <footer>
    <p>&copy; 2024 Paletería Don Jose | Dirección: Ayutla #5637, Guadalajara Jalisco Mexico | Teléfono: (332) 914 5027 </p>
    </footer>
</body>
</html>
