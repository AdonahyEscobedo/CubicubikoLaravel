@extends('welcome')
@section('seccion')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categorias
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#2x2">Cubo 2x2</a></li>
                        <li><a class="dropdown-item" href="#3x3">Cubo 3x3</a></li>
                        <li><a class="dropdown-item" href="#4x4">Cubo 4x4</a></li>
                        <li><a class="dropdown-item" href="Pagina/secundaria">Ver Mas...</a></li>
                    </ul>
                </li>
                <a class="nav-link active" aria-current="page" href="https://www.youtube.com/c/CubyPuzzles">Videos</a>
            </div>
        </div>
    </div>
</nav>

<!--Contenido Carousel-->
<div class="container">
    <div class="row">
        <div class="col">
            <img src="{{ asset('img/Side.jpg') }}" class="d-block w-100">
        </div>
        <div class="col-6">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/Caru1.jpg') }}" class="d-block w-100%">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/Caru2.jpg') }}" class="d-block w-100%">
                    </div>
                    <div class="carousel-item">
                        <img src="/{{ asset('img/Caru3.jpg') }}" class="d-block w-100%">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/Caru4.jpg') }}" class="d-block w-100%">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/Caru6.jpg') }}" class="d-block w-100%">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col">
            <img src="{{ asset('img/Side.jpg') }}" class="d-block w-100">
        </div>
    </div>
</div>
<!--Contenido Cubos-->
<div class="container">
    <h1 id="2x2">Cubos 2x2</h1>
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/2x2-1.PNG') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">GAN 249 V2, 2 x 2 velocidades, cubo pequeño, rompecabezas de 2 x 2
                        pulgadas, cubo mágico de 49 mm (sin calcomanías)</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/2x2-2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">QiYi Cubo 2x2 Qi Di Rompecabezas Original Perfecto para Competencias (Negro
                        QiDi)</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/2x2-3.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">LA FABRICA DEL JUEGO Cubo Rubik 2X2 - Meilong Carbon Fiber Destreza</p>
                </div>
            </div><br>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/2x2-4.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Chacharas For Sale Cubo 2x2 Meilong Clásico Cubo Original de Alto
                        Rendimiento para Pasar el rato y/o para Competencias Rompecabezas para Todas Las Edades</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/2x2-5.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">The Amazing Smart Cube [IQ Tester] 2x2 - Anti Stress for Anti-Anxiety
                        Adults Kids - Best Rubix Puzzle Toy [Better Than Original Cube] Turns Quicker and More
                        Precisely Than Original</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/2x2-6.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">CuberSpeed MFJS Moyu RS2 M 2020 2x2 Speed Cube sin adhesivo Moyu RS2M 2020
                        Mofang Jiaoshi RS2 M Cube</p>
                </div>
            </div>
        </div>
    </div>
    <h1 id="3x3">Cubos 3x3</h1>
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/3x3-1.PNG') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">GAN 356 M, 3x3 Cubo de Velocidad Magnético Cubo Sin Pegatinas 356M Cubo
                        Magico Profesional (Lite Ver. 2020)</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/3x3-2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">CuberSpeed Moyu Meilong 3x3 M Cubo de velocidad magnético sin pegatinas
                        MFJS MEILONG 3x3x3 M Cubing Aula Meilong 3x3 M Cubo de velocidad</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/3x3-3.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Moyu Cubo 3x3 GuanLong V3 Negro Clásico Rompecabezas antiestrés para
                        Principiantes y Profesionales Speed Cube</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/3x3-4.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">MBVBN El Cubo Maestro，3x3; Agiliza tú Mente; Cubo Mágico de Competencia;
                        Giro Rápido, Suave y Resistente</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/3x3-5.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Hasbro Cubo de Rubik</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/3x3-6.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Mastery Cubo de Fibra de Carbono 3x3; Agiliza tú Mente; Cubo Profesional
                        Mágico de Competencia Speed Cube; Giro Rápido, Suave y Resistente.</p>
                </div>
            </div>
        </div>
    </div>
    <h1 id="4x4">Cubos 4x4</h1>
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/4x4-1.PNG') }}" class="card-img-top" alt="">
                <div class="card-body">
                    <p class="card-text">CuberShop YJ MGC 4 x 4 cubo de velocidad magnético sin calcomanías, YJ MGC
                        4 4x4 insignia 4 x 4 YJ MGC profesional 60 mm sin calcomanías, YongJun MGC Series Best 4x4
                        Speed Cube (YJ MGC 4 M – Sin calcomanías)</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/4x4-2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Cubo 4x4 Cobra Cubo de velocidad 4x4 speed cube Etiquetas de fibra de
                        carbono Juguete intelectual de alto rendimiento para competencias o práctica avanzada| IQ
                        Puzzle De alta calidad</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/4x4-3.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Chacharas For Sale Cubo 4x4 Moyu Negro Speed Cube Rompecabezas de Agilidad
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/4x4-4.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Moyu Cubo Rubik Cobra Meilong 4x4 Magic Cube Fibra de Carbono</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/4x4-5.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Chacharas For Sale Cubo Pro 4x4 de Velocidad para Speed Cubing sin
                        Etiquetas STICKERLESS de colección 4x4 Rompecabezas iQ Puzzle para Avanzados y Principiantes
                        Anti estrés</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/4x4-6.PNG') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Cubo 4x4 Gan 460 Nuevo</p>
                </div>
            </div>
        </div>
    </div>
</div>

@stop