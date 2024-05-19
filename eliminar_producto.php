<?php
session_start();
include 'conexion.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    
    // Preparar la consulta con un marcador de posición (?)
    $sql = "DELETE FROM productos WHERE id = ?";
    
    // Preparar la declaración
    $stmt = $conexion->prepare($sql);
    
    // Vincular el parámetro ID al marcador de posición
    $stmt->bind_param("i", $id);
    
    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo 'success'; // Devuelve 'success' si la eliminación fue exitosa
    } else {
        echo 'error'; // Devuelve solo 'error' si la consulta falla
    }
    
    // Cerrar la declaración
    $stmt->close();
} else {
    echo 'error: ID no recibido'; // Devuelve un error si el ID no se recibió correctamente
}


?>
