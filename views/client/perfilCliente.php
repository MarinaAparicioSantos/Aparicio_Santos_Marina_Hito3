<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles autor</title>
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
                <a class="navbar-brand" href="indexCli.php">Home</a>
            </ul>

            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="autoresCli.php">Autores</a>
                </li>

            </ul>

            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="subastasCli.php">Subastas activas</a>
                </li>

            </ul>

            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="perfilCliente.php">Perfil</a>
                </li>

            </ul>

            <form class="d-flex">
                <button type="button" class="btn btn-danger btn-lg">Cerrar sesión</button>
            </form>

        </div>
    </nav>


    <div class="container col-10 g-2">

        <a href="indexCli.php" class="btn-flotante">
            < ATRAS </a>
                <div class="border border-dark border-4 mt-5 mb-5">
                    <div class="row mt-5 mb-5">
                        <div class="col-12 col-sm-12 col-md-6" style="text-align: center;">

                            <img class="productos" src="./images/fuego.jpeg" width="75%" height="75%" />
                        </div>

                        <div class=" col-12 col-sm-12 col-md-6">

                            <div class="row g-5 mt-3 mb-3">

                                <div class="col-12 col-sm-12 col-md-12">
                                    <h3>Nombre Apellido1 Apellido2</h3>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12">
                                    <h5>Cantidad de obras compradas</h5>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12">
                                    <h5>Presentación Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit itaque voluptas inventore tempore suscipit ut non culpa, velit doloribus dolores impedit ipsum labore dolore quae ducimus vitae minima libero tenetur!</h5>
                                </div>

                                <div class=" col-12 col-sm-12 col-md-6">

                                    <div class="col-12 col-sm-12 col-md-12">
                                        <h5>Correo</h5>
                                    </div>

                                </div>
                                <div class=" col-12 col-sm-12 col-md-6">

                                    <a class="btn btn-primary mt-5" href="editarPerfilCliente.php" role="button">Editar perfil</a>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
    </div>

    <div class="row footer">

        <div class="col-12 col-md-12 bg-secondary">
            <h4 class="mt-4"></h4>
        </div>
    </div>

</body>

</html>