<?php
// Establecer la conexión a la base de datos
$servername = "localhost"; // Reemplaza "localhost" con el nombre de tu servidor
$username = "root"; // Reemplaza "tu_usuario" con tu usuario de MySQL
$password = "programacionweb2022#"; // Reemplaza "tu_contraseña" con tu contraseña de MySQL
$dbname = "projectink"; // Reemplaza "tu_base_de_datos" con el nombre de tu base de datos

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}
?>