<?php 
$conexion = mysqli_connect("localhost","root","","paleteria");
if($conexion){
echo 'conectado exitosamente a la base de datos';
}else {
    echo 'no se ha conectado a la base de datos';
}









?>