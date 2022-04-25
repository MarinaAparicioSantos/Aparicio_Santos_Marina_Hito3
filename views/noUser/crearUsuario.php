<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="clientArtist.js"></script>
</head>

<body>

    <div class="row col-12 col-md-12">

        <div class="col-3 col-sm-3 col-md-4"></div>
        <div class="col-12 col-sm-12 col-md-6 ajustarCliente" style="display:none;"></div>

        <div class="col-12 col-sm-12 col-md-5 mt-5 mb-5 offset-md-1">

            <form class="row g-3 needs-validation" novalidate>
                <h1>Editar perfil</h1>

                <a href="index.php" class="btn-flotante">
                    < ATRAS </a>

                        <div class="row g-3 align-items-center">
                            <div class="col-3">
                                <label for="" class="col-form-label">DNI</label>
                            </div>
                            <div class="col-auto">
                                <input type="text" id="a" class="form-control" aria-describedby="passwordHelpInline">
                            </div>
                        </div>

                        <div class="row g-3 align-items-center">
                            <div class="col-3">
                                <label for="" class="col-form-label">Nombre de usuario</label>
                            </div>
                            <div class="col-auto">
                                <input type="text" id="b" class="form-control" aria-describedby="passwordHelpInline">
                            </div>
                        </div>

                        <div class="row g-3 align-items-center">
                            <div class="col-3">
                                <label for="" class="col-form-label">Contraseña</label>
                            </div>
                            <div class="col-auto">
                                <input type="password" id="c" class="form-control" aria-describedby="passwordHelpInline">
                            </div>
                        </div>

                        <div class="row g-3 align-items-center">
                            <div class="col-3">
                                <label for="" class="col-form-label">Nombre propio</label>
                            </div>
                            <div class="col-auto">
                                <input type="text" id="d" class="form-control" aria-describedby="passwordHelpInline">
                            </div>
                        </div>

                        <div class="row g-3 align-items-center">
                            <div class="col-3">
                                <label for="" class="col-form-label">Apellido 1</label>
                            </div>
                            <div class="col-auto">
                                <input type="text" id="e" class="form-control" aria-describedby="passwordHelpInline">
                            </div>
                        </div>

                        <div class="row g-3 align-items-center">
                            <div class="col-3">
                                <label for="" class="col-form-label">Apellido 2</label>
                            </div>
                            <div class="col-auto">
                                <input type="text" id="f" class="form-control" aria-describedby="passwordHelpInline">
                            </div>
                        </div>


                        <div class="row g-3 align-items-center">
                            <div class="col-3">
                                <label for="" class="col-form-label">Correo</label>
                            </div>
                            <div class="col-auto">
                                <input type="text" id="g" class="form-control" aria-describedby="passwordHelpInline">
                            </div>
                        </div>


                        <div class="col-8 col-md-8">
                            <div class="col-3">
                                <label for="" class="col-form-label">Imagen de perfil</label>
                            </div>
                            <input type="file" class="form-control" aria-label="file example" required>
                            <div class="invalid-feedback">Es obligatorio</div>
                        </div>


                        <div class="col-8 col-md-8">
                            <div class="col-3">
                                <label for="" class="col-form-label">Presentación</label>
                            </div>
                            <textarea class="form-control" id="validationTextarea" placeholder="Required example textarea" rows="4" cols="10" required></textarea>
                        </div>




                        <div class="col-6 col-md-6">
                            <select class="form-select" size="2">
                                <option class="cliente" value="cliente">Cliente</option>
                                <option class="artista" value="artista">Artista</option>
                            </select>
                        </div>

                        <div class="col-6 offset-md-5 mt-5 mb-5">
                            <button class="btn btn-secondary" type="submit">Enviar</button>
                        </div>
            </form>

        </div>

        <div class="col-3 col-sm-3 col-md-1"></div>

        <div class="col-12 col-sm-12 col-md-3 mt-5 mb-5 artistaMostrar" style="display:none;">

            <form class="row g-3 needs-validation" novalidate>

                <div class="row g-3 align-items-center">
                    <div class="col-3">
                        <label for="" class="col-form-label">Nombre artístico</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="h" class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                </div>

                <div class="col-8 col-md-8 align-items-center">
                    <div class="col-3">
                        <label for="" class="col-form-label">Técnicas</label>
                    </div>
                    <textarea class="form-control" id="r" placeholder="Required example textarea" rows="10" cols="10" required></textarea>
                </div>

                <div class="row g-3 align-items-center">
                    <div class="col-3">
                        <label for="" class="col-form-label">Red social</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="i" class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                </div>

                <div class="row g-3 align-items-center">
                    <div class="col-3">
                        <label for="" class="col-form-label">Fecha de comienzo</label>
                    </div>
                    <div class="col-auto">
                        <input type="date" id="j" class="form-control" aria-describedby="passwordHelpInline">
                    </div>
                </div>



            </form>

        </div>

    </div>

</body>

</html>