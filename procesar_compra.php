<?php
require('fpdf/fpdf.php');

session_start();

if (!isset($_SESSION['usuario'])) {
    echo '<script>alert("Por favor, inicia sesión para realizar la compra."); window.location = "index.php";</script>';
    exit;
}

if (!isset($_POST['carrito']) || !isset($_POST['total'])) {
    echo '<script>alert("Error en los datos de la compra."); window.location = "catalogo.php";</script>';
    exit;
}

$carrito = json_decode($_POST['carrito'], true);
$total_compra = floatval($_POST['total']);

include 'conexion.php';

$reporte_ventas = "Fecha: " . date('Y-m-d') . "\n";
$reporte_ventas .= "Usuario: " . $_SESSION['usuario'] . "\n";
$reporte_ventas .= "Total de venta: $" . $total_compra . "\n";
$reporte_ventas .= "Productos vendidos:\n";

// Preparar el registro para el archivo compras.txt y el reporte de ventas
$registro_txt = date('Y-m-d H:i:s') . " - Usuario: " . $_SESSION['usuario'] . " - Total: $" . $total_compra . PHP_EOL;

foreach ($carrito as $item) {
    $nombre_producto = $item['nombre'];
    $precio_producto = floatval($item['precio']);

    $registro_txt .= "    Producto: " . $nombre_producto . " - Precio: $" . $precio_producto . PHP_EOL;

    
    $reporte_ventas .= "Producto: " . $nombre_producto . " - Precio: $" . $precio_producto . "\n";

    
    $query_producto = "INSERT INTO productos_comprados (nombre, precio) VALUES (?, ?)";
    $stmt_producto = mysqli_prepare($conexion, $query_producto);

    if (!$stmt_producto) {
        echo '<script>alert("Error al preparar la consulta para insertar productos comprados."); window.location = "catalogo.php";</script>';
        exit;
    }

    mysqli_stmt_bind_param($stmt_producto, 'sd', $nombre_producto, $precio_producto);
    mysqli_stmt_execute($stmt_producto);

    mysqli_stmt_close($stmt_producto);
}


$query_compra = "INSERT INTO compras (fecha, total) VALUES (NOW(), ?)";
$stmt_compra = mysqli_prepare($conexion, $query_compra);

if (!$stmt_compra) {
    echo '<script>alert("Error al preparar la consulta para insertar la compra."); window.location = "catalogo.php";</script>';
    exit;
}

mysqli_stmt_bind_param($stmt_compra, 'd', $total_compra);
$resultado = mysqli_stmt_execute($stmt_compra);

mysqli_stmt_close($stmt_compra);

$_SESSION['reporte_ventas'] = isset($_SESSION['reporte_ventas']) ? $_SESSION['reporte_ventas'] : '';
$_SESSION['reporte_ventas'] .= "<hr>" . $reporte_ventas;


$nombre_archivo = 'reporte_compras_' . date('YmdHis') . '.pdf';


$pdf = new FPDF();
$pdf->AddPage();


$pdf->SetTitle('Reporte de Compras');


$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'Reporte de Compras', 0, 1, 'C');

$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, 'Fecha: ' . date('Y-m-d'), 0, 1);
$pdf->Cell(0, 10, 'Usuario: ' . $_SESSION['usuario'], 0, 1);
$pdf->Cell(0, 10, 'Total de venta: $' . floatval($_POST['total']), 0, 1);
$pdf->Cell(0, 10, 'Productos vendidos:', 0, 1);

foreach ($carrito as $item) {
    $pdf->Cell(0, 10, 'Producto: ' . $item['nombre'] . ' - Precio: $' . $item['precio'], 0, 1);
}


$pdf->SetLineWidth(0.5); 
$pdf->SetDrawColor(0); 
$pdf->SetFillColor(230, 230, 230); 
$pdf->SetTextColor(0); 

$pdf->Ln(10); 


$pdf->Line(10, $pdf->GetY(), 200, $pdf->GetY());


$pdf->SetFont('Arial', 'I', 10);
$pdf->Cell(0, 10, 'Descarga tu reporte: ' . $nombre_archivo, 0, 1);


$pdf->Output('F', $nombre_archivo);

echo '<script>alert("Compra realizada correctamente. Ticket Generado "); window.location = "catalogo.php";</script>';
exit;
?>
