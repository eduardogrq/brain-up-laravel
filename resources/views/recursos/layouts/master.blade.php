<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Neucha&family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./../../../css/style.css">

    <title>Inicio</title>
</head>
<body>
<header>
    <div class="max-w">
        <nav class="nav-one">
            <ol>
                <li>
                    <a href="{{route('index')}}">Inicio</a>
                </li>
                <!-- <li>
                    <a href="#">Sobre Nosotros</a>
                </li> -->
                <!-- <li>
                    <a href="#">Libros</a>
                </li> -->
                <!-- <li>
                    <a href="#">Recursos</a>
                </li> -->
            </ol>
        </nav>
        <div class="hamburger">
            <div class="_layer -top"></div>
            <div class="_layer -mid"></div>
            <div class="_layer -bottom"></div>
        </div>
        <nav class="menuppal">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Sobre Nosotros</a></li>
                <!-- <li><a href="#">Libros</a></li>
                <li><a href="#">Recursos</a></li> -->
            </ul>
        </nav>
        <div class="logo">
            <a href="{{route('index')}}">
                <img src="./../../../assets/imgs/logo.png" alt="Logo de Brain Up">
            </a>
        </div>
        <div class="cta">
            <!-- <button>Escanear QR</button> -->
        </div>
    </div>
</header>

<main>

    @yield('content')

</main>

<footer>
    <div class="footer-border">
        <div class="border-left">

        </div>
        <div class="border-middle">

        </div>
        <div class="border-right">

        </div>
    </div>

    <!-- Footer -->
    <div class="max-w">
        <div class="footer-up">
            <div class="brand">
                <div class="logo-footer">
                    <img src="./../../../assets/imgs/logo.png" alt="Logo BrainUp">
                </div>
                <p>Copyright © 2021. Brain Up. Derechos <br> Reservados.</p>
            </div>
            <div class="links">
                <div class="links-left">
                    <h4>Páginas más visitadas</h4>
                    <ol>
                        <li>
                            <a href="{{route('index')}}">Inicio</a>
                        </li>
                        <!-- <li>
                            <a href="#">Libros</a>
                        </li>
                        <li>
                            <a href="#">Recursos</a>
                        </li> -->
                        <li>
                            <a href="#">Escanear QR</a>
                        </li>
                    </ol>
                </div>
                <div class="links-right">
                    <h4>Soporte</h4>
                    <ol>
                        <li>
                            <a href="#">Sobre Nosotros</a>
                        </li>
                        <li>
                            <a href="#">Términos y condiciones</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="footer-down">
            <h4>No te pierdas las <br> últimas noticias</h4>
            <div class="contain-email">
                <input type="email" placeholder="Email">
                <button type="button"><img src="./../../../assets/icons/right.svg" alt="icon righta"></button>
            </div>
        </div>
        <a href="#" class="cta-up">
            <img src="./../../../assets/icons/up.svg" alt="Fecha hacia arriba">
        </a>
        <div class="rrss-footer">
            <a href="#">
                <img src="./../../../assets/icons/facebook.svg" alt="Icono Facebook">
            </a>
            <a href="#">
                <img src="./../../../assets/icons/twitter.svg" alt="Icono Twitter">
            </a>
        </div>
    </div>

</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="./../../../js/script.js"></script>
</body>
</html>
