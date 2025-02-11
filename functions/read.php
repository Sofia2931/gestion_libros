<?php
include "conn/db.php";

$sql = "SELECT * FROM libros";
$libros = $conn->query($sql);

