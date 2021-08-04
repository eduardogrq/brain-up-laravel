@extends('recursos.layouts.master')

@section('content')

    @if($grado === 'primer-grado')

        <div class="container-main bg-blue-light container-video-display">
            <div class="max-w">
                <div class="btn-return">
                    <div class="arrow-right">
                        <img src="./../../../assets/icons/left.svg" alt="icono">
                    </div>
                    <p>Regresar</p>
                </div>
                <div class="display-video  m-3">
                    <div class="text-video">
                        <h2>Título del Vídeo</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet feugiat lorem. Fusce sagittis id risus quis maximus. Donec feugiat, massa sed fringilla eleifend, purus felis volutpat nibh, at porta tortor enim sit amet ante. Nunc scelerisque vitae diam sed porta. Vestibulum tristique est eu commodo bibendum.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet feugiat lorem. Fusce sagittis id risus quis maximus. Donec feugiat, massa sed fringilla eleifend, purus felis volutpat nibh, at porta tortor enim sit amet ante. Nunc scelerisque vitae diam sed porta. Vestibulum tristique est eu commodo bibendum.
                        </p>
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
                    <p>Regresar</p>
                </div>
                <div class="display-video  m-3">
                    <div class="text-video">
                        <h2>Título del Vídeo</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet feugiat lorem. Fusce sagittis id risus quis maximus. Donec feugiat, massa sed fringilla eleifend, purus felis volutpat nibh, at porta tortor enim sit amet ante. Nunc scelerisque vitae diam sed porta. Vestibulum tristique est eu commodo bibendum.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet feugiat lorem. Fusce sagittis id risus quis maximus. Donec feugiat, massa sed fringilla eleifend, purus felis volutpat nibh, at porta tortor enim sit amet ante. Nunc scelerisque vitae diam sed porta. Vestibulum tristique est eu commodo bibendum.
                        </p>
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
                    <p>Regresar</p>
                </div>
                <div class="display-video  m-3">
                    <div class="text-video">
                        <h2>Título del Vídeo</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet feugiat lorem. Fusce sagittis id risus quis maximus. Donec feugiat, massa sed fringilla eleifend, purus felis volutpat nibh, at porta tortor enim sit amet ante. Nunc scelerisque vitae diam sed porta. Vestibulum tristique est eu commodo bibendum.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet feugiat lorem. Fusce sagittis id risus quis maximus. Donec feugiat, massa sed fringilla eleifend, purus felis volutpat nibh, at porta tortor enim sit amet ante. Nunc scelerisque vitae diam sed porta. Vestibulum tristique est eu commodo bibendum.
                        </p>
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
