<?php
include "conn/db.php";
//Funcion GET para la obtencion de todos los libros
$sql = "SELECT * FROM libros";
$libros = $conn->query($sql);

