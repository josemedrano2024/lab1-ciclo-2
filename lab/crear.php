<?php include 'header.php'; ?>
<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $genero = $_POST['genero'];
    $anio = $_POST['anio'];

    $sql = "INSERT INTO libros (titulo, autor, genero, anio_publicacion) VALUES ('$titulo', '$autor', '$genero', $anio)";

    if ($conexion->query($sql) === TRUE) {
        echo "<p>Libro creado con éxito</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
}
$conexion->close();
?>
<form method="post" action="crear.php">
    <label>Título: <input type="text" name="titulo"></label>
    <label>Autor: <input type="text" name="autor"></label>
    <label>Género: <input type="text" name="genero"></label>
    <label>Año de Publicación: <input type="number" name="anio"></label>
    <input type="submit" value="Crear">
</form>
<?php include 'footer.php'; ?>