<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ScriptMaster-Acceder</title>
    <!-- Enlace al CSS de Bootstrap desde CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

        /* Estilos CSS */
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #FFFFFF;
    align-items: flex-start;
    position: relative; /* Asegura que la posición sea relativa para los elementos internos */
    height: 100vh; 
}

body::before {
    content: ""; 
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('https://images.unsplash.com/photo-1607799279861-4dd421887fb3?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') center/cover no-repeat; /* Utiliza shorthand para background */
    z-index: -1;
    opacity: 0.90; /* Ajusta la opacidad de la imagen de fondo */
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
            margin-right: 20px; /* Agrega un margen a la derecha del logo */
        }
        nav {
    text-align: center; /* Centra los botones horizontalmente */
    margin-top: 5px; /* Agrega espacio arriba del nav */
    position: center; 
    width: 100%;
    bottom:  0;
    
}



        h2, h3, h4 {
            position: absolute; /* Establece la posición absoluta */
            color: #fff; /* Color de texto blanco */
        }
        h1 {
            flex-grow: 1; /* Hace que el texto ocupe todo el espacio restante */
            margin: 0; /* Elimina cualquier margen predeterminado */
            font-family: "Roboto", Georgia; /* Georgia, Trebuchet MS,Lucida Sans Unicode */
            font-size: 50px; /*  esto es para el tamaño de la fuente del titulo */
            
        }
        h2 {
            position: absolute; /* Establece la posición absoluta */
            top: 270px; /* Distancia desde la parte superior */
            left: 50%; /* Centra horizontalmente */
            transform: translateX(-50%); /* Ajusta para centrar */
            font-size: 38px; /* Tamaño de la fuente */
            font-family: Arial, sans-serif;
            background-color: rgba(0, 0, 0, 0.6); /* Fondo negro con 50% de opacidad */
            padding: 10px; /* Agrega un poco de espacio alrededor del texto */
            color: #fff; /* Color del texto */
            
        }


        h3 {
            position: absolute; /* Establece la posición absoluta */
            top: 100px; /* Distancia desde la parte superior */
            left: 50%; /* Centra horizontalmente */
            transform: translateX(-50%); /* Ajusta para centrar */
            font-size: 38px; /* Tamaño de la fuente */
            font-family: Arial, sans-serif;
            background-color: rgba(0, 0, 0, 0.5); /* Fondo negro con 50% de opacidad */
            padding: 10px; /* Agrega un poco de espacio alrededor del texto */
            color: #fff; /* Color del texto */
            
        }
       /* ESTO ES PARA LOS BOTONES DE ACCEDER, INICIO ETC */
       .boton1 {
    background-color: #924E7D;
    border: none;
    color: white;
    padding: 12px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 23px;
    margin: 20px auto 20px 410px;
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

        /* ESTO ES PARA EL BOTON INICIAR SECION */
 /* Estilos para el formulario de inicio de sesión */
.login-form {
    width: 90%;
    margin: auto;
}

/* Estilos para el campo de nombre de usuario */
.login-input {
    width: 20%;
    margin-bottom: 10px;
    padding: 12px;
    font-size: 23px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    position: absolute; /* Establece posicionamiento absoluto */
    top: 400px; /* Cambia la posición desde la parte superior */
    left: 50%; /* Centra horizontalmente */
    transform: translateX(-50%); /* Ajusta para centrar */
}

/* Estilos para el campo de contraseña */
.password-input {
    width: 17.8%;  /* para el largo */
    margin-bottom: 10px;
    padding: 12px;
    font-size: 23px;
    
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    position: absolute; /* Establece posicionamiento absoluto */
    top: 500px; /* Cambia la posición desde la parte superior */
    left: 48.7%; /* Centra horizontalmente */
    transform: translateX(-50%); /* Ajusta para centrar */
}

/* Estilos para el botón de inicio de sesión */
.login-button {
    width: 230px;
    padding: 14px;
    font-size: 20px;
    position: absolute;
    top: 760px;
    left: calc(60% - 115px);
    border: none;
    border-radius: 15px;
    background-color: #4CAF50;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s;
   
}

/* Estilos para el botón de inicio de sesión al pasar el cursor sobre él */
.login-button:hover {
    color: #572364;
}


button:hover {
            color: #572364; /* Cambia el color del texto al pasar el cursor por encima */
        }



        .overlay-registrar{
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8); /* Fondo oscuro semi-transparente */
            display: none; /* Oculto por defecto */
            justify-content: center;
            align-items: center;
            z-index: 9999; /* Asegura que esté en la parte superior */
            
        }
/* ESTE ES PARA EL CUADRO */
.dialog{
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 10000; /* Asegura que esté sobre el overlay */
            width: 20%;   /* ANCHO DEL CUADRTO DE REGISTRO*/
            height: 60%; /* LARGO DEL CUADRO DE REGISTRO */
            font-family: 'Poppins', sans-serif;
        }

        .register-input,
        .register-button {
    display: block;
    margin-bottom: 20px;
    width: 90%; /* Hace que los campos de entrada y los botones ocupen todo el ancho disponible */
    padding: 15px; /* Ajusta el relleno para dar más espacio alrededor del texto */
    font-size: 15px; /* Ajusta el tamaño de la fuente para hacerla más grande */
    text-align: center;
    font-family: 'Poppins', sans-serif;
}

/* ESTE ES DEL REGISTRARSE */

.button {
    width: 230px;
    padding: 14px;
    font-size: 20px;
    position: absolute;
    top: 760px;
    left: calc(42% - 115px);
    border: none;
    border-radius: 15px;
    background-color: #4CAF50;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s;
    font-family: 'Poppins', sans-serif;
}

footer {
    background: linear-gradient(to right, #51002B, #041B2D);
    color: #fff;
    padding: 10px;
    width: 99%;
    position: fixed;
    bottom: 0;
    border-radius: 15px;
    display: flex; /* Utiliza Flexbox para alinear los elementos */
    justify-content: center; /* Centra el contenido horizontalmente */
    align-items: center; /* Alinea verticalmente los elementos */
}

.redes-sociales {
    display: flex; /* Flexbox para la disposición interna */
    justify-content: center; /* Centra los iconos y el texto horizontalmente */
    align-items: center; /* Alinea los iconos y el texto verticalmente */
    gap: 25px; /* Añade espacio entre los iconos y el texto */
}

.redes-sociales a {
    margin: 0 10px; /* Espaciado entre los iconos */
}

.redes-sociales img {
    width: 30px; /* Tamaño de los iconos de redes sociales */
}

.redes-sociales h7 {
    margin-left: 20px; /* Espaciado entre los iconos y el texto */
    font-size: 16px; /* Ajusta el tamaño de fuente si es necesario */
}

.boton-ver {
    
    display: inline-block;
    width: 51px;
    height: 53px;
    background-color: #FFFFFF;
    background-image: url('https://cdn-icons-png.flaticon.com/128/9867/9867833.png');
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    cursor: pointer;
    text-indent: -9999px;
    position: absolute;
    top: 51.5%;  /* pocisionameinto de largo */
    left: 58.8%;  /* pocisionameinto de ancho */
    transform: translate(-50%, -50%);
    border-radius: 5px;
}

/* Estilo del botón */
.boton-olvido {
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 21px;
    transition: background-color 0.3s, color 0.3s;
    border: none;
    cursor: pointer;
    margin: 450px 0 0 946px; /* Margen superior 350px, margen izquierdo 946px */
    background-color: rgba(0, 0, 0, 0.8); /* Fondo negro con 50% de opacidad */
}


.boton-olvido:hover {
    background-color: #5a6268; /* Color de fondo al pasar el ratón */
}

/* Estilo para la superposición del modal */
.overlay-olvido {
    position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9); /* Fondo oscuro semi-transparente */
            display: none; /* Oculto por defecto */
            justify-content: center;
            align-items: center;
            z-index: 9999; /* Asegura que esté en la parte superior */
}

/* Estilo para el cuadro de diálogo */
.contradialog {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    z-index: 10000; /* Asegura que esté sobre el overlay */
    text-align: center; /* Centrar texto */
    width: 22%;   /* Ancho del cuadro de registro */
    height: 32%;  /* Largo del cuadro de registro */
    transform: translateY(-120px); /* Subir el cuadro 50px hacia arriba */
}


/* Estilo para los campos de entrada y el botón */
.recuperar-button2,
.recuperar-button {
    display: block;
    margin-bottom: 20px;
    width: 90%; /* Hace que los campos de entrada y los botones ocupen todo el ancho disponible */
    padding: 15px; /* Ajusta el relleno para dar más espacio alrededor del texto */
    font-size: 15px; /* Ajusta el tamaño de la fuente para hacerla más grande */
    text-align: center;
}

/* Estilo para el botón de cierre */
.cerrar {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.cerrar:hover,
.cerrar:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

h5 {
    position: absolute; /* Establece la posición absoluta */
    top: -100px; /* Reduce la distancia desde la parte superior */
    left: 50%; /* Centra horizontalmente */
    transform: translateX(-50%); /* Ajusta para centrar */
    font-size: 38px; /* Tamaño de la fuente */
    font-family: Arial, sans-serif;
    background-color: rgba(0, 0, 0, 0.6); /* Fondo negro con 50% de opacidad */
    padding: 10px; /* Agrega un poco de espacio alrededor del texto */
    color: #fff; /* Color del texto */
    white-space: nowrap; /* Evita que el texto se divida en varias líneas */
}

.user-info-container {
    background-color: rgba(255, 255, 255, 0.5);
    border-radius: 10px;
    padding: 230px; /* Aumenta el padding si deseas más espacio interno */
    margin: -390px auto 10px; /* Ajusta el margen superior, inferior y centraliza horizontalmente */
    max-width: 700px; /* Ajusta el ancho máximo del contenedor */
    font-family: 'Poppins', sans-serif;
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
 
    
    
    <h2>Ingresa o crea una cuenta:</h2> 
    <a href="#" class="boton-olvido" id="forgot-password-link">Olvidaste tu contraseña?</a>
    
    <a href="#" class="boton-ver" id="password-ver"></a>

    <!--<button id="forgot-password-button" class="boton-olvido" type="button">Olvidaste tu contraseña?</button>-->
    <!-- para ver la contraseña -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const passwordInput = document.getElementById('Contra');
        const showPasswordButton = document.getElementById('password-ver');

        showPasswordButton.addEventListener('click', function() {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                showPasswordButton.textContent = 'Ocultar';
            } else {
                passwordInput.type = 'password';
                showPasswordButton.textContent = 'Mostrar';
            }
        });
    });
</script>
<!-- termino ver contraseña -->
 
<!-- Overlay y Cuadro de diálogo  para recuperar contraseña-->
<div class="overlay-olvido" id="forgot-password-overlay">
    <div class="contradialog" id="contradialog">
        <h5>Recuperar Contraseña</h5>
        <form id="verifyForm" action="verify_credentials.php" method="post">
            <input type="email" id="email" name="email" class="register-input" placeholder="Correo Electrónico" required>
            <!-- Eliminamos el campo de Contraseña Actual -->
            <button type="submit" id="verifyButton" class="recuperar-button">Enviar Correo de Verificación</button>
        </form>
    </div>
</div>

<div class="overlay-olvido" id="new-password-overlay" style="display: none;">
    <div class="contradialog" id="ncontradialog">
        <h5>Establecer Nueva Contraseña</h5>
        <form id="newPasswordForm" action="set_new_password.php" method="post">
            <input type="hidden" id="email-hidden" name="email">
            <input type="password" id="new-password" name="new-password" class="register-input" placeholder="Nueva Contraseña (5 caracteres, 1 mayúscula mínimo)" required>
            <input type="password" id="confirm-password" name="confirm-password" class="register-input" placeholder="Confirmar Contraseña" required>
            <button type="submit" id="setPasswordButton" class="recuperar-button2">Establecer Contraseña</button>
        </form>
    </div>
</div>



<script>
    // Función para validar la contraseña
    function validatePassword(password) {
        const minLength = 5;
        const hasUpperCase = /[A-Z]/.test(password);

        if (password.length >= minLength && hasUpperCase) {
            return true;
        } else {
            alert("La contraseña debe tener al menos 5 caracteres y contener al menos una letra mayúscula.");
            return false;
        }
    }

    // Mostrar el cuadro de diálogo para recuperar contraseña al hacer clic en el enlace correspondiente
    document.getElementById('forgot-password-link').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('forgot-password-overlay').style.display = 'flex';
    });

    // Agregar event listeners para los formularios de verificación de credenciales y establecimiento de nueva contraseña
    document.getElementById('verifyForm').addEventListener('submit', function(event) {
        event.preventDefault();
        var formData = new FormData(document.getElementById('verifyForm'));

        fetch('verify_credentials.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            if (data === 'success') {
                document.getElementById('overlay').style.display = 'none';
                document.getElementById('new-password-overlay').style.display = 'flex';
                document.getElementById('forgot-password-overlay').style.display = 'none'; // Ocultar el cuadro de "Verificar Credenciales"
            } else {
                alert(data);
            }
        })
        .catch(error => console.error('Error:', error));
    });

    document.getElementById('newPasswordForm').addEventListener('submit', function(event) {
        event.preventDefault();
        var newPassword = document.getElementById('new-password').value;

        // Validar la contraseña
        if (validatePassword(newPassword)) {
            var formData = new FormData(document.getElementById('newPasswordForm'));
            formData.append('email', document.getElementById('email-hidden').value);

            fetch('update_password.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                alert(data);
                document.getElementById('new-password-overlay').style.display = 'none';
            })
            .catch(error => console.error('Error:', error));
        }
    });

    // Ocultar el cuadro de diálogo al hacer clic fuera de él
    document.querySelectorAll('.overlay-olvido').forEach(function(overlay) {
        overlay.addEventListener('click', function(event) {
            if (event.target === overlay) {
                overlay.style.display = 'none';
            }
        });
    });


// EL LOGIN
</script>
<div class="user-info-container">
    <form id="loginForm" class="login-form" action="ScriptMaster-Ingreso.php" method="post">
    <input type="text" id="usercorreo" name="usercorreo" class="login-input" placeholder="Correo electrónico" required>
    <input type="password" id="Contra" name="Contra" class="password-input" placeholder="Contraseña" required>
    <button type="button" id="loginButton" class="login-button">Iniciar Sesión</button>
</form>
</div>
<script>
    document.getElementById('loginButton').addEventListener('click', function() {
        var usercorreo = document.getElementById('usercorreo').value;
        var password = document.getElementById('Contra').value;

        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'ScriptMaster-Ingreso.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = xhr.responseText;
                if (response === 'usuario_no_encontrado') {
                    alert('Correo electrónico incorrecto. Por favor, inténtalo de nuevo.');
                } else if (response.startsWith('contraseña_incorrecta')) {
                    alert('La contraseña proporcionada no es válida. Por favor, inténtalo de nuevo.\n' + response);
                } else if (response === 'success') {
                    window.location.href = 'http://localhost/ScriptMaster-Cursos.php';  // entra a la pagina de cursos
                } else {
                    alert('Ha ocurrido un error. Por favor, inténtalo de nuevo.');
                }
            }
        };
        xhr.send('usercorreo=' + encodeURIComponent(usercorreo) + '&Contra=' + encodeURIComponent(password));
    });
</script>


  
 <!-- termino del LOGINNNNN -->
</form>
<button id="registerButton" class="button" type="button">Registrarse</button>



    <!-- Cuadro de diálogo -->
    <div class="overlay-registrar" id="overlay">
        <div class="dialog" id="dialog">
            <h3>Completa tu registro</h3>
            <form id="registerForm">
    <!-- Campos adicionales para el registro -->
    <input type="text" id="nombres" class="register-input" placeholder="Nombres" required>
    <input type="text" id="apellidoPaterno" class="register-input" placeholder="Apellido Paterno" required>
    <input type="text" id="apellidoMaterno" class="register-input" placeholder="Apellido Materno" required>
    <input type="password" id="Contraseña" class="register-input" placeholder="Contraseña (5 caracteres 1 mayuscula, minimo)" required>
    <input type="password" id="confirmPassword" class="register-input" placeholder="Confirmar Contraseña" required>
    <input type="email" id="email" class="register-input" placeholder="Correo Electrónico" required>
    <button type="submit" id="registerButton" class="register-button">Registrarse</button>

</form>

        </div>
    </div>

    <script>
        // Obtener referencias a los elementos del DOM
        const registerButton = document.getElementById('registerButton');
        const overlay = document.getElementById('overlay');

        // Mostrar el cuadro de diálogo al hacer clic en "Registrarse"
        registerButton.addEventListener('click', function() {
            overlay.style.display = 'flex'; // Mostrar overlay
        });

        // Ocultar el cuadro de diálogo al hacer clic fuera de él
        overlay.addEventListener('click', function(event) {
            if (event.target === overlay) {
                overlay.style.display = 'none'; // Ocultar overlay
            }
        });

        function convertToUpperCase(input) {
        input.value = input.value.toUpperCase();
    }

    // Agregar eventos de entrada a los campos de texto para convertir a mayúsculas en tiempo real
    document.getElementById('nombres').addEventListener('input', function() {
        convertToUpperCase(this);
    });

    document.getElementById('apellidoPaterno').addEventListener('input', function() {
        convertToUpperCase(this);
    });

    document.getElementById('apellidoMaterno').addEventListener('input', function() {
        convertToUpperCase(this);
    });

    function validatePassword(password) {
    const minLength = 5;
    const hasUpperCase = /[A-Z]/.test(password);

    if (password.length >= minLength && hasUpperCase) {
        return true;
    } else {
        alert("La contraseña debe tener al menos 5 caracteres y contener al menos una letra mayúscula.");
        return false;
    }
}
 // Verificar que las contraseñas coincidan
 function passwordsMatch(password, confirmPassword) {
        if (password === confirmPassword) {
            return true;
        } else {
            alert("Las contraseñas no coinciden.");
            return false;
        }
    }
    </script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Cuando se envíe el formulario
    $("#registerForm").submit(function(event) {
        // Evitar que se envíe el formulario de manera predeterminada
        event.preventDefault();

        // Obtener los valores de los campos del formulario
        // Obtener los valores de los campos del formulario y convertirlos a mayúsculas con toUpperCase
        var nombres = $("#nombres").val().toUpperCase();
        var apellidoPaterno = $("#apellidoPaterno").val().toUpperCase();
        var apellidoMaterno = $("#apellidoMaterno").val().toUpperCase();
        var contraseña = $("#Contraseña").val();
        var confirmPassword = $("#confirmPassword").val();
        var email = $("#email").val();

        if (!validatePassword(contraseña)) {
                return;
            }


            if (!passwordsMatch(contraseña, confirmPassword)) {
                return;
            }

        // Enviar los datos al script PHP para guardar en la base de datos
        $.ajax({
            type: "POST",
            url: "guardar_registro.php",
            data: {
                nombres: nombres,
                apellidoPaterno: apellidoPaterno,
                apellidoMaterno: apellidoMaterno,
                contraseña: contraseña,
                confirmPassword: confirmPassword, // Asegúrate de incluir confirmPassword en los datos
                email: email
            },
            success: function(response) {
                // Manejar la respuesta del servidor
                alert(response); // Esto mostrará el mensaje que imprima el script PHP
            },
            error: function(xhr, status, error) {
                // Manejar errores
                alert("Error al procesar la solicitud: " + error);
            }
        });
    });
});
</script>





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
