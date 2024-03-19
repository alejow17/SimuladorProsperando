<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
        body {
            height: 100%;
            background-image: url("images/fondo1.jpg");
            background-size: cover; 
            background-repeat: no-repeat;
            background-position: center center;
            transition: background-image 1s ease-in-out; /* Transición suave del cambio de imagen de fondo */
        }

        body, header, footer {
            margin: 0;
            padding: 0;
            width: 100%;
            box-sizing: border-box;
        }

        .container {
            margin-top: 50px; /* Margen superior */
            margin-bottom: 50px;
        }

        .centrado-vertical {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 80vh;
        }

        

        label {
            font-weight: bold;
        }

        button {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        h2 {
            margin-top: 20px;
            color: #007bff;
        }

        Label {
            font-size: 14px;
            font-weight:600;
        }

        h1 {
            font-size: 25px;
        }

        .navbar {
            height: 100px;
            width: 100%;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }

        footer {
            background-color: #fff; /* Color de fondo del footer */
            color: #000; /* Color del texto */
            padding: 20px; /* Espaciado interno */
            text-align: center; /* Alineación del texto al centro */
        }

        p {
            color: black;
        }

        .contenedor1 {
            padding: 10px; /* Añade un espacio alrededor del contenido principal */

        }

        .movimiento img {
  animation: movimientoLogo 2s infinite; /* La animación dura 2 segundos y se repite infinitamente */
}


@keyframes movimientoLogo {
  0% {
    transform: translateX(0);
  }
  50% {
    transform: translateX(20px);
  }
  100% {
    transform: translateX(0);
  }
}

        @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
<body>
<header class="navbar navbar-light bg-light">
    <!-- Logo a la izquierda -->
    <a class="navbar-brand movimiento" href="#">
        <img style="width:300px" src="{{ asset('images/logo.png') }}" alt="Logo">
    </a>
</header>

<div class="contenedor1 centrado-vertical">
    <div class="col-md-4" class="row justify-content-center">
        <div>
            <div>
                <div>
                    <form wire:submit="save" style="margin:20px; background-color: rgba(255, 255, 255, 0.9)">
                    <h1 style="font-size:24px" class="text-center">¡Únete a nosotros hoy mismo!</h1>
                    <p style="font-size:14px" class="text-center">Ingresa tus datos y déjanos ser parte de tu historia de éxito.</p>
                    <hr class="my-4">
                        <div class="form-group">
                            <label for="nombre" >Nombre completo</label>
                            <input wire:model="nombre" type="text" id="nombre" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Correo Electrónico</label>
                            <input wire:model="email" type="email" id="email" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input wire:model="telefono" type="tel" id="telefono" class="form-control" maxlength="10" required>
                        </div>
                        <label style="font-weight:400;font-size:12px" class="text-center" for="terminos">
                            <input type="checkbox" id="terminos" required>
                                Acepto términos y condiciones sobre el <a style="color:black;text-decoration: underline" href="https://www.prosperando.co/seguridad-datos-personales/">tratamiento y protección de datos personales</a>.
                        </label><br><br>
                        <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
        <div>
            <p>© Todos los derechos reservados Prosperando 2024 <br><b style="font-weight:400;font-size:12px">Desarrollado por Alejandro Buritica</b></p>
        </div>
</footer>

</body>
<!-- Enlace al archivo JS de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Scripts JavaScript -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var fondo = 1;
        var fondos = ["fondo1.jpg", "fondo2.jpg", "fondo3.jpg", "fondo4.jpg", "fondo5.jpg", "fondo6.jpg", "fondo7.jpg"]; // Lista de fondos de pantalla
        setInterval(function() {
            document.body.style.backgroundImage = "url('images/" + fondos[fondo] + "')";
            fondo = (fondo + 1) % fondos.length; // Cambiar al siguiente fondo de pantalla
        }, 4000); // Cambiar cada 4 segundos
    });
</script>
</html>