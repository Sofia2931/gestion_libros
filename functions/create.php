<?php
include "../conn/db.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = isset($_POST["id"]) && $_POST["id"] != "" ? $_POST["id"] : null;
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $precio = $_POST["precio"];
    $cantidad = $_POST["cantidad"];

    if ($id) {
        $sql = "UPDATE libros SET titulo='$titulo', autor='$autor', precio='$precio', cantidad='$cantidad' WHERE id='$id'";
    } else {
        $sql = "INSERT INTO libros (titulo, autor, precio, cantidad) VALUES ('$titulo', '$autor', '$precio', '$cantidad')";
    }
   
    // Preparar la consulta SQL

    if ($conn->query($sql) === TRUE) {
        header("Location: ../../index.php");
        exit();

    } else {
        header("Location: ../../index.php");
        exit();
    }

    // Cerrar conexión
    $conn->close();
}
