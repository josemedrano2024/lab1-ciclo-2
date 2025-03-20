<?php include 'header.php'; ?>
<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $genero = $_POST['genero'];
    $anio = $_POST['anio'];

    $sql = "UPDATE libros SET titulo='$titulo', autor='$autor', genero='$genero', anio_publicacion=$anio WHERE id=$id";

    if ($conexion->query($sql) === TRUE) {
        echo "<p>Libro actualizado con éxito</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
}

$id = $_GET['id'];
$sql = "SELECT id, titulo, autor, genero, anio_publicacion FROM libros WHERE id=$id";
$result = $conexion->query($sql);
$row = $result->fetch_assoc();
$conexion->close();
?>
<form method="post" action="actualizar.php">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <label>Título: <input type="text" name="titulo" value="<?php echo $row['titulo']; ?>"></label>
    <label>Autor: <input type="text" name="autor" value="<?php echo $row['autor']; ?>"></label>
    <label>Género: <input type="text" name="genero" value="<?php echo $row['genero']; ?>"></label>
    <label>Año de Publicación: <input type
    ="number" name="anio" value="<?php echo $row['anio_publicacion']; ?>"></label>
    <input type="submit" value="Actualizar">
</form>
<?php include 'footer.php'; ?>
