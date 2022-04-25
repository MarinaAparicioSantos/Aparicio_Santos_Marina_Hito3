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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="login.js"></script>


</head>

<?php

include "../../models/model.php";
$errorUsuarioContrasenya = "";
$errorUsuario = "";
session_start();


if (empty($_SESSION["tipo"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = $_POST["user"];
        $user = strip_tags($user);
        $user = stripslashes($user);
        $user = htmlspecialchars($user);

        $contrasenya = $_POST["pass"];
        $contrasenya = strip_tags($contrasenya);
        $contrasenya = stripslashes($contrasenya);
        $contrasenya = htmlspecialchars($contrasenya);


        $dniRegistrado = obtenerUsuario($user);
        if ($dniRegistrado) {

            if (password_verify($contrasenya, $dniRegistrado["contrasenya"])) {

                $_SESSION["tipo"] = $dniRegistrado["tipo"];

                $_SESSION["dni"] = $dniRegistrado["dni"];

                if (isset($_SESSION["tipo"]) && isset($_SESSION["dni"])) {
                    header("Location: index.php");
                }
            } else {
                $errorUsuarioContrasenya = "Contraseña incorrecta";
            }
        } else {
            $errorUsuario = "Usuario incorrecto";
        }
    }
} else if (isset($_SESSION["tipo"]) && isset($_SESSION["dni"])) {
    header("Location: index.php");
}

?>

<body>

    <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container-fluid">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <a class="navbar-brand" href="index.php">Home</a>
            </ul>

            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="autores.php">Autores</a>
                </li>

            </ul>

            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="subastas.php">Subastas activas</a>
                </li>

            </ul>
            <form class="d-flex">
                <button type="button" class="btn btn-danger btn-lg loginButton">Iniciar sesión</button>

            </form>

        </div>
    </nav>

    <br>

    <div class="row">
        <div class="col-3 col-sm-3 col-md-9"></div>
        <div class="col-3 col-sm-3 col-md-3 login" style="display: none;">

            <div class="col-12 col-sm-12 col-md-4 mt-5 mb-5">

                <div class="mx-auto bg-secondary card" style="text-align: center; width: 18rem;">

                    <div class="card-body">
                        <form class="row g-3 needs-validation" novalidate>

                            <h3>Inicio de sesión</h3>

                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label for="" class="col-form-label">Nombre de usuario</label>
                                </div>
                                <div class="col-auto">
                                    <input name = "user" type="text" id="b" class="form-control" aria-describedby="passwordHelpInline">
                                </div>
                            </div>

                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label for="" class="col-form-label">Contraseña</label>
                                </div>
                                <div class="col-auto">
                                    <input name = "pass" type="password" id="c" class="form-control" aria-describedby="passwordHelpInline">
                                </div>
                            </div>

                            <a class="btn btn-primary" type="submit" role="button">Enviar</a>
                            <!-- <p><input type="submit" value="Iniciar Sesion" /></p> -->
                            <span><?php echo $errorUsuarioContrasenya, $errorUsuario; ?></span>
                        </form>

                        <a class="" href="crearUsuario.php">
                            <p class="text-dark">¿No tienes cuenta?</p>
                            <p class="text-dark">Regístrate aquí.</p>
                        </a>

                    </div>
                </div>

            </div>


        </div>
    </div>
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

                    <a class="btn btn-primary" href="detallesObra.php" role="button">Detalles</a>

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

                    <a class="btn btn-primary" href="detallesObra.php" role="button">Detalles</a>

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

                    <a class="btn btn-primary" href="detallesObra.php" role="button">Detalles</a>

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