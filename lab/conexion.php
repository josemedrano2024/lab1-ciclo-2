<?php 

$conexion = mysqli_connect("localhost", "root", "", "mi_biblioteca");
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
else {
    echo "";
}

?>