<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ScriptMaster</title>
    <!-- Enlace al CSS de Bootstrap desde CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos CSS */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');



        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            align-items: flex-start;
            position: relative;
            height: 100vh; 
        }
        body::before {
            content: ""; 
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1607799279861-4dd421887fb3?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') center/cover no-repeat;
            z-index: -1;
            opacity: 0.90;
        }
        header {
            color: #fff;
            padding: 15px;
            text-align: left;
            width: 100%;
            display: flex;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.5);
        }
        .logo {
            max-width: 100px;
            margin-right: 20px;
        }
        nav {
            text-align: center;
            margin-top: 5px;
            width: 100%;
        }
        .boton1 {
    background-color: #924E7D;
    border: none;
    color: white;
    padding: 12px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 23px;
    margin: 20px auto 20px 210px;
    cursor: pointer;
    border-radius: 8px;
    transition: color 0.3s;
    position: relative; /* O absoluta, dependiendo del contexto */
    top: 10px; /* Ajusta este valor para mover el botón hacia abajo */
}

.boton2 {
    background-color: #924E7D;
    border: none;
    color: white;
    padding: 12px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 23px;
    margin: 20px auto 20px 60px;
    cursor: pointer;
    border-radius: 8px;
    transition: color 0.3s;
    position: relative; /* O absoluta, dependiendo del contexto */
    top: 10px; /* Ajusta este valor para mover el botón hacia abajo */
}

    .boton:hover {
        color: #78b785;
    }
        
        h2, h3, h4 {
            position: absolute;
            color: #fff;
            margin: 0;
            padding: 0;
        }
        h1 {
            flex-grow: 1;
            margin: 0;
            font-family: "Roboto", Georgia;
            font-size: 50px;
        }
        footer {
            background: linear-gradient(to right, #51002B, #041B2D);
            color: #fff;
            padding: 10px;
            width: 99.8%;
            position: fixed;
            bottom: 0;
            border-radius: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .redes-sociales {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 25px;
        }
        .redes-sociales a {
            margin: 0 10px;
        }
        .redes-sociales img {
            width: 30px;
        }
        .boton-usuario {
            transform: translateY(-50px);
            background-color: rgba(255, 255, 255, 0.0) !important;
            border: none;
            padding: 29px 38px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            position: absolute;
            top: 70px;
            right: 400px;
            width: 110px;
            height: 110px;
            cursor: pointer;
            border-radius: 8px;
            transition: background-color 0.3s, color 0.3s;
            background-image: url('Image/perfil-unscreen.gif');
            background-size: cover;
            background-repeat: no-repeat;
        }
        .user-info-container {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 40px;
            margin: 70px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            font-size: 25px;
            font-family: 'Poppins', sans-serif;
        }
        .form-control {
    width: 100%;
    padding: 10px 15px;
    font-size: 20px;
    color: #495057;
    font-family: 'Poppins', sans-serif;
}
        .modal {
            display: none;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            padding-top: 60px;
            font-size: 28px;
            background-color: rgba(0, 0, 0, 0.4);
            z-index: 1000;
        }
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 250px;
            border-radius: 10px;
        }
      
    </style>
</head>
<body>

<header>
    <img src="Image/logoScrip-removebg-preview.png" alt="Logo de tu página" class="logo">
    <h1>ScriptMaster</h1>
    <nav>
    <a href="http://localhost/ScriptMaster-Cursos.php" class="boton1">Cursos</a>
    <a href="http://localhost/ScriptMaster-Contenido.php" class="boton2">Contenido</a>
</nav>
</header>



<div class="boton-container">
    <a href="#" class="boton-usuario" id="forgot-password-link"></a>
</div>

<!-- Información del Usuario -->
<div class="user-info-container">
    <form>
        <div class="form-group">
            <label for="userFirstName">Nombres</label>
            <input type="text" class="form-control" id="userFirstName" value="Juan">
        </div>
        <div class="form-group">
            <label for="userLastName1">Apellido Paterno</label>
            <input type="text" class="form-control" id="userLastName1" value="Pérez">
        </div>
        <div class="form-group">
            <label for="userLastName2">Apellido Materno</label>
            <input type="text" class="form-control" id="userLastName2" value="López">
        </div>
        <div class="form-group">
            <label for="userPassword">Contraseña</label>
            <input type="password" class="form-control" id="userPassword" value="********">
        </div>
        <div class="form-group">
            <label for="userEmail">Email</label>
            <input type="email" class="form-control" id="userEmail" value="juan.perez@example.com">
        </div>
        <button type="button" class="btn btn-primary">Guardar</button>
    </form>
</div>

<!-- Modal para información del usuario -->
<div id="myModal" class="modal">
    <div class="modal-content">
    <a href="http://localhost/ScriptMaster-Informacion.php">Información</a> <!-- Redirige a informacion.html -->
    <a href="http://localhost/ScriptMaster-Salir.php">Salir</a> <!-- Redirige a salir.html -->
    </div>
</div>


<footer>
    <div class="redes-sociales">
        <a href="https://www.google.com/intl/es-419/gmail/about/" target="_blank"><img src="https://cdn-icons-png.flaticon.com/128/732/732200.png" alt="Gmail"></a>
        <a href="https://wa.me/5575433224?text=I'm%20interested%20in%20your%20car%20for%20sale" target="_blank"><img src="https://cdn-icons-png.flaticon.com/128/733/733585.png" alt="Whatsapp"></a>
        <a href="https://www.instagram.com/tucuenta" target="_blank"><img src="https://cdn-icons-png.flaticon.com/128/174/174855.png" alt="Instagram"></a>
        <h7>TECNOLOGICO DE ESTUDIOS SUPERIORES DE CUAUTITLAN IZCALLI 💓</h7>
    </div>
</footer>
<!-- Enlace a los JS de Bootstrap desde CDN -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  // JavaScript para abrir y cerrar el modal
var modal = document.getElementById("myModal");
var btn = document.getElementById("forgot-password-link");

btn.onclick = function() {
    modal.style.display = "block";
}

// Manejar el cierre del modal al hacer clic fuera del contenido del modal
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Opcional: Manejar el cierre del modal al presionar la tecla "Esc"
window.onkeydown = function(event) {
    if (event.key === "Escape") {
        modal.style.display = "none";
    }
}

</script>
</body>
</html>
