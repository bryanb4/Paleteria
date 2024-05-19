<<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    echo '<script>alert("Por favor, inicia sesión para realizar la compra."); window.location = "index.php";</script>';
    exit;
}

if (!isset($_POST['carrito']) || !isset($_POST['total'])) {
    echo '<script>alert("Error en los datos de la compra."); window.location = "catalogo.php";</script>';
    exit;
}


require('fpdf/fpdf.php');


$pdf = new FPDF();
$pdf->AddPage();


$pdf->SetTitle('Reporte de Compras');

// Agregar contenido al PDF
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'Reporte de Compras', 0, 1, 'C');

$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, 'Fecha: ' . date('Y-m-d'), 0, 1);
$pdf->Cell(0, 10, 'Usuario: ' . $_SESSION['usuario'], 0, 1);
$pdf->Cell(0, 10, 'Total de venta: $' . floatval($_POST['total']), 0, 1);
$pdf->Cell(0, 10, 'Productos vendidos:', 0, 1);

$carrito = json_decode($_POST['carrito'], true);
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

echo '<script>alert("Compra realizada correctamente. Descarga tu reporte: ' . $nombre_archivo . '"); window.location = "catalogo.php";</script>';
exit;
?>
