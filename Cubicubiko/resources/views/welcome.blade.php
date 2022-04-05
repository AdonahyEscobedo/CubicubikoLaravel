<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('estilos/Estilos.css') }}">
    <title>Pagina Principal </title>
</head>

<body>
    <!--Barra Principal-->
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/Logo.png') }}" alt="" width="50" height="44" class="d-inline-block align-text-top">
                CUBICUBIKO
            </a>
        </div>
    </nav>

    @yield('seccion')

      <!--Footer-->
      <footer id="footer" class="pb-4 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg">
                    <div class="row">
                        <div class="col-12 col-lg">

                            <div class="row">
                                <div class="col-12 col-lg-12 col-med-12">
                                    <h5>CUBICUBIKOS</h5>
                                </div>
                            </div>

                        </div>

                        <div class="col-12 col-lg">
                            <a href="#">Preguntas frecuentes</a>
                        </div>

                        <div class="col-12 col-lg">
                            <a href="#">Acerca de Nosotros</a>
                        </div>
                    </div>
                </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>