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
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('https://images.unsplash.com/photo-1592424002053-21f369ad7fdb?q=80&w=1674&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
        background-size: cover;
        background-repeat: no-repeat;
        filter: brightness(110%);
        z-index: -1;
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
    margin: 10px auto 20px 400px;
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
        font-size: 45px;
    }

    h2 {
        top: 200px;
        left: 50%;
        transform: translateX(-50%);
        font-size: 48px;
    }

    h3 {
        top: 280px;
        left: 50%;
        transform: translateX(-50%);
        font-size: 48px;
    }

    h4 {
        top: 420px;
        left: 50%;
        transform: translateX(-50%);
        font-size: 30px;
        max-width: 80%; /* Limit the width of the text */
        text-align: center; /* Center the text */
        text-align: justify; /* Alinear el texto justificado */
    }

    h5 {
        position: absolute;
        top: 800px;
        left: 30%;
        transform: translateX(-50%);
        font-size: 30px;
        font-family: Arial, sans-serif;
        background-color: rgba(0, 0, 0, 0.5);
        padding: 10px;
        color: #fff;
    }

    h6 {
        position: absolute;
        top: 800px;
        left: 70%;
        transform: translateX(-50%);
        font-size: 30px;
        font-family: Arial, sans-serif;
        background-color: rgba(0, 0, 0, 0.5);
        padding: 10px;
        color: #fff;
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

    .redes-sociales h7 {
        margin-left: 20px;
        font-size: 16px;
    }

    h8 {
        
        font-size: 30px;
        font-family: Arial, sans-serif;
        color: #000000;
        
    }
.features_area .feature_item {
    text-align: center; /* Centra el contenido */
    margin-bottom: 40px; /* Espacio inferior entre elementos */
    padding: 20px; /* Espaciado interno */
    background-color: rgba(255, 255, 255, 0.3); /* Color de fondo de cada item */
    border-radius: 10px; /* Borde redondeado */
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* Sombra suave */
    margin-top: 500px;
}

.features_area .feature_item img {
    width: 80px; /* Tamaño de la imagen */
    margin-bottom: 20px; /* Espacio inferior */
}

.features_area .feature_item h4 {
    font-size: 24px; /* Tamaño de la fuente del título */
    margin-bottom: 10px; /* Espacio inferior */
    color: #000000; /* Color del texto */
}

.features_area .feature_item p {
    font-size: 16px; /* Tamaño de la fuente del párrafo */
    color: #000000; /* Color del texto */
    line-height: 1.6; /* Altura de línea */
}

</style>
</head>
<body>
<header>
    <img src="Image/logoScrip-removebg-preview.png" alt="Logo de tu página" class="logo">
    <h1>ScriptMaster</h1>
    <nav>
    <a href="http://localhost/ScriptMaster.php" class="boton1">Inicio</a>
    <a href="http://localhost/ScriptMaster-Acceder.php" class="boton2">Acceder</a>
</nav>
</header>

<h2>¿QUIENES SOMOS?</h2>
<h3>PROYECTO UNIVERSITARIO</h3>
<h4>"¡Bienvenido a nuestra plataforma de aprendizaje de programación en C++! Somos un grupo de estudiantes universitarios apasionados por la programación en C++. Nos hemos unido para ofrecer cursos de calidad y ayudar a otros estudiantes y aficionados a aprender los fundamentos de este poderoso lenguaje."</h4>
<section class="features_area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="feature_item">
                    <img src="https://cdn-icons-png.flaticon.com/128/190/190411.png" alt="Curso de Calidad">
                    <h8>Curso de Calidad</h8>
                    <p>Ofrecemos contenido educativo de alta calidad para asegurar tu aprendizaje.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature_item">
                    <img src="https://cdn-icons-png.flaticon.com/128/1828/1828884.png" alt="Acceso 24/7">
                    <h8>Acceso 24/7</h8>
                    <p>Accede a nuestros cursos en cualquier momento y desde cualquier lugar.</p>
                </div>
            </div>
        </div>
    </div>
</section>

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
</body>
</html>