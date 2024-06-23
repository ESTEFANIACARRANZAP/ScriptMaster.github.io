<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "Fani1234";
$dbname = "scriptmaster";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$email = $_POST['email'];
$new_password = $_POST['new-password'];

// Actualizar la contraseña y confirmPassword en la base de datos
$sql = "UPDATE registro SET password = ?, confirmPassword = ? WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $new_password, $new_password, $email);

if ($stmt->execute()) {
    echo "Contraseña actualizada con éxito.";
} else {
    echo "Error al actualizar la contraseña.";
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
