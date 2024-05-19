<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nombre_completo = $_SESSION['nombre_completo'];  
    $correo_destinatario = $_POST['correo_destinatario'];
    $mensaje = $_POST['mensaje_reporte'];

    
    if (isset($_SESSION['usuario'])) {
        $correo_remitente = $_SESSION['usuario'];

       
        include 'conexion.php';

        
        $sql_insert = "INSERT INTO mensajes (nombre_remitente, correo, asunto, mensaje, fecha_envio) 
                       VALUES ('$nombre_completo', '$correo_remitente', 'Reporte de ventas', '$mensaje', NOW())";

        if (mysqli_query($conexion, $sql_insert)) {
           
            $asunto_correo = "Nuevo mensaje de contacto: Reporte de ventas";
            $cuerpo_correo = "Nombre: $nombre_completo\nCorreo: $correo_remitente\nMensaje: $mensaje";

            mail($correo_destinatario, $asunto_correo, $cuerpo_correo, $headers_correo);

          
            header('Location: bienvenida.php');
            exit;
        } else {
            echo "Error: " . $sql_insert . "<br>" . mysqli_error($conexion);
        }

        
        mysqli_close($conexion);
    } else {
        echo "Error: El correo del remitente no está disponible en la sesión.";
    }
} else {
 
    echo "Error: El formulario debe enviarse por el método POST.";
}

?>
