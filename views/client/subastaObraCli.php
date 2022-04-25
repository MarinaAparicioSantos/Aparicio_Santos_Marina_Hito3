<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subasta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>

<body>

    <div class="container col-12 col-sm-12 col-md-12 g-2">

        <a href="subastasCli.php" class="btn-flotante">
            < ATRAS </a>

                <h1 style="text-align: center;">Subasta de la obra [Nombre de la obra]</h1>

                <div class="row mt-5 mb-5">

                    <div class="col-12 col-sm-12 col-md-3" style="text-align: center;">

                        <div class="row g-5 mt-3 mb-3">

                            <img class="imagenPuja" src="./images/fuego.jpeg" width="50%" height="50%" />

                            <div class="col-12 col-sm-12 col-md-12">
                                <h1>Nombre</h1>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12">
                                <h2>Autor</h2>
                            </div>

                        </div>

                    </div>

                    <div class=" col-12 col-sm-12 col-md-6" style="text-align: center;">

                        <div class="row g-5 mt-3 mb-3">

                            <div class="col-12 col-sm-12 col-md-12">
                                <div class="border border-dark border-2">
                                    Contador tiempo restante
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12">
                                <div class="border border-dark border-2">
                                    Contador personas
                                </div>
                            </div>

                            <div class=" col-12 col-sm-12 col-md-6">
                                <div class="border border-dark border-2">
                                    Precio inicial
                                </div>
                            </div>

                            <div class=" col-12 col-sm-12 col-md-6">
                                <div class="border border-dark border-2">
                                    Precio actual
                                </div>
                            </div>

                            <form class="row g-3 needs-validation" novalidate>
                                <div class="row g-3 align-items-center">
                                    <div class="col-3 col-md-3">
                                        <label for="" class="col-form-label">Proponer precio</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="number" id="g" class="form-control">
                                    </div>
                                </div>


                                <div class="col-4 col-sm-4 col-md-4"></div>
                                <div class="col-3 col-sm-3 col-md-3">
                                    <a class="btn btn-primary mt-5" href="" role="button">Enviar</a>
                                </div>
                            </form>
                        </div>
                    </div>



                    <div class=" col-12 col-sm-12 col-md-2" style="text-align: center;">

                        <div class="row g-5 mt-3 mb-3">

                            <div class=" col-12 col-sm-12 col-md-6">
                                <div class="border border-dark border-2">
                                    Inicio subasta
                                </div>
                            </div>

                            <div class=" col-12 col-sm-12 col-md-6">
                                <div class="border border-dark border-2">
                                    Fin subasta
                                </div>
                            </div>
                            <div class=" col-12 col-sm-12 col-md-12">

                                <a class="btn btn-primary mt-5 btn-lg" href="reservaObraPujadaCli.php" role="button">Reservar obra</a>

                            </div>
                        </div>
                    </div>
                </div>
    </div>
    </div>
</body>

</html>