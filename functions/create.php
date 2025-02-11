<?php
include "../conn/db.php";

//Funcion POST para realizar la creacion del libro
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = isset($_POST["id"]) && $_POST["id"] != "" ? $_POST["id"] : null;
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $precio = $_POST["precio"];
    $cantidad = $_POST["cantidad"];
    
    //Verificacion del parametro id en la sesion 
    if ($id) {
        $sql = "UPDATE libros SET titulo='$titulo', autor='$autor', precio='$precio', cantidad='$cantidad' WHERE id='$id'";
    } else {
        $sql = "INSERT INTO libros (titulo, autor, precio, cantidad) VALUES ('$titulo', '$autor', '$precio', '$cantidad')";
    }

    //Redireccion a la pagina principal
    if ($conn->query($sql) === TRUE) {
        header("Location: ../index.php");
        exit();

    } else {
        header("Location: ../index.php");
        exit();
    }

    $conn->close();
}
