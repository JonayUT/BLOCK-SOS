<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
    <img alt="Block SOS Logo" src="https://storage.googleapis.com/a1aa/image/Y4TXGagmZJK8PBuBpMvfccBnO0I62MeIuby42A0upid9E2pTA.jpg" height=25px />
    <nav>
        <a href="{{ route('perfilusuarios') }}">Perfil</a>
        <a href="{{ route('home') }}">Inicio</a>
        <a href="{{ route('listacategorias') }}">Categorias</a>
        <a href="{{ route('donacionesuser') }}">Mis Donaciones</a>
        <a class="btn" href="{{ route('login') }}">Salir</a>
        
    </nav>
    
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <div class="contact-info">
            <p>Universidad Tecnológica de Nayarit</p>
            <p>+52 664 123 4567</p>
            <p>correo@ejemplo.com</p>
        </div>
        <div>
            <p>Política de privacidad</p>
            <p>Términos de servicio</p>
        </div>
    </footer>
</body>
</html>
