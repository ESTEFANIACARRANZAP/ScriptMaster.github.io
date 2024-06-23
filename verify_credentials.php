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

// Verificar si el correo existe en la base de datos
$sql = "SELECT * FROM registro WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo "success";
} else {
    echo "El correo electrónico no está registrado.";
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
