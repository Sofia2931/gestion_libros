<?php
include "../conn/db.php";
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $id=$_GET["id"];
    $sql = "DELETE FROM libros WHERE id='$id'";
    $libro = $conn->query($sql);
        if ($libro === TRUE) {
            echo "Record deleted successfully";
            header("Location: ../../index.php");
            exit();
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    exit();
    // Preparar la consulta SQL para actualizar
    // Cerrar conexión
    $conn->close();
}