<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <!-- Enlace al archivo CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Estilos adicionales */
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

    .centrado-vertical {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 80vh;
        }
        .navbar{
            height:100px;
            width:100%;
        }
        footer {
            background-color: #fff; /* Color de fondo del footer */
            color: #000; /* Color del texto */
            padding: 20px; /* Espaciado interno */
            text-align: center; /* Alineación del texto al centro */
        }

.container {
            margin-top: 50px; /* Margen superior */
            margin-bottom: 50px;
        }
        

p{
    color:black;
}

.circular-image {
    border-radius: 50%;
    overflow: hidden;
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



    </style>
</head>
<body>
<header class="navbar navbar-light bg-light">
    <!-- Logo a la izquierda -->
    <a class="navbar-brand movimiento" href="#">
        <img style="width:300px" src="{{ asset('images/logo.png') }}" alt="Logo">
    </a>
</header>
<main class="contenedor1 container-fluid centrado-vertical">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div style="margin:20px; background-color: rgba(255, 255, 255, 0.9); position: relative;" class="jumbotron text-center">
                <h1 class="display-6">Bienvenido a nuestro simulador</h1>
                <p class="lead">Simula tu Ahorro Programado</p>
                <hr class="my-4">
                <p>Descubre cuánto podrías ahorrar con nosotros!</p>
                <a class="btn btn-lg btn-primary" href="{{route('form')}}">Siguiente</a>
            </div>
        </div>
    </div>
</main>



<footer>
    <div>
        <p>© Todos los derechos reservados Prosperando 2024</p>
    </div>
</footer>

    
    
    <!-- Enlace al archivo JS de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
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
