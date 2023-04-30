session_start();
require_once 'conexion.php';
// Si se envió el formulario de registro
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email_reg"]) && isset($_POST["psw_reg"]) && isset($_POST["psw_repeat"])) {
  $email = $_POST["email_reg"];
  $password = $_POST["psw_reg"];
  $password_repeat = $_POST["psw_repeat"];

  // Verificar que las contraseñas coincidan
  if ($password != $password_repeat) {
    echo "Las contraseñas no coinciden";
  } else {
    // Verificar que el correo no se haya registrado antes
    $sql = "SELECT * FROM usuarios WHERE correo = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo "Este correo ya ha sido registrado";
    } else {
      // Si todo está bien, registrar al usuario en la base de datos
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);
      $sql = "INSERT INTO usuarios (correo, contrasena) VALUES ('$email', '$hashed_password')";

      if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
  }
}