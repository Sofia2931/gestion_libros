<?php
include "../conn/db.php";
session_start();


if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $id=$_GET["id"];
    $sql = "SELECT * FROM libros WHERE id='$id'";
    $libro = $conn->query($sql);
    if ($libro->num_rows > 0) {
        $row = $libro->fetch_assoc();
        $libroArray = array(
            "id" => $row["id"],
            "titulo" => $row["titulo"],
            "autor" => $row["autor"],
            "precio" => $row["precio"],
            "cantidad" => $row["cantidad"]
        );
        $_SESSION['libroArray'] = $libroArray; // Guardar en sesión
        header("Location: ../../pages/update.php");
        exit();
    } else {
        header("Location: ../../index.php");
        exit();
    }
    // Preparar la consulta SQL para actualizar
    // Cerrar conexión
    $conn->close();
}
?>