<?php
$para = 'oliver.arteaga4281@alumnos.udg.mx';
$asunto = 'Prueba de correo desde PHP';
$mensaje = 'Este es un correo de prueba enviado desde un script PHP.';
$cabeceras = 'From: oliverto24@gmail.com' . "\r\n" .
    'Reply-To: remitente@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if (mail($para, $asunto, $mensaje, $cabeceras)) {
    echo 'El correo se envió correctamente.';
} else {
    echo 'Error al enviar el correo.';
}
?>
