<?php
// db.php
$host = 'localhost';
$dbname = 'gestion_libros';
$username = 'root';
$password = '';

$conn = new mysqli($host, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}
?>
