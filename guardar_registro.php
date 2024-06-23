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
$nombres = $_POST['nombres'];
$apellidoPaterno = $_POST['apellidoPaterno'];
$apellidoMaterno = $_POST['apellidoMaterno'];
$contraseña = $_POST['contraseña'];
$confirmPassword = $_POST['confirmPassword'];
$email = $_POST['email'];

// Verificar si el correo ya está registrado
$sql = "SELECT * FROM registro WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Si se encuentra una coincidencia, enviar un mensaje de error
    echo "El correo electrónico ya está registrado. Intente con otro.";
} else {
    // Verificar si la contraseña ya está en uso
    $sql = "SELECT * FROM registro WHERE password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $contraseña);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        // Si se encuentra una coincidencia, enviar un mensaje de error
        echo "La contraseña ya está en uso. Intente con otra.";
    } else {
        // Consulta SQL para insertar datos (usando sentencias preparadas para mayor seguridad)
        $sql = "INSERT INTO registro (nombres, apellidoPaterno, apellidoMaterno, password, confirmPassword, email) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $nombres, $apellidoPaterno, $apellidoMaterno, $contraseña, $confirmPassword, $email);

        // Ejecutar la consulta y verificar si se realizó correctamente
        if ($stmt->execute() === TRUE) {
            echo "Registro guardado";
        } else {
            echo "Error al guardar el registro: " . $conn->error;
        }
    }
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>