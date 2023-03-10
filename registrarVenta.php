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

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


    <title>Registrar Venta</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">

            <div class="sidebar-heading border-bottom">
                <p class="fs-3 my-2 ti">Opciones</p>
            </div>
            <div class="list-group list-group-flush mt-3">
                <a class="list-group-item  fw-bold" data-bs-toggle="modal" data-bs-target="#registrarP"><i class="fa-solid fa-cake-candles me-2"></i>Venta Pastel</a>
                <a class="list-group-item  fw-bold mt-2" data-bs-toggle="modal" data-bs-target="#vela"><i class="bi bi-plus-circle-fill me-2"></i>Venta Velitas</a>
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
                            <li><a class="dropdown-item" href="home.html">Inicio</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Cerrar sesi??n</a></li>
                        </ul>
                    </div>


                </div>


            </nav>
            <!-- Contenido de la pagina -->
            <div class="container">

                <!-- Tabla de los pasteles d-flex justify-content-center-->
                <div class="row mt-4 d-flex justify-content-center">
                    <div class="col-sm-12 col-lg-10 table-responsive-sm">

                        <h5>Pasteles Vendidos</h5>
                        <table class="table table-borderless">
                            <thead class="color-thead-p">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Sabor</th>
                                    <th scope="col">Tama??o</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Etiqueta</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="color-border-b">
                                    <th scope="row">1</th>
                                    <td>3 Leches</td>
                                    <td>Grande</td>
                                    <td>05/02/2023</td>
                                    <td>Lunes</td>
                                    <td>320</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a class="f-icon-edit mx-2"><i class="bi bi-pencil"></i></a>
                                            <a class="f-icon-delete"><i class="bi bi-trash"></i></a>

                                        </div>
                                    </td>
                                </tr>
                                <tr class="color-border-b">
                                    <th scope="row">2</th>
                                    <td>Chocolate</td>
                                    <td>Mediano</td>
                                    <td>05/02/2023</td>
                                    <td>Martes</td>
                                    <td>300</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a class="f-icon-edit mx-2"><i class="bi bi-pencil"></i></a>
                                            <a class="f-icon-delete"><i class="bi bi-trash"></i></a>

                                        </div>
                                    </td>

                                </tr>
                                <tr class="color-footer-b">
                                    <th scope="row" colspan="5">Total</th>
                                    <td colspan="2" class="fw-bold">620</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>

                <!-- Tabla velitas -->
                <div class="row  mt-4 d-flex justify-content-center table-responsive-sm">
                    <div class="col-sm-12 col-md-7 col-lg-5">

                        <h5>Velas vendidas</h5>
                        <table class="table table-borderless">
                            <thead class="color-thead-p">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="color-border-b">
                                    <th scope="row">1</th>
                                    <td>Velita N??mero</td>
                                    <td>20</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a class="f-icon-edit mx-2"><i class="bi bi-pencil"></i></a>
                                            <a class="f-icon-delete"><i class="bi bi-trash"></i></a>

                                        </div>
                                    </td>
                                </tr>
                                <tr class="color-border-b">
                                    <th scope="row">2</th>
                                    <td>Vela Magi</td>
                                    <td>15</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a class="f-icon-edit mx-2"><i class="bi bi-pencil"></i></a>
                                            <a class="f-icon-delete"><i class="bi bi-trash"></i></a>

                                        </div>
                                    </td>
                                </tr>
                                <tr class="color-footer-b">
                                    <th scope="row" colspan="2">Total</th>
                                    <td colspan="2" class="fw-bold">35</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>

                <div class="row d-flex justify-content-center mt-4 mb-5 mx-2">

                    <div class="col-sm-12 col-lg-6 total-venta d-flex justify-content-between py-1">
                        <h4 class="mb-0 ps-2">Total: 995</h4>
                        <h4 class="mb-0 pe-2">04/02/2023</h4>
                    </div>

                </div>

            </div>


        </div>


    </div>
    <!-- /#page-content-wrapper -->
    <footer></footer>


    <!-- Modal Registrar venta  pastel-->
    <div class="modal fade" id="registrarP" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="background: transparent;border: none;">
                <div class="modal-header color-navbar br-modal-top">
                    <h5 class="modal-title" id="exampleModalLabel">Venta Pastel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body color-modal br-modal-bot">

                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Sabor</label>
                            <select class="form-select borde" aria-label="Default select example" id="sabor" required>
                                <option selected>Seleccione un sabor</option>
                                <option value="1">3 leches</option>
                                <option value="2">Combinado</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tama??o</label>
                            <select class="form-select borde" aria-label="Default select example" id="tama" required>
                                <option selected>Seleccione un tama??o</option>
                                <option value="1">Grande</option>
                                <option value="2">Mediano</option>
                                <option value="3">Chico</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tamano" class="form-label">Etiqueta</label>
                            <select class="form-select borde" aria-label="Default select example" id="etiqueta" required>
                                <option selected>Seleccione la etiqueta</option>
                                <option value="1">Lunes</option>
                                <option value="2">Martes</option>
                                <option value="3">Miercoles</option>
                                <option value="4">Jueves</option>
                                <option value="5">Viernes</option>
                                <option value="6">Sabado</option>
                                <option value="7">Domingo</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Precio</label>
                            <input type="number" class="form-control borde" id="exampleInputPassword1">
                        </div>
                        <div class="d-flex justify-content-end mt-5 mb-2">
                            <button type="button" class="btn-blue-boton btn-color-rojo me-3" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn-blue-boton btn-color-azul px-3 me-1" data-bs-dismiss="modal">Registrar</button>

                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>


    <!-- Modal venta Velas -->
    <div class="modal fade" id="vela" tabindex="-1" aria-labelledby="velasLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="background: transparent;border: none;">
                <div class="modal-header color-navbar br-modal-top">
                    <h5 class="modal-title" id="velasLabel">Venta Velitas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body color-modal br-modal-bot">

                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nombre</label>
                            <select class="form-select borde" aria-label="Default select example" id="nombre" required>
                                <option selected>Seleccione una opci??n</option>
                                <option value="1">Vela n??mero</option>
                                <option value="2">Vela Magi</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-end mt-4 mb-2">
                            <button type="button" class="btn-blue-boton btn-color-rojo me-3" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn-blue-boton btn-color-azul px-3 me-1" data-bs-dismiss="modal">Registrar</button>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>





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