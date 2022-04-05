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
                <a class="nav-link active" aria-current="page" href="/">Regresar</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categorias
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#Mega">Megaminx</a></li>
                        <li><a class="dropdown-item" href="#Pira">Piramix</a></li>
                        <li><a class="dropdown-item" href="#Otros">Otros</a></li>
                    </ul>
                </li>
                <a class="nav-link active" aria-current="page" href="https://www.youtube.com/c/CubyPuzzles">Videos</a>
            </div>
        </div>
    </div>
</nav>
<!--Contenido Cubos-->
<div class="container">
    <h1 id="Mega">Megaminx</h1>
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/Mega1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Megaminx Speed Cube, Pentagonal Dodecaedro Cubo de Juguete Rompecabezas
                        (Qiheng Negro)</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/Mega2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">CuberSpeed Qiyi Megaminx Black Magic Cube Mofangge QiYi QiHeng Black
                        Megaminx Magic Cube)</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/Mega3.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">CuberSpeed Shengshou 2x2 Megaminx Black Speed Cube Shengshou Kilominx
                        Megaminx 2x2 Cubo de velocidad negro</p>
                </div>
            </div><br>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/Mega4.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Geekmania Mx Cubo Rubik De 12 Caras Mecanismo Suave 3x3 Megaminx Cube
                        Puzzle</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/Mega5.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Moyu Megaminx Original Suave Rompecabezas de 12 Caras Dodecaedro Variación
                        de Cubo clásico 3x3 Pero más complicada, excelente para Pasar el rato (Stickerless)</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/Mega6.PNG') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Cubo Rubik Moyu Megaminx 3x3 Cobra Dodecaedro</p>
                </div>
            </div>
        </div>
    </div>
    <h1 id="Pira">Piramix</h1>
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/Pyra1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Cubo de velocidad pirámide 3 x 3 triángulo mágico rompecabezas juguete
                        negro</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/Pyra2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Piramide Rubik Profesional 3x3 Toygon. Agarre de fibra de carbono
                        lubricado, alta Velocidad, alta Durabilidad. Rompecabezas para niños y adultos. Mejora tu
                        inteligencia, activa la imaginación y creatividad. Giro rápido, Suave y resistente.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/Pyra3.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">LA FABRICA DEL JUEGO Rubik Pyraminx Carbon Fiber 3X3 Destreza</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/Pyra4.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Moyu Cubo Rubik Piramide Pyraminx Meilong Magic Cube Colored</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/Pyra5.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">cuberspeed QiYi Qiming Pyramid Stickerless Magic Cube MoFangGe Qiming
                        Pyramid Stickerless Speed Cube</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/Pyra6.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">CuberSpeed MoYu - Cubo magnético piramínico piramínico sin pegatinas,
                        diseño de pirámide</p>
                </div>
            </div>
        </div>
    </div>
    <h1 id="Otros">Otros Cubos y Pusles</h1>
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/R1.jpg') }}" class="card-img-top" alt="">
                <div class="card-body">
                    <p class="card-text">Chacharas For Sale Cubo Six Spot Qiyi Original, Gira lateralmente
                        Rompecabezas para Colección (Stickerless)</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/R2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Moyu Mastermorphix 3x3 Cubo Profesional Stickerless Speed Cube Variación
                        Genial para Pasar el rato, más complicado Que el clásico 3x3</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/R3.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">CuberSpeed Twist 3x3 stickerelss Speed Cube</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/R4.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">cuberspeed YJ Yeet Ball stickerless Cube Puzzle Ball Ivy Ball Cube</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/R5.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Chacharas For Sale Cubo 3x3 Gear Stickerless Cubo de engranes sin Etiquetas
                        Anti Estrés Un Rompecabezas Especial. Cubo increíble.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/R6.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Chacharas For Sale Qiyi Cubo Mirror Rompecabezas Original Variación para
                        coleccionar - Cubo de Espejo Profesional (Dorado)</p>
                </div>
            </div>
        </div>
    </div>
</div>

@stop