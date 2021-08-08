@extends('recursos.layouts.master')

@section('content')

    {{--    Condicional de rutas con variable grado--}}
    @if($grado !== 'tercer-grado' && $grado !== 'segundo-grado' && $grado !== 'tercer-grado')

{{--        <div class="container">--}}
{{--            <div class="row d-flex justify-content-center">--}}
{{--                <h1>404 - Página no encontrada</h1>--}}
{{--            </div>--}}
{{--        </div>--}}

    @endif

{{--    Condicional de rutas con variable materia--}}
    @if($materia !== 'biologia' && $materia !== 'espanol' && $materia !== 'fce' && $materia !== 'geografia' &&
        $materia !== 'historia' && $materia !== 'ingles' && $materia !== 'matematicas' && $materia !== 'fisica' &&
        $materia !== 'quimica')
        <div class="container">
            <div class="row d-flex justify-content-center">
                <h1>404 - Página no encontrada</h1>
            </div>
        </div>

    @endif

{{--    Condicional para mostrar materias dependiendo del grado y la materia--}}
    @if($grado === 'primer-grado')

        @if($materia === 'biologia')
        <div class="container-main container-scanned-book">
        <div class="max-w">
            <div class="scanned-book">
                <div class="title text-center">
                    <h2>Primer grado</h2>
                </div>
                <a href="../../../assets/pdf/primero/biologia/GDT_S_1er Año Biología.pdf" target="_blank" style="color: black;" class="book">
                    <div class="cover-page">
                        <img src="../../../assets/pdf/primero/biologia/GDT_S_1er Año Biología Alumno Portada.jpg" alt="Portada del libro escaneado">
                    </div>
{{--                    <div class="title-book">--}}
                        <h4>Biología</h4>

                    </div>
                </a>
            </div>
            <div class="school-resources">
                <div class="title">
                    <h2>Recursos</h2>
                </div>
                <div class="contain-books">
                    <a target="_blank" href="../../../assets/pdf/primero/biologia/Recursos de Biología/1-Cuaderno de prácticas de biología.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="../../../assets/pdf/primero/biologia/Recursos de Biología/Cuaderno de prácticas de biología Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Cuaderno de<br>prácticas de<br>biología</h4>
                        </div>
                    </a>
                    <a target="_blank" href="../../../assets/pdf/primero/biologia/Recursos de Biología/2-Cuaderno de Prácticas de Laboratorio de Ciencias I.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="../../../assets/pdf/primero/biologia/Recursos de Biología/Cuaderno de Prácticas de Laboratorio de Ciencias I Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Cuaderno de <br> Prácticas de <br> Laboratorio de <br> Ciencias I</h4>
                        </div>
                    </a>
                    <a target="_blank" href="../../../assets/pdf/primero/biologia/Recursos de Biología/3-Leo, comprendo, aprendo I.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="../../../assets/pdf/primero/biologia/Recursos de Biología/Leo, comprendo, aprendo I Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Leo, <br> comprendo, <br> aprendo I</h4>
                        </div>
                    </a>
                    <a target="_blank" href="../../../assets/pdf/primero/biologia/Recursos de Biología/4-Leo, comprendo, aprendo II.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="../../../assets/pdf/primero/biologia/Recursos de Biología/Leo, comprendo, aprendo II Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Leo, <br> comprendo, <br> aprendo II</h4>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>
        @elseif($materia === 'espanol')
            <div class="container-main container-scanned-book">
                <div class="max-w">
                    <div class="scanned-book">
                        <div class="title text-center">
                            <h2>Primer grado</h2>
                        </div>
                        <a href="../../../assets/pdf/primero/espanol/GDT_S_1er Año Español.pdf" target="_blank" style="color: black;" class="book">
                            <div class="cover-page">
                                <img class="rounded" src="../../../assets/pdf/primero/espanol/GDT_S_1er Año Español Alumno Portada.jpg" alt="Portada del libro escaneado">
                            </div>
                            <div class="title-book">
                                <h4>Español</h4>

                            </div>
                        </a>
                    </div>
                    <div class="school-resources">
                        <div class="title">
                            <h2>Recursos</h2>
                        </div>
                        <div class="contain-books">

                            <a target="_blank" href="../../../assets/pdf/primero/espanol/Recursos Español/Leo, comprendo, aprendo I.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/primero/espanol/Recursos Español/Leo, comprendo, aprendo I Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Leo, <br> comprendo, <br> aprendo I</h4>
                                </div>
                            </a>
                            <a target="_blank" href="../../../assets/pdf/primero/espanol/Recursos Español/Leo, comprendo, aprendo II.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/primero/espanol/Recursos Español/Leo, comprendo, aprendo II Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Leo, <br> comprendo, <br> aprendo II</h4>
                                </div>
                            </a>
                            <a target="_blank" href="../../../assets/pdf/primero/espanol/Recursos Español/Mi Libro de Lecturas Nuevo León.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/primero/espanol/Recursos Español/Mi Libro de Lecturas Nuevo León Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Mi Libro <br> de Lecturas <br> Nuevo León</h4>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        @elseif($materia === 'fce')
            <div class="container-main container-scanned-book">
                <div class="max-w">
                    <div class="scanned-book">
                        <div class="title text-center">
                            <h2>Primer grado</h2>
                        </div>
                        <a href="../../../assets/pdf/primero/FCE/GDT_S_1er Año FCE.pdf" target="_blank" style="color: black;" class="book">
                            <div class="cover-page">
                                <img class="rounded" src="../../../assets/pdf/primero/FCE/GDT_S_1er Año FCE Alumno Portada.jpg" alt="Portada del libro escaneado">
                            </div>
                            <div class="title-book">
                                <h4>FCE</h4>

                            </div>
                        </a>
                    </div>
                    <div class="school-resources">
                        <div class="title">
                            <h2>Recursos</h2>
                        </div>
                        <div class="contain-books">

                            <a target="_blank" href="../../../assets/pdf/primero/FCE/Carpeta FCE/Colección Hablemos en familia_Educación sexual.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/primero/FCE/Carpeta FCE/Colección Hablemos en familia_Educación sexual Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Colección <br> Hablemos en <br> familia <br> Educación <br> sexual</h4>
                                </div>
                            </a>
                            <a target="_blank" href="../../../assets/pdf/primero/FCE/Carpeta FCE/Compendio de Dilemas Morales.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/primero/FCE/Carpeta FCE/Compendio de Dilemas Morales Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Compendio de <br> Dilemas Morales</h4>
                                </div>
                            </a>
                            <a target="_blank" href="../../../assets/pdf/primero/FCE/Carpeta FCE/Leo, comprendo, aprendo I.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/primero/FCE/Carpeta FCE/Leo, comprendo, aprendo I Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Leo, <br> comprendo, <br> aprendo I</h4>
                                </div>
                            </a>
                            <a target="_blank" href="../../../assets/pdf/primero/FCE/Carpeta FCE/Leo, comprendo, aprendo II.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/primero/FCE/Carpeta FCE/Leo, comprendo, aprendo II Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Leo, <br> comprendo, <br> aprendo II</h4>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        @elseif($materia === 'geografia')
            <div class="container-main container-scanned-book">
                <div class="max-w">
                    <div class="scanned-book">
                        <div class="title text-center">
                            <h2>Primer grado</h2>
                        </div>
                        <a href="../../../assets/pdf/primero/geografia/GDT_S_1er Año Geografía.pdf" target="_blank" style="color: black;" class="book">
                            <div class="cover-page">
                                <img class="rounded" src="../../../assets/pdf/primero/geografia/GDT_S_1er Año Geografía Alumno Portada.jpg" alt="Portada del libro escaneado">
                            </div>
                            <div class="title-book">
                                <h4>Geografía</h4>

                            </div>
                        </a>
                    </div>
                    <div class="school-resources">
                        <div class="title">
                            <h2>Recursos</h2>
                        </div>
                        <div class="contain-books">

                            <a target="_blank" href="../../../assets/pdf/primero/geografia/recursos/Leo, comprendo, aprendo I.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/primero/geografia/recursos/Leo, comprendo, aprendo I Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Leo, <br> comprendo, <br> aprendo I</h4>
                                </div>
                            </a>
                            <a target="_blank" href="../../../assets/pdf/primero/geografia/recursos/Leo, comprendo, aprendo II.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/primero/geografia/recursos/Leo, comprendo, aprendo II Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Leo, <br> comprendo, <br> aprendo II</h4>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        @elseif($materia === 'historia')
            <div class="container-main container-scanned-book">
                <div class="max-w">
                    <div class="scanned-book">
                        <div class="title text-center">
                            <h2>Primer grado</h2>
                        </div>
                        <a href="../../../assets/pdf/primero/Historia/GDT_S_1er Año Historia.pdf" target="_blank" style="color: black;" class="book">
                            <div class="cover-page">
                                <img class="rounded" src="../../../assets/pdf/primero/Historia/GDT_S_1er Año Historia Alumno Portada.jpg" alt="Portada del libro escaneado">
                            </div>
                            <div class="title-book">
                                <h4>Historia</h4>

                            </div>
                        </a>
                    </div>
                    <div class="school-resources">
                        <div class="title">
                            <h2>Recursos</h2>
                        </div>
                        <div class="contain-books">

                            <a target="_blank" href="../../../assets/pdf/primero/Historia/Recursos Historia/Leo, comprendo, aprendo I.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/primero/Historia/Recursos Historia/Leo, comprendo, aprendo I Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Leo, <br> comprendo, <br> aprendo I</h4>
                                </div>
                            </a>
                            <a target="_blank" href="../../../assets/pdf/primero/Historia/Recursos Historia/Leo, comprendo, aprendo II.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/primero/Historia/Recursos Historia/Leo, comprendo, aprendo II Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Leo, <br> comprendo, <br> aprendo II</h4>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        @elseif($materia === 'ingles')
            <div class="container-main container-scanned-book">
                <div class="max-w">
                    <div class="scanned-book">
                        <div class="title text-center">
                            <h2>Primer grado</h2>
                        </div>
                        <a href="../../../assets/pdf/primero/ingles/GDT_S_1er Año Inglés.pdf" target="_blank" style="color: black;" class="book">
                            <div class="cover-page">
                                <img class="rounded" src="../../../assets/pdf/primero/ingles/GDT_S_1er Año Inglés Alumno Portada.jpg" alt="Portada del libro escaneado">
                            </div>
                            <div class="title-book">
                                <h4>Inglés</h4>

                            </div>
                        </a>
                    </div>
                    <div class="school-resources">
                        <div class="title">
                            <h2>Recursos</h2>
                        </div>
                        <div class="contain-books">

                            <a target="_blank" href="../../../assets/pdf/primero/ingles/Recursos Inglés/Cuaderno de actividades lúdicas de Inglés.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/primero/ingles/Recursos Inglés/Cuaderno de actividades lúdicas de Inglés Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Cuaderno de <br> actividades <br> lúdicas de <br> Inglés</h4>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        @elseif($materia === 'matematicas')
            <div class="container-main container-scanned-book">
                <div class="max-w">
                    <div class="scanned-book">
                        <div class="title text-center">
                            <h2>Primer grado</h2>
                        </div>
                        <a href="../../../assets/pdf/primero/matematicas/GDT_S_1er Año Matemáticas.pdf" target="_blank" style="color: black;" class="book">
                            <div class="cover-page">
                                <img class="rounded" src="../../../assets/pdf/primero/matematicas/GDT_S_1er Año Matemáticas Alumno Portada.jpg" alt="Portada del libro escaneado">
                            </div>
                            <div class="title-book">
                                <h4>Matemáticas</h4>

                            </div>
                        </a>
                    </div>
                    <div class="school-resources">
                        <div class="title">
                            <h2>Recursos</h2>
                        </div>
                        <div class="contain-books">

                            <a target="_blank" href="../../../assets/pdf/primero/matematicas/recursos/Cálculo numérico.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/primero/matematicas/recursos/Cálculo numérico Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Cálculo <br> numérico</h4>
                                </div>
                            </a>
                            <a target="_blank" href="../../../assets/pdf/primero/matematicas/recursos/Cuaderno de actividades lúdicas de matemáticas.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/primero/matematicas/recursos/Cuaderno de actividades lúdicas de matemáticas Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Cuaderno de <br> actividades <br> lúdicas de <br> matemáticas</h4>
                                </div>
                            </a>
                            <a target="_blank" href="../../../assets/pdf/primero/matematicas/recursos/Leo, comprendo, aprendo I.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/primero/matematicas/recursos/Leo, comprendo, aprendo I Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Leo, <br> comprendo, <br> aprendo I</h4>
                                </div>
                            </a>
                            <a target="_blank" href="../../../assets/pdf/primero/matematicas/recursos/Leo, comprendo, aprendo II.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/primero/matematicas/recursos/Leo, comprendo, aprendo II Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Leo, <br> comprendo, <br> aprendo II</h4>
                                </div>
                            </a>
                            <a target="_blank" href="../../../assets/pdf/primero/matematicas/recursos/Mi Libro para Estudiar Matemáticas 7.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/primero/matematicas/recursos/Mi Libro para Estudiar Matemáticas 7 Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Mi Libro <br> para Estudiar <br> Matemáticas 7</h4>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>


        @endif

    @endif

    {{--    Condicional para mostrar materias dependiendo del grado y la materia--}}

    @if($grado == 'segundo-grado')
        @if($materia == 'espanol')
            <div class="container-main container-scanned-book">
                <div class="max-w">
                    <div class="scanned-book">
                        <div class="title text-center">
                            <h2>Segundo grado</h2>
                        </div>
                        <a href="../../../assets/pdf/segundo/espanol/GDT_S_2o Año Español.pdf" target="_blank" style="color: black;" class="book">
                            <div class="cover-page">
                                <img src="../../../assets/pdf/segundo/espanol/GDT_S_2o Año Español Alumno Portada.jpg" alt="Portada del libro escaneado">
                            </div>
                            <div class="title-book">
                                <h4>Español</h4>

                            </div>
                        </a>
                    </div>
                    <div class="school-resources">
                        <div class="title">
                            <h2>Recursos</h2>
                        </div>
                        <div class="contain-books">

                            <a target="_blank" href="../../../assets/pdf/segundo/espanol/Recursos Español/Leo, comprendo, aprendo I.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/segundo/espanol/Recursos Español/Leo, comprendo, aprendo I Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Leo, <br> comprendo, <br> aprendo I</h4>
                                </div>
                            </a>
                            <a target="_blank" href="../../../assets/pdf/segundo/espanol/Recursos Español/Leo, comprendo, aprendo II.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/segundo/espanol/Recursos Español/Leo, comprendo, aprendo II Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Leo, <br> comprendo, <br> aprendo II</h4>
                                </div>
                            </a>
                            <a target="_blank" href="../../../assets/pdf/segundo/espanol/Recursos Español/Mi Libro de Lecturas Nuevo León.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/segundo/espanol/Recursos Español/Mi Libro de Lecturas Nuevo León Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Mi Libro <br> de Lecturas <br> Nuevo León</h4>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        @elseif($materia == 'fce')
            <div class="container-main container-scanned-book">
                <div class="max-w">
                    <div class="title text-center">
                        <div class="title">
                            <h2>Segundo grado</h2>
                        </div>
                        <a href="../../../assets/pdf/segundo/FCE/GDT_S_2o Año FCE.pdf" target="_blank" style="color: black;" class="book">
                            <div class="cover-page">
                                <img src="../../../assets/pdf/segundo/FCE/GDT_S_2o Año FCE Alumno Portada.jpg" alt="Portada del libro escaneado">
                            </div>
                            <div class="title-book">
                                <h4>FCE</h4>

                            </div>
                        </a>
                    </div>
                    <div class="school-resources">
                        <div class="title">
                            <h2>Recursos</h2>
                        </div>
                        <div class="contain-books">

                            <a target="_blank" href="../../../assets/pdf/segundo/FCE/Recursos FCE/Colección Hablemos en familia_Educación sexual.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/segundo/FCE/Recursos FCE/Colección Hablemos en familia_Educación sexual Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Colección <br> Hablemos <br> en familia <br> Educación sexual</h4>
                                </div>
                            </a>
                            <a target="_blank" href="../../../assets/pdf/segundo/FCE/Recursos FCE/Compendio de Dilemas Morales.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/segundo/FCE/Recursos FCE/Compendio de Dilemas Morales Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Compendio <br> de Dilemas <br> Morales</h4>
                                </div>
                            </a>
                            <a target="_blank" href="../../../assets/pdf/segundo/FCE/Recursos FCE/Leo, comprendo, aprendo I.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/segundo/FCE/Recursos FCE/Leo, comprendo, aprendo I.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Leo, <br> comprendo, <br> aprendo I</h4>
                                </div>
                            </a>
                            <a target="_blank" href="../../../assets/pdf/segundo/FCE/Recursos FCE/Leo, comprendo, aprendo II.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/segundo/FCE/Recursos FCE/Leo, comprendo, aprendo II Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Leo, <br> comprendo, <br> aprendo II</h4>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        @elseif($materia == 'fisica')
            <div class="container-main container-scanned-book">
                <div class="max-w">
                    <div class="scanned-book">
                        <div class="title text-center">
                            <h2>Segundo grado</h2>
                        </div>
                        <a href="../../../assets/pdf/segundo/fisica/GDT_S_2o Año Física.pdf" target="_blank" style="color: black;" class="book">
                            <div class="cover-page">
                                <img src="../../../assets/pdf/segundo/fisica/GDT_S_2o Año Física Alumno Portada.jpg" alt="Portada del libro escaneado">
                            </div>
                            <div class="title-book">
                                <h4>Física</h4>

                            </div>
                        </a>
                    </div>
                    <div class="school-resources">
                        <div class="title">
                            <h2>Recursos</h2>
                        </div>
                        <div class="contain-books">

                            <a target="_blank" href="../../../assets/pdf/segundo/fisica/Recursos Física/Cuaderno de Prácticas de Laboratorio de Ciencias II.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/segundo/fisica/Recursos Física/Cuaderno de Prácticas de Laboratorio de Ciencias II Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Cuaderno de <br> Prácticas de <br> Laboratorio de <br> Ciencias II</h4>
                                </div>
                            </a>
                            <a target="_blank" href="../../../assets/pdf/segundo/fisica/Recursos Física/Leo, comprendo, aprendo I.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/segundo/fisica/Recursos Física/Leo, comprendo, aprendo I Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Leo, <br> comprendo, <br> aprendo I</h4>
                                </div>
                            </a>
                            <a target="_blank" href="../../../assets/pdf/segundo/fisica/Recursos Física/Leo, comprendo, aprendo II.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/segundo/fisica/Recursos Física/Leo, comprendo, aprendo II Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Leo, <br> comprendo, <br> aprendo II</h4>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        @elseif($materia == 'historia')
            <div class="container-main container-scanned-book">
                <div class="max-w">
                    <div class="scanned-book">
                        <div class="title text-center">
                            <h2>Segundo grado</h2>
                        </div>
                        <a href="../../../assets/pdf/segundo/Historia/GDT_S_2o Año Historia.pdf" target="_blank" style="color: black;" class="book">
                            <div class="cover-page">
                                <img class="rounded" src="../../../assets/pdf/segundo/Historia/GDT_S_2o Año Historia Alumno Portada.jpg" alt="Portada del libro escaneado">
                            </div>
                            <div class="title-book">
                                <h4>Historia</h4>

                            </div>
                        </a>
                    </div>
                    <div class="school-resources">
                        <div class="title">
                            <h2>Recursos</h2>
                        </div>
                        <div class="contain-books">

                            <a target="_blank" href="../../../assets/pdf/segundo/Historia/Recursos Historia/Leo, comprendo, aprendo I.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/segundo/Historia/Recursos Historia/Leo, comprendo, aprendo I Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Leo, <br> comprendo, <br> aprendo I</h4>
                                </div>
                            </a>
                            <a target="_blank" href="../../../assets/pdf/segundo/Historia/Recursos Historia/Leo, comprendo, aprendo II.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/segundo/Historia/Recursos Historia/Leo, comprendo, aprendo II Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Leo, <br> comprendo, <br> aprendo II</h4>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        @elseif($materia == 'ingles')
            <div class="container-main container-scanned-book">
                <div class="max-w">
                    <div class="scanned-book">
                        <div class="title text-center">
                            <h2>Segundo grado</h2>
                        </div>
                        <a href="../../../assets/pdf/segundo/ingles/GDT_S_2o Año Inglés.pdf" target="_blank" style="color: black;" class="book">
                            <div class="cover-page">
                                <img src="../../../assets/pdf/segundo/ingles/GDT_S_2o Año Inglés Alumno Portada.jpg" alt="Portada del libro escaneado">
                            </div>
                            <div class="title-book">
                                <h4>Inglés</h4>

                            </div>
                        </a>
                    </div>
                    <div class="school-resources">
                        <div class="title">
                            <h2>Recursos</h2>
                        </div>
                        <div class="contain-books">

                            <a target="_blank" href="../../../assets/pdf/segundo/ingles/Recursos Inglés/Cuaderno de actividades lúdicas de Inglés.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/segundo/ingles/Recursos Inglés/Cuaderno de actividades lúdicas de Inglés Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Cuaderno de <br> actividades <br> lúdicas de <br> Inglés</h4>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        @elseif($materia == 'matematicas')
            <div class="container-main container-scanned-book">
                <div class="max-w">
                    <div class="scanned-book">
                        <div class="title text-center">
                            <h2>Segundo grado</h2>
                        </div>
                        <a href="../../../assets/pdf/segundo/matematicas/GDT_S_2o Año Matemáticas.pdf" target="_blank" style="color: black;" class="book">
                            <div class="cover-page">
                                <img src="../../../assets/pdf/segundo/matematicas/GDT_S_2o Año Matemáticas Alumno Portada.jpg" alt="Portada del libro escaneado">
                            </div>
                            <div class="title-book">
                                <h4>Matemáticas</h4>

                            </div>
                        </a>
                    </div>
                    <div class="school-resources">
                        <div class="title">
                            <h2>Recursos</h2>
                        </div>
                        <div class="contain-books">

                            <a target="_blank" href="../../../assets/pdf/segundo/matematicas/Recursos Matemáticas/Cálculo numérico.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/segundo/matematicas/Recursos Matemáticas/Cálculo numérico Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Cálculo <br> numérico</h4>
                                </div>
                            </a>
                            <a target="_blank" href="../../../assets/pdf/segundo/matematicas/Recursos Matemáticas/Cuaderno de actividades lúdicas de matemáticas.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/segundo/matematicas/Recursos Matemáticas/Cuaderno de actividades lúdicas de matemáticas Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Cuaderno de <br> actividades <br> lúdicas de <br> matemáticas</h4>
                                </div>
                            </a>
                            <a target="_blank" href="../../../assets/pdf/segundo/matematicas/Recursos Matemáticas/Leo, comprendo, aprendo I.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/segundo/matematicas/Recursos Matemáticas/Leo, comprendo, aprendo I Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Leo, <br> comprendo, <br> aprendo I</h4>
                                </div>
                            </a>
                            <a target="_blank" href="../../../assets/pdf/segundo/matematicas/Recursos Matemáticas/Leo, comprendo, aprendo II.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/segundo/matematicas/Recursos Matemáticas/Leo, comprendo, aprendo II Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Leo, <br> comprendo, <br> aprendo II</h4>
                                </div>
                            </a>
                            <a target="_blank" href="../../../assets/pdf/segundo/matematicas/Recursos Matemáticas/Mi cuaderno para estudiar matemáticas 8.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/segundo/matematicas/Recursos Matemáticas/Mi cuaderno para estudiar matemáticas 8 Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Mi cuaderno <br> para estudiar <br> matemáticas 8</h4>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>


        @endif
    @endif

    {{--    Condicional para mostrar materias dependiendo del grado y la materia--}}

    @if($grado == 'tercer-grado')
        @if($materia == 'espanol')
            <div class="container-main container-scanned-book">
                <div class="max-w">
                    <div class="scanned-book">
                        <div class="title text-center">
                            <h2>Tercer grado</h2>
                        </div>
                        <a href="../../../assets/pdf/tercero/espanol/GDT_S_3er Año Español.pdf" target="_blank" style="color: black;" class="book">
                            <div class="cover-page">
                                <img src="../../../assets/pdf/tercero/espanol/GDT_S_3er Año Español Alumno Portada.jpg" alt="Portada del libro escaneado">
                            </div>
                            <div class="title-book">
                                <h4>Español</h4>

                            </div>
                        </a>
                    </div>
                    <div class="school-resources">
                        <div class="title">
                            <h2>Recursos</h2>
                        </div>
                        <div class="contain-books">

                            <a target="_blank" href="../../../assets/pdf/tercero/espanol/Recursos Español/Leo, comprendo, aprendo I.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/tercero/espanol/Recursos Español/Leo, comprendo, aprendo I Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Leo, <br> comprendo, <br> aprendo I</h4>
                                </div>
                            </a>
                            <a target="_blank" href="../../../assets/pdf/tercero/espanol/Recursos Español/Leo, comprendo, aprendo II.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/tercero/espanol/Recursos Español/Leo, comprendo, aprendo II Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Leo, <br> comprendo, <br> aprendo II</h4>
                                </div>
                            </a>
                            <a target="_blank" href="../../../assets/pdf/tercero/espanol/Recursos Español/Mi Libro de Lecturas Nuevo León.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/tercero/espanol/Recursos Español/Mi Libro de Lecturas Nuevo León Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Mi Libro <br> de Lecturas <br> Nuevo León</h4>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        @elseif($materia == 'fce')
            <div class="container-main container-scanned-book">
                <div class="max-w">
                    <div class="scanned-book">
                        <div class="title text-center">
                            <h2>Tercer grado</h2>
                        </div>
                        <a href="../../../assets/pdf/tercero/FCE/GDT_S_3er Año FCE.pdf" target="_blank" style="color: black;" class="book">
                            <div class="cover-page">
                                <img src="../../../assets/pdf/tercero/FCE/GDT_S_3er Año FCE Alumno Portada.jpg" alt="Portada del libro escaneado">
                            </div>
                            <div class="title-book">
                                <h4>FCE</h4>

                            </div>
                        </a>
                    </div>
                    <div class="school-resources">
                        <div class="title">
                            <h2>Recursos</h2>
                        </div>
                        <div class="contain-books">

                            <a target="_blank" href="../../../assets/pdf/tercero/FCE/Recursos FCE/Colección Hablemos en familia_Educación sexual.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/tercero/FCE/Recursos FCE/Colección Hablemos en familia_Educación sexual Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Colección <br> Hablemos<br>en familia-<br> Educación <br> sexual</h4>
                                </div>
                            </a>
                            <a target="_blank" href="../../../assets/pdf/tercero/FCE/Recursos FCE/Compendio de Dilemas Morales.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/tercero/FCE/Recursos FCE/Compendio de Dilemas Morales Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Compendio de <br> Dilemas Morales</h4>
                                </div>
                            </a>
                            <a target="_blank" href="../../../assets/pdf/tercero/FCE/Recursos FCE/Leo, comprendo, aprendo I.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/tercero/FCE/Recursos FCE/Leo, comprendo, aprendo I Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Leo, <br> comprendo, <br> aprendo I</h4>
                                </div>
                            </a>
                            <a target="_blank" href="../../../assets/pdf/tercero/FCE/Recursos FCE/Leo, comprendo, aprendo II.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/tercero/FCE/Recursos FCE/Leo, comprendo, aprendo II Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Leo, <br> comprendo, <br> aprendo II</h4>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        @elseif($materia == 'historia')
            <div class="container-main container-scanned-book">
                <div class="max-w">
                    <div class="scanned-book">
                        <div class="title text-center">
                            <h2>Tercer grado</h2>
                        </div>
                        <a href="../../../assets/pdf/tercero/Historia/GDT_S_3er Año Historia.pdf" target="_blank" style="color: black;" class="book">
                            <div class="cover-page">
                                <img src="../../../assets/pdf/tercero/Historia/GDT_S_3er Año Historia Alumno Portada.jpg" alt="Portada del libro escaneado">
                            </div>
                            <div class="title-book">
                                <h4>Historia</h4>

                            </div>
                        </a>
                    </div>
                    <div class="school-resources">
                        <div class="title">
                            <h2>Recursos</h2>
                        </div>
                        <div class="contain-books">

                            <a target="_blank" href="../../../assets/pdf/tercero/Historia/Recursos Historia/Leo, comprendo, aprendo I.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/tercero/Historia/Recursos Historia/Leo, comprendo, aprendo I Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Leo, <br> comprendo, <br> aprendo I</h4>
                                </div>
                            </a>
                            <a target="_blank" href="../../../assets/pdf/tercero/Historia/Recursos Historia/Leo, comprendo, aprendo II.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/tercero/Historia/Recursos Historia/Leo, comprendo, aprendo II Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Leo, <br> comprendo, <br> aprendo II</h4>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        @elseif($materia == 'ingles')
            <div class="container-main container-scanned-book">
                <div class="max-w">
                    <div class="scanned-book">
                        <div class="title text-center">
                            <h2>Tercer grado</h2>
                        </div>
                        <a href="../../../assets/pdf/tercero/ingles/GDT_S_3er Año Inglés.pdf" target="_blank" style="color: black;" class="book">
                            <div class="cover-page">
                                <img src="../../../assets/pdf/tercero/ingles/GDT_S_3er Año Inglés Alumno Portada.jpg" alt="Portada del libro escaneado">
                            </div>
                            <div class="title-book">
                                <h4>Inglés</h4>

                            </div>
                        </a>
                    </div>
                    <div class="school-resources">
                        <div class="title">
                            <h2>Recursos</h2>
                        </div>
                        <div class="contain-books">

                            <a target="_blank" href="../../../assets/pdf/tercero/ingles/Recursos Inglés/Cuaderno de actividades lúdicas de Inglés.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/tercero/ingles/Recursos Inglés/Cuaderno de actividades lúdicas de Inglés Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Cuaderno de <br> actividades <br> lúdicas de <br> Inglés</h4>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        @elseif($materia == 'matematicas')
            <div class="container-main container-scanned-book">
                <div class="max-w">
                    <div class="scanned-book">
                        <div class="title text-center">
                            <h2>Tercer grado</h2>
                        </div>
                        <a href="../../../assets/pdf/tercero/matematicas/GDT_S_3er Año Matemáticas.pdf" target="_blank" style="color: black;" class="book">
                            <div class="cover-page">
                                <img src="../../../assets/pdf/tercero/matematicas/GDT_S_3er Año Matemáticas Alumno Portada.jpg" alt="Portada del libro escaneado">
                            </div>
                            <div class="title-book">
                                <h4>Matemáticas</h4>

                            </div>
                        </a>
                    </div>
                    <div class="school-resources">
                        <div class="title">
                            <h2>Recursos</h2>
                        </div>
                        <div class="contain-books">

                            <a target="_blank" href="../../../assets/pdf/tercero/matematicas/Recursos Matemáticas/Cálculo numérico.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/tercero/matematicas/Recursos Matemáticas/Cálculo numérico Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Cálculo <br> numérico</h4>
                                </div>
                            </a>
                            <a target="_blank" href="../../../assets/pdf/tercero/matematicas/Recursos Matemáticas/Cuaderno de actividades lúdicas de matemáticas.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/tercero/matematicas/Recursos Matemáticas/Cuaderno de actividades lúdicas de matemáticas Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Cuaderno de <br> actividades <br> lúdicas de <br> matemáticas</h4>
                                </div>
                            </a>
                            <a target="_blank" href="../../../assets/pdf/tercero/matematicas/Recursos Matemáticas/Leo, comprendo, aprendo I.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/tercero/matematicas/Recursos Matemáticas/Leo, comprendo, aprendo I Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Leo, <br> comprendo, <br> aprendo I</h4>
                                </div>
                            </a>
                            <a target="_blank" href="../../../assets/pdf/tercero/matematicas/Recursos Matemáticas/Leo, comprendo, aprendo II.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/tercero/matematicas/Recursos Matemáticas/Leo, comprendo, aprendo II Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Leo, <br> comprendo, <br> aprendo II</h4>
                                </div>
                            </a>
                            <a target="_blank" href="../../../assets/pdf/tercero/matematicas/Recursos Matemáticas/Mi cuaderno para estudiar matemáticas 9.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/tercero/matematicas/Recursos Matemáticas/Mi cuaderno para estudiar matemáticas 9 Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Mi cuaderno <br> para estudiar <br> matemáticas 9</h4>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        @elseif($materia == 'quimica')
            <div class="container-main container-scanned-book">
                <div class="max-w">
                    <div class="scanned-book">
                        <div class="title text-center">
                            <h2>Tercer grado</h2>
                        </div>
                        <a href="../../../assets/pdf/tercero/quimica/GDT_S_3er Año Química.pdf" target="_blank" style="color: black;" class="book">
                            <div class="cover-page">
                                <img src="../../../assets/pdf/tercero/quimica/GDT_S_3er Año Química Alumno Portada.jpg" alt="Portada del libro escaneado">
                            </div>
                            <div class="title-book">
                                <h4>Química</h4>

                            </div>
                        </a>
                    </div>
                    <div class="school-resources">
                        <div class="title">
                            <h2>Recursos</h2>
                        </div>
                        <div class="contain-books">

                            <a target="_blank" href="../../../assets/pdf/tercero/quimica/Recursos Química/Cuaderno de Prácticas de Laboratorio de Ciencias III.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/tercero/quimica/Recursos Química/Cuaderno de Prácticas de Laboratorio de Ciencias III Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Cuaderno de <br> Prácticas de <br> Laboratorio de <br> Ciencias III</h4>
                                </div>
                            </a>
                            <a target="_blank" href="../../../assets/pdf/tercero/quimica/Recursos Química/Leo, comprendo, aprendo I.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/tercero/quimica/Recursos Química/Leo, comprendo, aprendo I Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Leo, <br> comprendo, <br> aprendo I</h4>
                                </div>
                            </a>
                            <a target="_blank" href="../../../assets/pdf/tercero/quimica/Recursos Química/Leo, comprendo, aprendo II.pdf" class="book">
                                <div class="cover-page">
                                    <img class="rounded" src="../../../assets/pdf/tercero/quimica/Recursos Química/Leo, comprendo, aprendo II Portada.jpg" alt="Portada libro">
                                </div>
                                <div class="title-book">
                                    <h4>Leo, <br> comprendo, <br> aprendo II</h4>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>


        @endif
    @endif

@stop
