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
            background-color: rgba(0, 0, 0, 0.5); /* Fondo semi-transparente */
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
.album {
    padding: 80px;
    text-align: center;
    position: relative;
    z-index: 1;
    margin-top: 100px;
}

.card-body {
    background-color: rgba(255, 255, 255, 0.1) !important;
    padding: 40px;
}

.card {
    background-color: rgba(255, 255, 255, 0.8) !important;
    border-radius: 20px;
    margin-bottom: 40px;
    transition: transform 0.3s ease; /* Agregamos una transición suave */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra para mejorar la profundidad */
}

.card:hover {
    transform: scale(1.05); /* Efecto de escala al pasar el ratón */
}

.card img {
    max-width: 100%; /* Ajustamos el ancho máximo de la imagen */
    height: auto; /* Permitimos que la altura se ajuste automáticamente */
    border-radius: 20px; /* Añadimos borde redondeado a las imágenes */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 10); /* Sombra para las imágenes */
}

.card-text {
    font-size: 18px;
    line-height: 1.6;
    color: #333;
    margin-top: 15px;
    text-align: justify;
}

.album h2 {
    color: #fff;
    font-size: 36px;
    margin-bottom: 30px;
}


        .boton-container {
            float: right;
            margin-left: 20px;
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
            background-color: rgba(0, 0, 0, 0.4); /* Fondo oscuro semitransparente */
            z-index: 1000; /* Ajusta según sea necesario para estar seguro de que esté por encima de otros elementos */
        }
        
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 250px;
            border-radius: 10px;
            left: 23%; /* Cambiar la posición horizontal */
            margin: 4.5% auto; /* Cambiar la posición vertical */
            
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

<!-- Modal para información del usuario -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <a href="http://localhost/ScriptMaster-Informacion.php">Información</a> <!-- Redirige a informacion.html -->
        <a href="http://localhost/ScriptMaster-Salir.php">Salir</a> <!-- Redirige a salir.html -->
    </div>
</div>

<div class="album py-5">
    <div class="container">
        <h2 class="mb-5">Nuestro Álbum</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://blog.pandorafms.org/wp-content/uploads/2018/05/que-es-un-algoritmo-featured.png" class="card-img-top" alt="Imagen 1">
                    <div class="card-body">
                        <h7 class="card-title">FUNDAMENTOS DE PROGRAMACION</h7>
                        <p class="card-text">El curso "Fundamentos de Programación" es ideal para principiantes, ofreciendo una comprensión sólida de los principios básicos comunes a todos los lenguajes de programación, y sirviendo como una introducción esencial al mundo de la informática.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1605379399843-5870eea9b74e?q=80&w=1796&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="Imagen 2">
                    <div class="card-body">
                        <p class="card-text1">ACERCAMIENTO A LA PROGRAMACION</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://media.istockphoto.com/id/1149101430/es/foto/texto-de-c.jpg?s=2048x2048&w=is&k=20&c=JfSkoDMK9qY2CnssWnD09rOyBw3PBIApnOjH0z_wUTc=" class="card-img-top" alt="Imagen 3">
                    <div class="card-body">
                        <p class="card-text2">PROGRAMACION EN C++</p>
                    </div>
                </div>
            </div>
        </div>
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
