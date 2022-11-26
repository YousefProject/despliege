<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NeoNica360</title>
    <LINK REL=StyleSheet HREF="tema.css" TYPE="text/css" MEDIA=screen>

    <!--Llamada a los archivos css-->
    @vite('resources/css/navbar.css')
    @vite('resources/css/login.css')
    @vite('resources/css/footer.css')
    @vite('resources/css/index.css')
    @vite('resources/css/mapa.css')
    @vite('resources/css/contacto.css')
    @vite('resources/css/about.css')
    @vite('resources/css/galeria.css')

    <!--Llamada a los archivos js-->
    @vite('resources/js/login.js')
    @vite('resources/js/index.js')
    @vite('resources/js/mapa.js')
    @vite('resources/js/about.js')
    @vite('resources/js/navbar.js')

</head>

<body>
    <header>
        <nav class="navbar">
            <span class="navbar-toggle" id="js-navbar-toggle">
                    <i class="fas fa-bars"></i>
                </span>
            <a href="/home" class="logo" >logo</a>
            <ul class="main-nav" id="js-menu">
              <li>
                <a href="/home" class="nav-links">Inicio</a>
              </li>
            <li>
              <a href="/mapa" class="nav-links">Mapa</a>
            </li>
              <li>
                <a href="/galeria" class="nav-links">lugares</a>
              </li>
              <li>
                <a href="/nosotros" class="nav-links">Acerca de nosotros</a>
              </li>
              <li>
                <a href="/contacto" class="nav-links">Contactenos</a>
              </li>
              <li>
                <a href="/login" class="nav-links">Login</a>
              </li>
            </ul>
          </nav>
    </header>

    <main>
        @yield('cuerpo')
    </main>

    <footer>

    </footer>
</body>


</html>

