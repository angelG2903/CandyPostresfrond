<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <title>Pedidos</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light color-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Candy Postres</a>

            <div class="dropdown me-sm-2 me-lg-3 "> <!-- checar -->
                <button class=" dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-fill"></i>Nombre de usuario
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="home.html"><i class="bi bi-house"></i>Inicio</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-in-right"></i>Cerrar sesión</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="row mb-4 d-flex justify-content-start">

            <div class="col-sm-12 col-lg-6 mt-4">
                <div class="card text-white" style="max-width: 30rem;">
                    <div class="card-header tarjeta-color-header">
                        <div class="row">
                            <div class="col-lg-8">Nombre del cliente</div>
                            <div class="col-lg-4 d-lg-flex justify-content-end">Fecha</div>
                        </div>
                    </div>
                    <div class="card-body text-black tarjeta-color-body">
                        <p class="card-text">Sabor</p>
                        <p class="card-text">Relleno</p>
                        <p class="card-text">Anticipo</p>
                        <div class="row ">
                            <div class="col-8">
                                <p class="card-text">Restan</p>
                            </div>
                            <div class="col-4 d-flex justify-content-end">
                                <button type="button" class="btn-blue-boton btn-color-azul-b" data-bs-toggle="modal" data-bs-target="#vermas">
                                    Ver más
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-lg-6 mt-4">
                <div class="card text-white" style="max-width: 30rem;">
                    <div class="card-header tarjeta-color-header">
                        <div class="row">
                            <div class="col-lg-8">Nombre del cliente</div>
                            <div class="col-lg-4 d-lg-flex justify-content-end">Fecha</div>
                        </div>
                    </div>
                    <div class="card-body text-black tarjeta-color-body">
                        <p class="card-text">Sabor</p>
                        <p class="card-text">Relleno</p>
                        <p class="card-text">Anticipo</p>
                        <div class="row ">
                            <div class="col-8">
                                <p class="card-text">Restan</p>
                            </div>
                            <div class="col-4 d-flex justify-content-end">
                                <button type="button" class="btn-blue-boton btn-color-azul-b" data-bs-toggle="modal" data-bs-target="#vermas">
                                    Ver más
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



        </div>


    </div>

    <!-- Modal Ver más -->
    <div class="modal fade" id="vermas" tabindex="-1" aria-labelledby="vermasLabel" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content " style="background: transparent;border: none;">

                <div class="modal-header color-navbar br-modal-top">
                    <h5 class="modal-title" id="vermasLabel">Más detalles</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body color-modal br-modal-bot">

                    <div class="row mb-3">
                        <div class="col-9">Nombre del cliente</div>
                        <div class="col-3 d-lg-flex justify-content-end">Precio</div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-9">Número de teléfono</div>
                        <div class="col-3 d-lg-flex justify-content-end">Anticipo</div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-9">Sabor</div>
                        <div class="col-3 d-lg-flex justify-content-end">Restan</div>
                    </div>

                    <p>Dirección</p>
                    <p>Relleno</p>
                    <p>Rebanadas</p>
                    <p>Decoración</p>
                    <p>Fecha de entrega:</p>
                    <p>Hora de entrega:</p>

                    <div class="row mt-5 mb-2">

                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn-blue-boton btn-color-rojo" data-bs-dismiss="modal">Cancelar</button>

                            <div class="d-flex justify-content-end">
                                <a href="registrarP.php" class="btn-blue-boton btn-color-azul me-3 px-3">Editar</a>
                                <button type="button" class="btn-blue-boton btn-color-verde px-3" data-bs-dismiss="modal">Pagar</button>
                            </div>
                        </div>

                    </div>


                </div>

            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>