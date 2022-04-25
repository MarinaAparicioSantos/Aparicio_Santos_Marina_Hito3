<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>

<body>
    <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container-fluid">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <a class="navbar-brand" href="indexArt.php">Home</a>
            </ul>

            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="subastasAutorArt.php">Mis subastas</a>
                </li>
            </ul>

            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="perfilArtistaArt.php">Perfil</a>
                </li>
            </ul>

            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="editarCrearObra">Crear obra</a>
                </li>
            </ul>

            <form class="d-flex">
                <button type="button" class="btn btn-danger btn-lg">Cerrar sesión</button>
            </form>

        </div>
    </nav>

    <br>

    <!-- Carrusel -->

    <div class="container col-12 col-sm-12 col-md-6 mt-5 mb-5">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">


                    <div class="container">
                        <img src="images\a.jpeg" class="d-block w-100 rounded-3" width="500px" height="500px">
                        <div class="carousel-caption text-start">
                            <h1>Example headline.</h1>
                            <p>Some representative placeholder content for the first slide of the carousel.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">


                    <div class="container">
                        <img src="images\a.jpeg" class="d-block w-100 rounded-3" width="500px" height="500px">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Some representative placeholder content for the second slide of the carousel.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">


                    <div class="container">
                        <img src="images\a.jpeg" class="d-block w-100 rounded-3" width="500px" height="500px">
                        <div class="carousel-caption text-end">
                            <h1>One more for good measure.</h1>
                            <p>Some representative placeholder content for the third slide of this carousel.</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Catalogo -->

    <div class="row productosFila1">

        <div class="col-12 col-sm-12 col-md-4 mt-5 mb-5">

            <div class="mx-auto bg-secondary card" style="text-align: center; width: 18rem;">

                <div class="card-body">
                    <img class="productos" width="200px" height="200px" src="images/niñoQuitandoAstilla.jpeg" />

                    <h5 class="titulo mt-3">Nombre</h5>

                    <h5><span class="rebajas mt-3">Autor</span></h5>

                    <a class="btn btn-primary" href="detallesObraArt.php" role="button">Detalles</a>

                </div>
            </div>

        </div>

        <br>


        <div class="col-12 col-sm-12 col-md-4 mt-5 mb-5">

            <div class="mx-auto bg-secondary card" style="text-align: center; width: 18rem;">

                <div class="card-body">
                    <img class="productos" width="200px" height="200px" src="images/niñoQuitandoAstilla.jpeg" />

                    <h5 class="titulo mt-3">Nombre</h5>

                    <h5><span class="rebajas mt-3">Autor</span></h5>

                    <a class="btn btn-primary" href="detallesObraArt.php" role="button">Detalles</a>

                </div>
            </div>

        </div>

        <br>


        <div class="col-12 col-sm-12 col-md-4 mt-5 mb-5">

            <div class="mx-auto bg-secondary card" style="text-align: center; width: 18rem;">

                <div class="card-body">
                    <img class="productos" width="200px" height="200px" src="images/niñoQuitandoAstilla.jpeg" />

                    <h5 class="titulo mt-3">Nombre</h5>

                    <h5><span class="rebajas mt-3">Autor</span></h5>

                    <a class="btn btn-primary" href="detallesObraArt.php" role="button">Detalles</a>

                </div>
            </div>

        </div>

        <br>

    </div>


    <div class="row footer">

        <div class="col-12 bg-secondary">
            <h4 class="mt-4"></h4>
        </div>
    </div>

</body>

</html>