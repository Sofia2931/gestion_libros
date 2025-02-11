<?php
include "../conn/db.php";
//Funcion GET para obtener el id del libro y eliminarlo
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $id=$_GET["id"];
    $sql = "DELETE FROM libros WHERE id='$id'";
    $libro = $conn->query($sql);
        if ($libro === TRUE) {
            header("Location: ../index.php");
            exit();
        } else {
            echo "Error al eliminar el libro: " . $conn->error;
        }
    exit();
    // Cerrar conexión
    $conn->close();
}