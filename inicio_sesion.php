<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar las credenciales del usuario (por ejemplo, en una base de datos)
    $correo = obtenerCorreoUsuario($_POST['usuario'], $_POST['contrasena']);

    if ($correo) {
        // Iniciar sesión y almacenar el correo en la variable de sesión
        $_SESSION['correo'] = $correo;

        // Redireccionar a la página deseada después del inicio de sesión
        header('Location: bienvenida.php');
        exit;
    } else {
        // Si las credenciales son incorrectas, mostrar un mensaje de error
        $mensaje_error = "Usuario o contraseña incorrectos";
    }
}

// Función para obtener el correo del usuario desde una base de datos (solo como ejemplo)
function obtenerCorreoUsuario($usuario, $contrasena) {
    // Lógica para obtener el correo del usuario desde una base de datos
    // Esto depende de cómo estés manejando tu autenticación de usuarios
    // Aquí simularemos que se obtiene el correo correctamente
    return 'correo_ejemplo@dominio.com';
}
?>
