session_start();
require_once 'conexion.php';

$email = $_POST['email'];
$psw = $_POST['psw'];

$sql = "SELECT * FROM usuarios WHERE email='$email' AND psw='$psw'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
  // El usuario ha iniciado sesión correctamente
  $_SESSION['email'] = $email;
  header("Location: perfil.php"); // Redirige al usuario a la página de perfil
} else {
  // Las credenciales son incorrectas
  header("Location: login.php?error=1"); // Redirige al usuario a la página de inicio de sesión con un mensaje de error
}
?>