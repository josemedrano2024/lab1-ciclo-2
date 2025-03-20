<?php include 'header.php'; ?>
<?php
include 'conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM libros WHERE id=$id";

    if ($conexion->query($sql) === TRUE) {
        echo "<p>Libro eliminado con éxito</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
} else {
    echo "<p>ID de libro no proporcionado</p>";
}

$conexion->close();
?>
<p><a href="ver.php">Volver a la lista de libros</a></p>
<?php include 'footer.php'; ?>