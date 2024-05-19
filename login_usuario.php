<?php
session_start();

include 'conexion.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha512', $contrasena);

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' AND contrasena = '$contrasena'" );

if (mysqli_num_rows($validar_login) > 0 ) {
    $usuario = mysqli_fetch_assoc($validar_login);
    $_SESSION['usuario'] = $usuario['correo'];
    $_SESSION['nombre_completo'] = $usuario['nombre_completo']; // Añadimos el nombre completo a la sesión
    
    if ($usuario['rol'] === 'administrador') {
        header("location: inicio_admin.php"); // Redirige al inicio de administrador
        exit;
    } else {
        header("location: bienvenida.php"); // Redirige al inicio de usuario regular
        exit;
    }
} else {
    echo '
    <script>
    alert("Este usuario no existe, verifique los datos");
    window.location = "index.php";
    </script>
    ';
    exit;
}
?>
