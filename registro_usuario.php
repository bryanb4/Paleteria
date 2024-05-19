<?php
include 'conexion.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$rol = $_POST['rol']; // Captura el valor del campo 'rol'

$contrasena = hash('sha512', $contrasena);

if ($rol == 1) {
    $rolDB = 'empleado';
} elseif ($rol == 2) {
    $rolDB = 'administrador';
} else {
  
    $rolDB = 'empleado';
}

$query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena, rol)
VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena', '$rolDB')";

$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
    <script>
        alert("Este correo ya está registrado, intente con otro diferente");
        window.location = "registrar_empleado.php";
    </script>
    ';
    exit();
}

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");
if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '
    <script>
        alert("Este usuario ya está registrado, intente con otro diferente");
        window.location = "registrar_empleado.php";
    </script>
    ';
    exit();
}

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
    <script>
        alert("Usuario registrado exitosamente");
        window.location = "inicio_admin.php";
    </script>
    ';
} else {
    echo '
    <script>
        alert("Error al registrar usuario");
        window.location = "registrar_empleado.php";
    </script>
    ';
}

mysqli_close($conexion);
?>
