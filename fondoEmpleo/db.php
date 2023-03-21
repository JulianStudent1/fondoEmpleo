<?php
// Conexión con la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto_todo";

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}
?>