<?php
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
echo "Conexión exitosa";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email_reg"];
  $password = $_POST["psw_reg"];

  $sql = "INSERT INTO usuarios (email, password) VALUES ('$email', '$password')";

  if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>