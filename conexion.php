$servername = "localhost";
$username = "root";
$password = "programacionweb2022#";
$dbname = "projectink";

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}
?>