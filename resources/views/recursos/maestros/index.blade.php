@extends('recursos.layouts.master')

@section('content')

    <div class="container-main container-scanned-book">
        <div class="max-w">
            <div class="scanned-book">
                <div class="title">
                    <h2>Maestros</h2>
                </div>
                <a href="#" class="book">
                    <div class="cover-page">
                        <img src="./../../../assets/pdf/maestros/Agenda Prof Portada.jpg" alt="Portada del libro escaneado">
                    </div>
                    <div class="title-book">
                        <h4>Agenda</h4>
                    </div>
                </a>
            </div>
            <div class="school-resources">
                <div class="title">
                    <h2>Recursos</h2>
                </div>
                <div class="contain-books">

{{--                    <a target="_blank" href="./../../../assets/pdf/maestros/recursos/Catálogo de programas y acciones del DTS 2017-2018.pdf" class="book">--}}
{{--                        <div class="cover-page">--}}
{{--                            <img class="rounded" src="./../../../assets/pdf/maestros/recursos/Catálogo de programas y acciones del DTS 2017-2018 Portada.jpg" alt="Portada libro">--}}
{{--                        </div>--}}
{{--                        <div class="title-book">--}}
{{--                            <h4>Catálogo de <br> programas y <br> acciones del <br> DTS <br> 2017-2018</h4>--}}
{{--                        </div>--}}
{{--                    </a>--}}
                    <a target="_blank" href="./../../../assets/pdf/maestros/recursos/catálogo de Programas y Acciones del DTS 2019-2020.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./../../../assets/pdf/maestros/recursos/catálogo de Programas y Acciones del DTS 2019-2020 Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Catálogo de <br> Programas y <br> Acciones del <br> DTS <br> 2019-2020</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./../../../assets/pdf/maestros/recursos/Cuaderno de Prácticas de Laboratorio de Ciencias I.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./../../../assets/pdf/maestros/recursos/Cuaderno de Prácticas de Laboratorio de Ciencias I Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Cuaderno de <br> Prácticas de <br> Laboratorio de <br> Ciencias I</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./../../../assets/pdf/maestros/recursos/Cuaderno de Prácticas de Laboratorio de Ciencias II.pdf" class="book">
                        <div class="cover-page" >
                            <img class="rounded" src="./../../../assets/pdf/maestros/recursos/Cuaderno de Prácticas de Laboratorio de Ciencias II Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Cuaderno de <br> Prácticas de <br> Laboratorio de <br> Ciencias II</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./../../../assets/pdf/maestros/recursos/Cuaderno de Prácticas de Laboratorio de Ciencias III.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./../../../assets/pdf/maestros/recursos/Cuaderno de Prácticas de Laboratorio de Ciencias III Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Cuaderno de <br> Prácticas de <br> Laboratorio de <br> Ciencias III</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./../../../assets/pdf/maestros/recursos/Estilos de aprendizaje.pdf" class="book">
                        <div class="cover-page">
                            <img class="rounded" src="./../../../assets/pdf/maestros/recursos/Estilos de aprendizaje Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Estilos de <br> aprendizaje</h4>
                        </div>
                    </a>
                    <a target="_blank" href="./../../../assets/pdf/maestros/recursos/Organización pedagógica de las experiencias de aprendizaje.pdf" class="book pb-5 mb-xl-0">
                        <div class="cover-page">
                            <img class="rounded" src="./../../../assets/pdf/maestros/recursos/Organización pedagógica de las experiencias de aprendizaje Portada.jpg" alt="Portada libro">
                        </div>
                        <div class="title-book">
                            <h4>Organización <br> pedagógica de <br> las experiencias <br> de aprendizaje</h4>
                        </div>
                    </a>

                </div>
            </div>


        </div>
    </div>

    <div class="container-fluid">
        <div class="row" id="programasAsignaturas">
            <div class="col-12 my-5 mt-xl-0">
                <h2 class="text-center subtitle">Programas por Asignatura</h2>
            </div>
            <div class="col-12 my-5 d-flex subtitulosAsignaturas">
                <h3>Programas 2017 para 1er y 2do año</h3>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 text-center">
                <a href="./../../../assets/pdf/maestros/recursos/asignaturas/primero_segundo/1. Lengua Materna Espanol.pdf" target="_blank">
                    <img class="rounded my-2" src="./../../../assets/pdf/maestros/recursos/asignaturas/primero_segundo/1. Portada Lengua Materna Espanol.png" alt="Portada libro">
                    <h4 class="books-title">Lengua Materna Espanol</h4>
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 text-center">
                <a href="./../../../assets/pdf/maestros/recursos/asignaturas/primero_segundo/2. Matemáticas.pdf" target="_blank">
                    <img class="rounded my-2" src="./../../../assets/pdf/maestros/recursos/asignaturas/primero_segundo/2. Portada Matemáticas.png" alt="Portada libro">
                    <h4 class="books-title">Matemáticas</h4>
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 text-center">
                <a href="./../../../assets/pdf/maestros/recursos/asignaturas/primero_segundo/3. Ciencias y Tecnología.pdf" target="_blank">
                    <img class="rounded my-2" src="./../../../assets/pdf/maestros/recursos/asignaturas/primero_segundo/3. Portada Ciencias y Tecnología.png" alt="Portada libro">
                    <h4 class="books-title">Ciencias y Tecnología</h4>
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 text-center">
                <a href="./../../../assets/pdf/maestros/recursos/asignaturas/primero_segundo/4. Historia.pdf" target="_blank">
                    <img class="rounded my-2" src="./../../../assets/pdf/maestros/recursos/asignaturas/primero_segundo/4. Portada Historia.png" alt="Portada libro">
                    <h4 class="books-title">Historia</h4>
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 text-center">
                <a href="./../../../assets/pdf/maestros/recursos/asignaturas/primero_segundo/5. Geografía.pdf" target="_blank">
                    <img class="rounded my-2" src="./../../../assets/pdf/maestros/recursos/asignaturas/primero_segundo/5. Portada Geografía.png" alt="Portada libro">
                    <h4 class="books-title">Geografía</h4>
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 text-center">
                <a href="./../../../assets/pdf/maestros/recursos/asignaturas/primero_segundo/6. Formación Cívica y Ética.pdf" target="_blank">
                    <img class="rounded my-2" src="./../../../assets/pdf/maestros/recursos/asignaturas/primero_segundo/6. Portada Formación Cívica y Ética.png" alt="Portada libro">
                    <h4 class="books-title">Formación Cívica y Ética</h4>
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 text-center">
                <a href="./../../../assets/pdf/maestros/recursos/asignaturas/primero_segundo/9. Lengua extranjera. Inglés.pdf" target="_blank">
                    <img class="rounded my-2" src="./../../../assets/pdf/maestros/recursos/asignaturas/primero_segundo/9. Programa Lengua extranjera Inglés.png" alt="Portada libro">
                    <h4 class="books-title">Lengua extranjera. Inglés</h4>
                </a>
            </div>

{{--            Segunda sección--}}

            <div class="col-12 my-5 pt-5 subtitulosAsignaturas">
                <h3>Programas 2011 para 3er año</h3>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 text-center">
                <a href="./../../../assets/pdf/maestros/recursos/asignaturas/tercero/1 Formación Cívica y  Ética 2011.pdf" target="_blank">
                    <img class="rounded my-2" src="./../../../assets/pdf/maestros/recursos/asignaturas/tercero/1 Portada Formación Cívica y  Ética 2011.png" alt="Portada libro">
                    <h4 class="books-title">Formación Cívica y  Ética 2011</h4>
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 text-center">
                <a href="./../../../assets/pdf/maestros/recursos/asignaturas/tercero/2 Ciencias 2011.pdf" target="_blank">
                    <img class="rounded my-2" src="./../../../assets/pdf/maestros/recursos/asignaturas/tercero/2 Portada Ciencias 2011.png" alt="Portada libro">
                    <h4 class="books-title">Ciencias 2011</h4>
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 text-center">
                <a href="./../../../assets/pdf/maestros/recursos/asignaturas/tercero/3 Español 2011.pdf" target="_blank">
                    <img class="rounded my-2" src="./../../../assets/pdf/maestros/recursos/asignaturas/tercero/3 Portada Español 2011.png" alt="Portada libro">
                    <h4 class="books-title">Español 2011</h4>
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 text-center">
                <a href="./../../../assets/pdf/maestros/recursos/asignaturas/tercero/4 Geografía de Mexico y del mundo 2011.pdf" target="_blank">
                    <img class="rounded my-2" src="./../../../assets/pdf/maestros/recursos/asignaturas/tercero/4 Portada Geografía de Mexico y del mundo 2011.png" alt="Portada libro">
                    <h4 class="books-title">Geografía de Mexico y del mundo 2011</h4>
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 text-center">
                <a href="./../../../assets/pdf/maestros/recursos/asignaturas/tercero/5 Historia 2011.pdf" target="_blank">
                    <img class="rounded my-2" src="./../../../assets/pdf/maestros/recursos/asignaturas/tercero/5 Portada Historia 2011.png" alt="Portada libro">
                    <h4 class="books-title">Historia 2011</h4>
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 text-center">
                <a href="./../../../assets/pdf/maestros/recursos/asignaturas/tercero/6 Inglés 2011.pdf" target="_blank">
                    <img class="rounded my-2" src="./../../../assets/pdf/maestros/recursos/asignaturas/tercero/6 Portada Inglés 2011.png" alt="Portada libro">
                    <h4 class="books-title">Inglés 2011</h4>
                </a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 text-center">
            <a href="./../../../assets/pdf/maestros/recursos/asignaturas/tercero/7 Matematicas 2011.pdf" target="_blank">
                    <img class="rounded my-2" src="./../../../assets/pdf/maestros/recursos/asignaturas/tercero/7 Portada Matematicas 2011.png" alt="Portada libro">
                    <h4 class="books-title">Matematicas 2011</h4>
                </a>
            </div>

        </div>
    </div>

@stop
