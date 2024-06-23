<?php
// Parámetros de conexión a la base de datos
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
$correo = $_POST['usercorreo'];
$contraseña = $_POST['Contra'];

// Verificar si los datos del formulario no están vacíos
if (empty($correo) || empty($contraseña)) {
    echo 'campos_vacios';
    exit();
}

// Consulta SQL para verificar las credenciales del usuario
$sql = "SELECT * FROM registro WHERE email = ?";
$stmt = $conn->prepare($sql);
if ($stmt === false) {
    die("Error al preparar la declaración: " . $conn->error);
}

$stmt->bind_param("s", $correo);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Usuario encontrado, verificar la contraseña
    $row = $result->fetch_assoc();

    if ($contraseña === $row['password']) {
        // Contraseña correcta, inicio de sesión exitoso
        session_start();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_email'] = $row['email'];
        
        // Responder con éxito
        echo 'success';
    } else {
        // Contraseña incorrecta
        echo 'contraseña_incorrecta '  ;
    }
} else {
    // Usuario no encontrado
    echo 'usuario_no_encontrado';
}

// Cerrar la declaración y la conexión
$stmt->close();
$conn->close();
?>
