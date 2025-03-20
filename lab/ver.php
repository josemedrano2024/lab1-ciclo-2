<?php include 'header.php'; ?>
<?php
include 'conexion.php';

$sql = "SELECT id, titulo, autor, genero, anio_publicacion FROM libros";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Título</th><th>Autor</th><th>Género</th><th>Año</th><th>Acciones</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["titulo"]. "</td><td>" . $row["autor"]. "</td><td>" . $row["genero"]. "</td><td>" . $row["anio_publicacion"]. "</td><td><a href='actualizar.php?id=" . $row["id"]. "'>Editar</a> | <a href='eliminar.php?id=" . $row["id"]. "'>Eliminar</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "<p>0 resultados</p>";
}
$conexion->close();
?>
<?php include 'footer.php'; ?>
