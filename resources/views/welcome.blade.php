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
    <link rel="stylesheet" href="./css/style.css">

    <title>Inicio</title>
</head>
<body>
<header>
    <div class="max-w">
        <nav class="nav-one">
            <ol>
                <li>
                    <a href="index.html">Inicio</a>
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
            <a href="./index.html">
                <img src="./assets/imgs/logo.png" alt="Logo de Brain Up">
            </a>
        </div>
        <div class="cta">
            <!-- <button>Escanear QR</button> -->
        </div>
    </div>
</header>

<main>
    <div class="container-main">
        <div class="max-w">

            <!-- Grados ********************** -->

            <div class="school-grades">
                <div class="title">
                    <h2>Grado</h2>
                </div>
                <form action="">
                    <div class="container-cards">
                        <div class="card" id="first">
                            <input type="radio" id="respuesta-1" name="respuesta-1" >
                            <label for="respuesta-1" id="respuesta-1" class="label-pregunta-test">
                                <div class="-n">
                                    <img src="./assets/imgs/One.png" alt="Número 1">
                                </div>
                                <div id="first-text-degree" class="text">
                                    <h4>1er Grado</h4>
                                    <p>21 libros</p>
                                </div>
                            </label>
                        </div>
                        <div class="card" id="second">
                            <input type="radio" id="respuesta-2" name="respuesta-1">
                            <label for="respuesta-2" id="respuesta-2" class="label-pregunta-test">
                                <div class="-n">
                                    <img src="./assets/imgs/two.png" alt="Número 2">
                                </div>
                                <div class="text">
                                    <h4>2do Grado</h4>
                                    <p>18 libros</p>
                                </div>
                            </label>
                        </div>
                        <div class="card" id="third">
                            <input type="radio" id="respuesta-3" name="respuesta-1">
                            <label for="respuesta-3" class="label-pregunta-test">
                                <div class="-n">
                                    <img src="./assets/imgs/three.png" alt="Número 3">
                                </div>
                                <div class="text">
                                    <h4>3er Grado</h4>
                                    <p>18 libros</p>
                                </div>
                            </label>
                        </div>

                    </div>
                </form>
            </div>

            <!-- Materias *********************************************************************-->


            <!-- Primer grado -->
            <div class="school-material" id="primer-grado">
                <div class="title">
                    <h2>Materias</h2>
                </div>
                <!-- <form action=""> -->
                <div class="container-cards">

                    <div class="card" id="biologia-materia">
                        <input type="radio" id="primero-biologia" name="respuesta-2">
                        <label for="primero-biologia" class="label-pregunta-test">
                            <div class="-n">
                                <img src="./assets/imgs/science.png" alt="Icono de Física">
                            </div>
                            <div class="text">
                                <h4>Biología</h4>
                                <p>4 libros</p>
                            </div>
                        </label>

                    </div>

                    <div class="card" id="espanol-materia">
                        <input type="radio" id="primero-espanol" name="respuesta-2">
                        <label for="primero-espanol" class="label-pregunta-test">
                            <div class="-n">
                                <img src="./assets/imgs/language.png" alt="Icono de Matemáticas">
                            </div>
                            <div class="text">
                                <h4>Español</h4>
                                <p>3 libros</p>
                            </div>
                        </label>
                    </div>

                    <div class="card" id="fce-materia">
                        <input type="radio" id="primero-fce" name="respuesta-2">
                        <label for="primero-fce" class="label-pregunta-test">
                            <div class="-n">
                                <img src="./assets/imgs/chemistry.png" alt="Icono de Química">
                            </div>
                            <div class="text">
                                <h4>FCE</h4>
                                <p>4 libros</p>
                            </div>
                        </label>
                    </div>


                    <div class="card" id="geografia-materia">
                        <input type="radio" id="primero-geografia" name="respuesta-2">
                        <label for="primero-geografia" class="label-pregunta-test">
                            <div class="-n">
                                <img src="./assets/imgs/art.png" alt="Icono de Matemáticas">
                            </div>
                            <div class="text">
                                <h4>Geografía</h4>
                                <p>2 libros</p>
                            </div>
                        </label>
                    </div>

                    <div class="card" id="historia-materia">
                        <input type="radio" id="primero-historia" name="respuesta-2">
                        <label for="primero-historia" class="label-pregunta-test">
                            <div class="-n">
                                <img src="./assets/imgs/art.png" alt="Icono de Matemáticas">
                            </div>
                            <div class="text">
                                <h4>Historia</h4>
                                <p>2 libros</p>
                            </div>
                        </label>
                    </div>

                    <div class="card" id="ingles-materia">
                        <input type="radio" id="primero-ingles" name="respuesta-2">
                        <label for="primero-ingles" class="label-pregunta-test">
                            <div class="-n">
                                <img src="./assets/imgs/art.png" alt="Icono de Matemáticas">
                            </div>
                            <div class="text">
                                <h4>Inglés</h4>
                                <p>1 libro</p>
                            </div>
                        </label>
                    </div>

                    <div class="card" id="matematicas-materia">
                        <input type="radio" id="primero-matematicas" name="respuesta-2">
                        <label for="primero-matematicas" class="label-pregunta-test">
                            <div class="-n">
                                <img src="./assets/imgs/mathematics.png" alt="Icono de Matemáticas">
                            </div>
                            <div class="text">
                                <h4>Matemáticas</h4>
                                <p>5 libros</p>
                            </div>
                        </label>
                    </div>

                </div>
                <!-- </form> -->
            </div>

            <!-- Segundo grado -->
            <div class="school-material d-none" id="segundo-grado">
                <div class="title">
                    <h2>Materias</h2>
                </div>
                <!-- <form action=""> -->
                <div class="container-cards">
                    <div class="card" id="segundo-espanol-materia">
                        <input type="radio" id="segundo-espanol" name="respuesta-2">
                        <label for="segundo-espanol" class="label-pregunta-test">
                            <div class="-n">
                                <img src="./assets/imgs/science.png" alt="Icono de Física">
                            </div>
                            <div class="text">
                                <h4>Español</h4>
                                <p>3 libros</p>
                            </div>
                        </label>
                    </div>
                    <div class="card" id="segundo-fce-materia">
                        <input type="radio" id="segundo-fce" name="respuesta-2">
                        <label for="segundo-fce" class="label-pregunta-test">
                            <div class="-n">
                                <img src="./assets/imgs/chemistry.png" alt="Icono de Química">
                            </div>
                            <div class="text">
                                <h4>FCE</h4>
                                <p>4 libros</p>
                            </div>
                        </label>
                    </div>
                    <div class="card" id="segundo-fisica-materia">
                        <input type="radio" id="segundo-fisica" name="respuesta-2">
                        <label for="segundo-fisica" class="label-pregunta-test">
                            <div class="-n">
                                <img src="./assets/imgs/chemistry.png" alt="Icono de Química">
                            </div>
                            <div class="text">
                                <h4>Física</h4>
                                <p>3 libros</p>
                            </div>
                        </label>
                    </div>
                    <div class="card" id="segundo-historia-materia">
                        <input type="radio" id="segundo-historia" name="respuesta-2">
                        <label for="segundo-historia" class="label-pregunta-test">
                            <div class="-n">
                                <img src="./assets/imgs/mathematics.png" alt="Icono de Matemáticas">
                            </div>
                            <div class="text">
                                <h4>Historia</h4>
                                <p>2 libros</p>
                            </div>
                        </label>
                    </div>
                    <div class="card" id="segundo-ingles-materia">
                        <input type="radio" id="segundo-ingles" name="respuesta-2">
                        <label for="segundo-ingles" class="label-pregunta-test">
                            <div class="-n">
                                <img src="./assets/imgs/language.png" alt="Icono de Matemáticas">
                            </div>
                            <div class="text">
                                <h4>Inglés</h4>
                                <p>1 libros</p>
                            </div>
                        </label>
                    </div>
                    <div class="card" id="segundo-matematicas-materia">
                        <input type="radio" id="segundo-matematicas" name="respuesta-2">
                        <label for="segundo-matematicas" class="label-pregunta-test">
                            <div class="-n">
                                <img src="./assets/imgs/art.png" alt="Icono de Matemáticas">
                            </div>
                            <div class="text">
                                <h4>Matemáticas</h4>
                                <p>5 libros</p>
                            </div>
                        </label>
                    </div>


                </div>
                <!-- </form> -->
            </div>

            <!-- Tercer grado -->
            <div class="school-material d-none" id="tercer-grado">
                <div class="title">
                    <h2>Materias</h2>
                </div>
                <!-- <form action=""> -->
                <div class="container-cards">

                    <div class="card" id="tercero-espanol-materia">
                        <!-- <div class="d-flex position-absolute align-items-center justify-content-end" style="width: 100%; height: 100%;"><a href="" class="mr-4"><i class="fas fa-download"></i></a> </div> -->
                        <input type="radio" id="tercero-espanol" name="respuesta-2">
                        <label for="tercero-espanol" class="label-pregunta-test">
                            <div class="-n">
                                <img src="./assets/imgs/science.png" alt="Icono de Física">
                            </div>
                            <div class="text">
                                <h4>Español</h4>
                                <p>3 libros</p>
                            </div>
                        </label>
                    </div>
                    <div class="card" id="tercero-fce-materia">
                        <input type="radio" id="tercero-fce" name="respuesta-2">
                        <label for="tercero-fce" class="label-pregunta-test">
                            <div class="-n">
                                <img src="./assets/imgs/chemistry.png" alt="Icono de Química">
                            </div>
                            <div class="text">
                                <h4>FCE</h4>
                                <p>4 libros</p>
                            </div>
                        </label>
                    </div>
                    <div class="card" id="tercero-historia-materia">
                        <input type="radio" id="tercero-historia" name="respuesta-2">
                        <label for="tercero-historia" class="label-pregunta-test">
                            <div class="-n">
                                <img src="./assets/imgs/mathematics.png" alt="Icono de Matemáticas">
                            </div>
                            <div class="text">
                                <h4>Historia</h4>
                                <p>2 libros</p>
                            </div>
                        </label>
                    </div>
                    <div class="card" id="tercero-ingles-materia">
                        <input type="radio" id="tercero-ingles" name="respuesta-2">
                        <label for="tercero-ingles" class="label-pregunta-test">
                            <div class="-n">
                                <img src="./assets/imgs/language.png" alt="Icono de Matemáticas">
                            </div>
                            <div class="text">
                                <h4>Inglés</h4>
                                <p>1 libros</p>
                            </div>
                        </label>
                    </div>
                    <div class="card" id="tercero-matematicas-materia">
                        <input type="radio" id="tercero-matematicas" name="respuesta-2">
                        <label for="tercero-matematicas" class="label-pregunta-test">
                            <div class="-n">
                                <img src="./assets/imgs/computer.png" alt="Icono de Matemáticas">
                            </div>
                            <div class="text">
                                <h4>Matemáticas</h4>
                                <p>5 libros</p>
                            </div>
                        </label>
                    </div>

                    <div class="card" id="tercero-quimica-materia">
                        <input type="radio" id="tercero-quimica" name="respuesta-2">
                        <label for="tercero-quimica" class="label-pregunta-test">
                            <div class="-n">
                                <img src="./assets/imgs/science.png" alt="Icono de Física">
                            </div>
                            <div class="text">
                                <h4>Química</h4>
                                <p>3 libros</p>
                            </div>
                        </label>
                    </div>

                </div>
                <!-- </form> -->
            </div>


            <!-- Recursos *********************************************************************-->


            <!-- Primer Grado *****************+ -->


            <!-- Recursos de Biologia -->
            <div class="school-resources" id="biologia-recursos">
                <div class="title ml-5">
                    <h2>Recursos Biologia</h2>
                </div>
                <div class="contain-books">
                    <a target="_blank" href="./assets/pdf/primero/biologia/Recursos de Biología/1-Cuaderno de prácticas de biología.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/primero/biologia/Recursos de Biología/Cuaderno de prácticas de biología Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Cuaderno de <br>prácticas de <br>biología</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/primero/biologia/Recursos de Biología/2-Cuaderno de Prácticas de Laboratorio de Ciencias I.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/primero/biologia/Recursos de Biología/Cuaderno de Prácticas de Laboratorio de Ciencias I Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Cuaderno de <br>Prácticas de<br>Laboratorio de<br>Ciencias I</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/primero/biologia/Recursos de Biología/3-Leo, comprendo, aprendo I.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/primero/biologia/Recursos de Biología/Leo, comprendo, aprendo I Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Leo, comprendo, <br> aprendo I</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/primero/biologia/Recursos de Biología/4-Leo, comprendo, aprendo II.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/primero/biologia/Recursos de Biología/Leo, comprendo, aprendo II Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Leo, comprendo, <br> aprendo II</h4>
                        </div>
                    </a>
                </div>

            </div>

            <!-- Recursos de español -->
            <div class="school-resources d-none" id="espanol-recursos">
                <div class="title">
                    <h2>Recursos Español</h2>
                </div>
                <div class="contain-books">
                    <a target="_blank" href="./assets/pdf/primero/espanol/Recursos Español/Leo, comprendo, aprendo I.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/primero/espanol/Recursos Español/Leo, comprendo, aprendo I Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Leo, comprendo,<br>aprendo I </h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/primero/espanol/Recursos Español/Leo, comprendo, aprendo II.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/primero/espanol/Recursos Español/Leo, comprendo, aprendo II Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Leo, comprendo,<br>aprendo II</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/primero/espanol/Recursos Español/Mi Libro de Lecturas Nuevo León.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/primero/espanol/Recursos Español/Mi Libro de Lecturas Nuevo León Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Mi Libro de <br> Lecturas <br> Nuevo León</h4>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Recursos de FCE -->
            <div class="school-resources d-none" id="fce-recursos">
                <div class="title">
                    <h2>Recursos FCE</h2>
                </div>
                <div class="contain-books">
                    <a target="_blank" href="./assets/pdf/primero/FCE/Carpeta FCE/Colección Hablemos en familia_Educación sexual.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/primero/FCE/Carpeta FCE/Colección Hablemos en familia_Educación sexual Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Colección <br> Hablemos <br> en familia <br> Educación <br>sexual</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/primero/FCE/Carpeta FCE/Compendio de Dilemas Morales.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/primero/FCE/Carpeta FCE/Compendio de Dilemas Morales Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Compendio <br> de Dilemas <br> Morales</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/primero/FCE/Carpeta FCE/Leo, comprendo, aprendo I.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/primero/FCE/Carpeta FCE/Leo, comprendo, aprendo I Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Leo, comprendo, <br> aprendo I </h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/primero/FCE/Carpeta FCE/Leo, comprendo, aprendo II.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/primero/FCE/Carpeta FCE/Leo, comprendo, aprendo II Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Leo, comprendo, <br> aprendo II</h4>
                        </div>
                    </a>

                </div>
            </div>

            <!-- Recursos de Geografía -->
            <div class="school-resources d-none" id="geografia-recursos">
                <div class="title">
                    <h2>Recursos Geografía</h2>
                </div>
                <div class="contain-books">
                    <a target="_blank" href="./assets/pdf/primero/geografia/recursos/Leo, comprendo, aprendo I.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/primero/geografia/recursos/Leo, comprendo, aprendo I Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Leo, comprendo, <br> aprendo I</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/primero/geografia/recursos/Leo, comprendo, aprendo II.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/primero/geografia/recursos/Leo, comprendo, aprendo II Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Leo, comprendo, <br> aprendo II</h4>
                        </div>
                    </a>

                </div>
            </div>

            <!-- Recursos de Historia -->
            <div class="school-resources d-none" id="historia-recursos">
                <div class="title">
                    <h2>Recursos Historia</h2>
                </div>
                <div class="contain-books">
                    <a target="_blank" href="./assets/pdf/primero/Historia/Recursos Historia/Leo, comprendo, aprendo I.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/primero/Historia/Recursos Historia/Leo, comprendo, aprendo I Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Leo, comprendo, <br> aprendo I</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/primero/Historia/Recursos Historia/Leo, comprendo, aprendo II.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/primero/Historia/Recursos Historia/Leo, comprendo, aprendo II Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Leo, comprendo, <br> aprendo II</h4>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Recursos de Inglés -->
            <div class="school-resources d-none" id="ingles-recursos">
                <div class="title">
                    <h2>Recursos Inglés</h2>
                </div>
                <div class="contain-books">
                    <a target="_blank" href="./assets/pdf/primero/ingles/Recursos Inglés/Cuaderno de actividades lúdicas de Inglés.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/primero/ingles/Recursos Inglés/Cuaderno de actividades lúdicas de Inglés Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Cuaderno de <br> actividades <br> lúdicas de <br> Inglés</h4>
                        </div>
                    </a>

                </div>
            </div>

            <!-- Recursos de Matemáticas -->
            <div class="school-resources d-none" id="matematicas-recursos">
                <div class="title">
                    <h2>Recursos Matemáticas</h2>
                </div>
                <div class="contain-books">
                    <a target="_blank" href="./assets/pdf/primero/matematicas/recursos/Cálculo numérico.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/primero/matematicas/recursos/Cálculo numérico Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Cálculo <br> numérico</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/primero/matematicas/recursos/Cuaderno de actividades lúdicas de matemáticas.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/primero/matematicas/recursos/Cuaderno de actividades lúdicas de matemáticas Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Cuaderno de <br> actividades <br> lúdicas de <br> matemáticas</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/primero/matematicas/recursos/Leo, comprendo, aprendo I.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/primero/matematicas/recursos/Leo, comprendo, aprendo I Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Leo, <br> comprendo, <br> aprendo I</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/primero/matematicas/recursos/Leo, comprendo, aprendo II.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/primero/matematicas/recursos/Leo, comprendo, aprendo II Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Leo, <br> comprendo, <br> aprendo II</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/primero/matematicas/recursos/Mi Libro para Estudiar Matemáticas 7.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/primero/matematicas/recursos/Mi Libro para Estudiar Matemáticas 7 Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Mi Libro <br> para Estudiar <br> Matemáticas 7</h4>
                        </div>
                    </a>
                </div>
            </div>



            <!-- Segundo Grado *****************+ -->

            <!-- Recursos Español -->
            <div class="school-resources d-none" id="segundo-espanol-recursos">
                <div class="title ml-5">
                    <h2>Recursos Español</h2>
                </div>
                <div class="contain-books">
                    <a target="_blank" href="./assets/pdf/segundo/espanol/Recursos Español/Leo, comprendo, aprendo I.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/segundo/espanol/Recursos Español/Leo, comprendo, aprendo I Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Leo, <br> comprendo, <br> aprendo I</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/segundo/espanol/Recursos Español/Leo, comprendo, aprendo II.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/segundo/espanol/Recursos Español/Leo, comprendo, aprendo II Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Leo, <br> comprendo, <br> aprendo II</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/segundo/espanol/Recursos Español/Mi Libro de Lecturas Nuevo León.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/segundo/espanol/Recursos Español/Mi Libro de Lecturas Nuevo León Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Mi Libro <br> de Lecturas <br> Nuevo León</h4>
                        </div>
                    </a>

                </div>

            </div>

            <!-- Recursos fce -->
            <div class="school-resources d-none" id="segundo-fce-recursos">
                <div class="title ml-5">
                    <h2>Recursos FCE</h2>
                </div>
                <div class="contain-books">

                    <a target="_blank" href="./assets/pdf/segundo/FCE/Recursos FCE/Colección Hablemos en familia_Educación sexual.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/segundo/FCE/Recursos FCE/Colección Hablemos en familia_Educación sexual Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Colección <br> Hablemos <br> en familia <br> Educación sexual</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/segundo/FCE/Recursos FCE/Compendio de Dilemas Morales.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/segundo/FCE/Recursos FCE/Compendio de Dilemas Morales Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Compendio <br> de Dilemas <br> Morales</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/segundo/FCE/Recursos FCE/Leo, comprendo, aprendo I.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/segundo/FCE/Recursos FCE/Leo, comprendo, aprendo I.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Leo, <br> comprendo, <br> aprendo I</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/segundo/FCE/Recursos FCE/Leo, comprendo, aprendo II.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/segundo/FCE/Recursos FCE/Leo, comprendo, aprendo II Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Leo, <br> comprendo, <br> aprendo II</h4>
                        </div>
                    </a>

                </div>

            </div>

            <!-- Recursos Física -->
            <div class="school-resources d-none" id="segundo-fisica-recursos">
                <div class="title ml-5">
                    <h2>Recursos Física</h2>
                </div>
                <div class="contain-books">
                    <a target="_blank" href="./assets/pdf/segundo/fisica/Recursos Física/Cuaderno de Prácticas de Laboratorio de Ciencias II.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/segundo/fisica/Recursos Física/Cuaderno de Prácticas de Laboratorio de Ciencias II Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Cuaderno de <br> Prácticas de <br> Laboratorio de <br> Ciencias II</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/segundo/fisica/Recursos Física/Leo, comprendo, aprendo I.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/segundo/fisica/Recursos Física/Leo, comprendo, aprendo I Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Leo, <br> comprendo, <br> aprendo I</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/segundo/fisica/Recursos Física/Leo, comprendo, aprendo II.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/segundo/fisica/Recursos Física/Leo, comprendo, aprendo II Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Leo, <br> comprendo, <br> aprendo II</h4>
                        </div>
                    </a>
                </div>

            </div>

            <!-- Recursos Historia -->
            <div class="school-resources d-none" id="segundo-historia-recursos">
                <div class="title ml-5">
                    <h2>Recursos Historia</h2>
                </div>
                <div class="contain-books">
                    <a target="_blank" href="./assets/pdf/segundo/Historia/Recursos Historia/Leo, comprendo, aprendo I.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/segundo/Historia/Recursos Historia/Leo, comprendo, aprendo I Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Leo, <br> comprendo, <br> aprendo I</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/segundo/Historia/Recursos Historia/Leo, comprendo, aprendo II.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/segundo/Historia/Recursos Historia/Leo, comprendo, aprendo II Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Leo, <br> comprendo, <br> aprendo II</h4>
                        </div>
                    </a>
                </div>

            </div>

            <!-- Recursos Inglés -->
            <div class="school-resources d-none" id="segundo-ingles-recursos">
                <div class="title ml-5">
                    <h2>Recursos Inglés</h2>
                </div>
                <div class="contain-books">
                    <a target="_blank" href="./assets/pdf/segundo/ingles/Recursos Inglés/Cuaderno de actividades lúdicas de Inglés.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/segundo/ingles/Recursos Inglés/Cuaderno de actividades lúdicas de Inglés Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Cuaderno de <br> actividades <br> lúdicas de <br> Inglés</h4>
                        </div>
                    </a>

                </div>

            </div>

            <!-- Recursos Matemáticas -->
            <div class="school-resources d-none" id="segundo-matematicas-recursos">
                <div class="title ml-5">
                    <h2>Recursos Matemáticas</h2>
                </div>
                <div class="contain-books">
                    <a target="_blank" href="./assets/pdf/segundo/matematicas/Recursos Matemáticas/Cálculo numérico.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/segundo/matematicas/Recursos Matemáticas/Cálculo numérico Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Cálculo <br> numérico</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/segundo/matematicas/Recursos Matemáticas/Cuaderno de actividades lúdicas de matemáticas.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/segundo/matematicas/Recursos Matemáticas/Cuaderno de actividades lúdicas de matemáticas Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Cuaderno de <br> actividades <br> lúdicas de <br> matemáticas</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/segundo/matematicas/Recursos Matemáticas/Leo, comprendo, aprendo I.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/segundo/matematicas/Recursos Matemáticas/Leo, comprendo, aprendo I Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Leo, <br> comprendo, <br> aprendo I</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/segundo/matematicas/Recursos Matemáticas/Leo, comprendo, aprendo II.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/segundo/matematicas/Recursos Matemáticas/Leo, comprendo, aprendo II Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Leo, <br> comprendo, <br> aprendo II</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/segundo/matematicas/Recursos Matemáticas/Mi cuaderno para estudiar matemáticas 8.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/segundo/matematicas/Recursos Matemáticas/Mi cuaderno para estudiar matemáticas 8 Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Mi cuaderno <br> para estudiar <br> matemáticas 8</h4>
                        </div>
                    </a>

                </div>

            </div>


            <!-- Tercero Grado *****************+ -->

            <!-- Recursos Español -->

            <div class="school-resources d-none" id="tercero-espanol-recursos">
                <div class="title ml-5">
                    <h2>Recursos Español</h2>
                </div>
                <div class="contain-books">
                    <a target="_blank" href="./assets/pdf/tercero/espanol/Recursos Español/Leo, comprendo, aprendo I.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/tercero/espanol/Recursos Español/Leo, comprendo, aprendo I Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Leo, <br> comprendo, <br> aprendo I</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/tercero/espanol/Recursos Español/Leo, comprendo, aprendo II.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/tercero/espanol/Recursos Español/Leo, comprendo, aprendo II Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Leo, <br> comprendo, <br> aprendo II</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/tercero/espanol/Recursos Español/Mi Libro de Lecturas Nuevo León.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/tercero/espanol/Recursos Español/Mi Libro de Lecturas Nuevo León Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Mi Libro <br> de Lecturas <br> Nuevo León</h4>
                        </div>
                    </a>

                </div>

            </div>

            <!-- Recursos FCE -->

            <div class="school-resources d-none" id="tercero-fce-recursos">
                <div class="title ml-5">
                    <h2>Recursos FCE</h2>
                </div>
                <div class="contain-books">
                    <a target="_blank" href="./assets/pdf/tercero/FCE/Recursos FCE/Colección Hablemos en familia_Educación sexual.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/tercero/FCE/Recursos FCE/Colección Hablemos en familia_Educación sexual Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Colección <br> Hablemos<br>en familia-<br> Educación <br> sexual</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/tercero/FCE/Recursos FCE/Compendio de Dilemas Morales.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/tercero/FCE/Recursos FCE/Compendio de Dilemas Morales Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Compendio de <br> Dilemas Morales</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/tercero/FCE/Recursos FCE/Leo, comprendo, aprendo I.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/tercero/FCE/Recursos FCE/Leo, comprendo, aprendo I Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Leo, <br> comprendo, <br> aprendo I</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/tercero/FCE/Recursos FCE/Leo, comprendo, aprendo II.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/tercero/FCE/Recursos FCE/Leo, comprendo, aprendo II Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Leo, <br> comprendo, <br> aprendo II</h4>
                        </div>
                    </a>

                </div>

            </div>

            <!-- Recursos Historia -->

            <div class="school-resources d-none" id="tercero-historia-recursos">
                <div class="title ml-5">
                    <h2>Recursos Historia</h2>
                </div>
                <div class="contain-books">
                    <a target="_blank" href="./assets/pdf/tercero/Historia/Recursos Historia/Leo, comprendo, aprendo I.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/tercero/Historia/Recursos Historia/Leo, comprendo, aprendo I Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Leo, <br> comprendo, <br> aprendo I</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/tercero/Historia/Recursos Historia/Leo, comprendo, aprendo II.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/tercero/Historia/Recursos Historia/Leo, comprendo, aprendo II Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Leo, <br> comprendo, <br> aprendo II</h4>
                        </div>
                    </a>

                </div>

            </div>

            <!-- Recursos Inglés -->

            <div class="school-resources d-none" id="tercero-ingles-recursos">
                <div class="title ml-5">
                    <h2>Recursos Inglés</h2>
                </div>
                <div class="contain-books">
                    <a target="_blank" href="./assets/pdf/tercero/ingles/Recursos Inglés/Cuaderno de actividades lúdicas de Inglés.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/tercero/ingles/Recursos Inglés/Cuaderno de actividades lúdicas de Inglés Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Cuaderno de <br> actividades <br> lúdicas de <br> Inglés</h4>
                        </div>
                    </a>
                </div>

            </div>

            <!-- Recursos Matemáticas -->

            <div class="school-resources d-none" id="tercero-matematicas-recursos">
                <div class="title ml-5">
                    <h2>Recursos Matemáticas</h2>
                </div>
                <div class="contain-books">
                    <a target="_blank" href="./assets/pdf/tercero/matematicas/Recursos Matemáticas/Cálculo numérico.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/tercero/matematicas/Recursos Matemáticas/Cálculo numérico Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Cálculo <br> numérico</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/tercero/matematicas/Recursos Matemáticas/Cuaderno de actividades lúdicas de matemáticas.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/tercero/matematicas/Recursos Matemáticas/Cuaderno de actividades lúdicas de matemáticas Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Cuaderno de <br> actividades <br> lúdicas de <br> matemáticas</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/tercero/matematicas/Recursos Matemáticas/Leo, comprendo, aprendo I.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/tercero/matematicas/Recursos Matemáticas/Leo, comprendo, aprendo I Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Leo, <br> comprendo, <br> aprendo I</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/tercero/matematicas/Recursos Matemáticas/Leo, comprendo, aprendo II.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/tercero/matematicas/Recursos Matemáticas/Leo, comprendo, aprendo II Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Leo, <br> comprendo, <br> aprendo II</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/tercero/matematicas/Recursos Matemáticas/Mi cuaderno para estudiar matemáticas 9.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/tercero/matematicas/Recursos Matemáticas/Mi cuaderno para estudiar matemáticas 9 Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Mi cuaderno <br> para estudiar <br> matemáticas 9</h4>
                        </div>
                    </a>
                </div>

            </div>

            <!-- Recursos Química -->

            <div class="school-resources d-none" id="tercero-quimica-recursos">
                <div class="title ml-5">
                    <h2>Recursos Química</h2>
                </div>
                <div class="contain-books">

                    <a target="_blank" href="./assets/pdf/tercero/quimica/Recursos Química/Cuaderno de Prácticas de Laboratorio de Ciencias III.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/tercero/quimica/Recursos Química/Cuaderno de Prácticas de Laboratorio de Ciencias III Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Cuaderno de <br> Prácticas de <br> Laboratorio de <br> Ciencias III</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/tercero/quimica/Recursos Química/Leo, comprendo, aprendo I.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/tercero/quimica/Recursos Química/Leo, comprendo, aprendo I Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Leo, <br> comprendo, <br> aprendo I</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./assets/pdf/tercero/quimica/Recursos Química/Leo, comprendo, aprendo II.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./assets/pdf/tercero/quimica/Recursos Química/Leo, comprendo, aprendo II Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Leo, <br> comprendo, <br> aprendo II</h4>
                        </div>
                    </a>

                </div>

            </div>

        </div>
    </div>
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
                    <img src="./assets/imgs/logo.png" alt="Logo BrainUp">
                </div>
                <p>Copyright © 2021. Brain Up. Derechos <br> Reservados.</p>
            </div>
            <div class="links">
                <div class="links-left">
                    <h4>Páginas más visitadas</h4>
                    <ol>
                        <li>
                            <a href="index.html">Inicio</a>
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
                <button type="button"><img src="./assets/icons/right.svg" alt="icon righta"></button>
            </div>
        </div>
        <a href="#" class="cta-up">
            <img src="./assets/icons/up.svg" alt="Fecha hacia arriba">
        </a>
        <div class="rrss-footer">
            <a href="#">
                <img src="./assets/icons/facebook.svg" alt="Icono Facebook">
            </a>
            <a href="#">
                <img src="./assets/icons/twitter.svg" alt="Icono Twitter">
            </a>
        </div>
    </div>

</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="js/script.js"></script>

</body>
</html>
