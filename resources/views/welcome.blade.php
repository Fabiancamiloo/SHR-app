<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hoteles FabiShast</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="icon" href="https://logospng.org/download/laravel/logo-laravel-icon-1024.png" type="image/png">

    <style>

        .texto-blanco {
            background-color: white; /* Color blanco con opacidad */
            padding: 30px; /* Aumenta el espaciado interno */
            border-radius: 40px; /* Bordes redondeados */
            display: inline-block; /* Elemento en línea */
            text-align: center; /* Centra el contenido del div */
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.2); /* Agrega sombra */
        }
        .texto-blanco img {
            width: 100px; /* Tamaño del icono */
            margin-top: 30px; /* Espacio entre el icono y el texto */
        }
        /* Estilos para los botones */
        .login-btn {
            background-color: #1f2937; /* Color de fondo azul */
            color: white; /* Texto en color blanco */     
            padding: 10px 20px; /* Espaciado interno */
            border-radius: 9px; /* Bordes redondeados */
            margin-right: 10px; /* Margen derecho */
            text-decoration: none; /* Sin subrayado */
        }
        .register-btn {
            background-color: #1f2937; /* Color de fondo rojo */
            color: white; /* Texto en color blanco */
            padding: 10px 20px; /* Espaciado interno */
            border-radius: 9px; /* Bordes redondeados */
            text-decoration: none; /* Sin subrayado */
        }
    </style>
</head>
<body class="antialiased">
    <br><br><br><br>
<header class="text-center">
    <div class="container">
        <div class="texto-blanco"> <!-- Envuelve el contenido de texto en un cuadro blanco -->
            <img src="https://logospng.org/download/laravel/logo-laravel-icon-1024.png" alt="cecep.icon">
            <h2>Hoteles FabiShast</h2>
<pre style="text-align: center;">Gestión de base de datos para la empresa Hoteles FabiShast, incluyendo
la adición, eliminación y edición de hoteles en una base de datos que comprende 
las distintas propiedades de cada hotel.
            </pre>
            
            <a href="{{ route('login') }}" class="login-btn">Login</a>
            <a href="{{ route('register') }}" class="register-btn">Register</a>
        </div>
    </div>
</header>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@include('footer')
</body>
</html>
