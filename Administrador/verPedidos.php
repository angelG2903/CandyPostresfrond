<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <script src="https://kit.fontawesome.com/d153a032a1.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


    <title>Ver pedidos</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">

            <div class="sidebar-heading border-bottom">
                <p class="fs-3 my-2 ti">Opciones</p>
            </div>
            <div class="list-group list-group-flush mt-3">

                <a class="list-group-item  fw-bold" data-bs-toggle="modal" data-bs-target="#registrarP"><i class="fa-solid fa-cake-candles me-2"></i>Inventario</a>
                <a class="list-group-item  fw-bold mt-2" data-bs-toggle="modal" data-bs-target="#vela"><i class="bi bi-plus-circle-fill me-2"></i>Registrar usuarios</a>
                <a class="list-group-item  fw-bold mt-2" data-bs-toggle="modal" data-bs-target="#vela"><i class="bi bi-plus-circle-fill me-2"></i>Pedidos</a>

            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light color-navbar justify-content-between">
                <div class="container-fluid">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-align-left color-icon fs-4 me-3 ms-3" id="menu-toggle"></i>
                        <p class="fs-3 m-0 ti" id="desap">Candy Postres</p>
                    </div>


                    <div class="dropdown me-sm-2 me-lg-3 "> <!-- checar -->

                        <button class=" dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-fill"></i>Angel
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="index.html">Inicio</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Cerrar sesión</a></li>
                        </ul>
                    </div>

                </div>


            </nav>
            <!-- Contenido de la pagina -->
            <div class="container">

                <div class="row d-flex justify-content-center mt-4 ">
                    <div class="col-10">
                        <form>
                            <div class="row">
                                <div class="col-sm-12 col-lg-auto">
                                    <label for="opciones" class="form-label">Opciones</label>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-5">
                                    <select class="form-select borde" aria-label="Default select example" id="opciones" required>
                                        <option selected>Seleccione una opción</option>
                                        <option value="1">Pedidos pendientes</option>
                                        <option value="2">Pedidos realizados</option>
                                    </select>
                                </div>

                                <div class="d-none d-md-block col-md-auto col-lg-auto">
                                    <button type="submit" class="btn-blue-boton btn-color-azul">Submit</button>
                                </div>
                            </div>
                            <div class="row mt-2 ">
                                <div class="col-12 d-md-none d-flex justify-content-center">
                                    <button type="submit" class="btn-blue-boton btn-color-azul">Submit</button>
                                </div>
                            </div>


                        </form>
                    </div>


                </div>

                <!-- pedidos -->
                <div class="row mt-5 d-flex justify-content-center">

                    <div class="col-sm-12 col-lg-6">
                        <div class="card text-white" style="max-width: 40rem;">
                            <div class="card-header tarjeta-color-header">
                                <div class="row">
                                    <div class="col-lg-8">Nombre del cliente</div>
                                    <div class="col-lg-4 d-lg-flex justify-content-end">Precio</div>
                                </div>
                            </div>
                            <div class="card-body text-black tarjeta-color-body">
                                <p class="card-text">Número de teléfono</p>
                                <p class="card-text">Sabor</p>
                                <p class="card-text">Relleno</p>
                                <p class="card-text">Rebanadas</p>
                                <p class="card-text">Decoración</p>
                                <p class="card-text">Dirección</p>
                                <div class="row mb-3">
                                    <div class="col-8">
                                        <p class="card-text">Fecha de entrega:</p>
                                    </div>
                                    <div class="col-3 ">
                                        <p class="card-text">Anticipo</p>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-8">
                                        <p class="card-text">Hora de entrega:</p>
                                    </div>
                                    <div class="col-3">
                                        <p class="card-text">Restan</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </div>


    </div>
    <!-- /#page-content-wrapper -->
    <!-- </div> -->
    <footer></footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        var el = document.getElementById("wrapper");
        var des = document.getElementById("desap"); /* para candy */
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>


</html>