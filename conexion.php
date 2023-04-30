// Crea una conexión a la base de datos
$conn = mysqli_connect("localhost", "usuario", "contraseña", "basedatos");

// Prepara una consulta SQL
$stmt = mysqli_prepare($conn, "SELECT nombre, email FROM usuarios WHERE iduser = ?");

// Asigna el valor del parámetro a la consulta SQL
$id = 1;
mysqli_stmt_bind_param($stmt, "i", $id);

// Ejecuta la consulta SQL
mysqli_stmt_execute($stmt);

// Procesa los resultados
mysqli_stmt_bind_result($stmt, $nombre, $email);
while (mysqli_stmt_fetch($stmt)) {
    echo $nombre . " - " . $email . "<br>";
}

// Cierra la conexión a la base de datos
mysqli_close($conn);
