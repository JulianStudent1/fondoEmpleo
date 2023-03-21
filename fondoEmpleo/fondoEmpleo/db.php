<?php
// Conexión con la base de datos
$servername = "datacenterhrplus.mysql.database.azure.com";
$username = "JeAvella";
$password = "Julian1*";
$dbname = "datacenterhrplus";
//$sslmode = "ON";

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}
?>