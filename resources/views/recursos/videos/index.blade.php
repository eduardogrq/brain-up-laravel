@extends('recursos.layouts.master')

@section('content')

    @if($grado === 'primer-grado')
        <div class="container-main bg-blue-light container-video-display">
            <div class="max-w">
                <div class="btn-return">
                    <div class="arrow-right">
                        <img src="./../../../assets/icons/left.svg" alt="icono">
                    </div>
                    <p><a href="{{route('index')}}" style="text-decoration: none; color: black">Regresar</a></p>
                </div>
                <div class="display-video w-100 m-3">
                    <div class="text-video d-flex flex-column justify-content-center align-items-center">
                        <div ><h2>Guiones Didácticos Tutoriales</h2></div>
                        <div ><h2>PRIMER GRADO</h2></div>



                        <div class="next-btn">
                            <a href="{{route('index')}}">
                                <button onclick="first()">Siguiente</button>
                            </a>

                        </div>
                    </div>
                    <video src="./../../../assets/pdf/primero/GDT_S_1er Año Video.mp4" poster="presentacion.jpg" class="video" autoplay controls></video>
                </div>
            </div>
        </div>
    @elseif($grado === 'segundo-grado')
        <div class="container-main bg-blue-light container-video-display">
            <div class="max-w">
                <div class="btn-return">
                    <div class="arrow-right">
                        <img src="./../../../assets/icons/left.svg" alt="icono">
                    </div>
                    <p><a href="{{route('index')}}" style="text-decoration: none; color: black">Regresar</a></p>
                </div>
                <div class="display-video w-100 m-3">
                    <div class="text-video d-flex flex-column justify-content-center align-items-center">
                        <div ><h2>Guiones Didácticos Tutoriales</h2></div>
                        <div ><h2>SEGUNDO GRADO</h2></div>

                        <div class="next-btn">
                            <a onclick="second()" href="{{route('index')}}">
                                <button >Siguiente</button>
                            </a>

                        </div>
                    </div>
                    <!-- <div class="video">

                    </div> -->
                    <video src="./../../../assets/pdf/primero/GDT_S_1er Año Video.mp4" poster="presentacion.jpg" class="video" autoplay controls></video>
                </div>
            </div>
        </div>
    @elseif($grado === 'tercer-grado')
        <div class="container-main bg-blue-light container-video-display">
            <div class="max-w">
                <div class="btn-return">
                    <div class="arrow-right">
                        <img src="./../../../assets/icons/left.svg" alt="icono">
                    </div>
                    <p><a href="{{route('index')}}" style="text-decoration: none; color: black">Regresar</a></p>
                </div>
                <div class="display-video w-100 m-3">
                    <div class="text-video d-flex flex-column justify-content-center align-items-center">
                        <div ><h2>Guiones Didácticos Tutoriales</h2></div>
                        <div ><h2>TERCER GRADO</h2></div>

                        <div class="next-btn">
                            <a onclick="third()" href="{{route('index')}}">
                                <button>Siguiente</button>
                            </a>

                        </div>
                    </div>
                    <!-- <div class="video">

                    </div> -->
                    <video src="./../../../assets/pdf/primero/GDT_S_1er Año Video.mp4" poster="presentacion.jpg" class="video" autoplay controls></video>
                </div>
            </div>
        </div>
    @else
        <div class="container">
            <div class="row d-flex justify-content-center">
                <h1>404 - Página no encontrada</h1>
            </div>
        </div>

    @endif

@stop
