<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <script src="https://kit.fontawesome.com/d153a032a1.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


    <title>Registar usuarios</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">

            <div class="sidebar-heading border-bottom">
                <p class="fs-3 my-2 ti">Opciones</p>
            </div>
            <div class="list-group list-group-flush mt-3">

                <a class="list-group-item  fw-bold" data-bs-toggle="modal" data-bs-target="#registrarP"><i
                        class="fa-solid fa-cake-candles me-2"></i>Inventario</a>
                <a class="list-group-item  fw-bold mt-2" data-bs-toggle="modal" data-bs-target="#vela"><i
                        class="bi bi-plus-circle-fill me-2"></i>Registrar usuarios</a>
                <a href="verPedidos.php" class="list-group-item  fw-bold mt-2"><i
                        class="bi bi-plus-circle-fill me-2"></i>Pedidos</a>

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

                <div class="row mt-4 me-1">
                    <div class="d-flex justify-content-end">
                        <a href="" class="btn-blue-boton btn-color-azul" data-bs-toggle="modal" data-bs-target="#registrarUsuarios">Agregar usuario</a>
                    </div>

                </div>

                <!-- Tabla de los pasteles d-flex justify-content-center-->
                <div class="row mt-2 d-flex justify-content-center">
                    <div class="col-sm-12 col-lg-10 table-responsive-sm">
                        <h5>Usuarios registrados</h5>
                        <table class="table table-borderless">
                            <thead class="color-thead-p">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellidos</th>
                                    <th scope="col">Teléfono</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="color-border-b">
                                    <th scope="row">1</th>
                                    <td>Angel</td>
                                    <td>Muñoz Chávez</td>
                                    <td>2241164050</td>
                                    <td>angel@gmail.com</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a class="f-icon-edit mx-2"><i class="bi bi-pencil"></i></a>
                                            <a class="f-icon-delete"><i class="bi bi-trash"></i></a>

                                        </div>
                                    </td>
                                    
                                </tr>
                                <tr class="color-border-b">
                                    <th scope="row">2</th>
                                    <td>Pedro</td>
                                    <td>Castro Adan</td>
                                    <td>2251168952</td>
                                    <td>pedro@gmail.com</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a class="f-icon-edit mx-2"><i class="bi bi-pencil"></i></a>
                                            <a class="f-icon-delete"><i class="bi bi-trash"></i></a>

                                        </div>
                                    </td>
                                    

                                </tr>
                                <!-- <tr class="color-footer-b">
                                    <th scope="row" >3</th>
                                    <td colspan="5"></td>
                                </tr> -->
                            </tbody>
                        </table>

                    </div>
                </div>

               

            </div>

        </div>


    </div>
    <!-- /#page-content-wrapper -->
    <!-- </div> -->
    <footer></footer>



    <!-- Modal Registrar usuario-->
    <div class="modal fade" id="registrarUsuarios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="background: transparent;border: none;">
                <div class="modal-header color-navbar br-modal-top">
                    <h5 class="modal-title" id="exampleModalLabel">Registrar usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body color-modal br-modal-bot">

                    <form>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nombre</label>
                            <input type="text" class="form-control borde" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Apellidos</label>
                            <input type="text" class="form-control borde" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Teléfono</label>
                            <input type="number" class="form-control borde" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Correo</label>
                            <input type="email" class="form-control borde" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                            <input type="password" class="form-control borde" id="exampleInputPassword1">
                        </div>
                        <div class="d-flex justify-content-end mt-5 mb-2">
                            <button type="button" class="btn-blue-boton btn-color-rojo me-3"
                                data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn-blue-boton btn-color-azul px-3 me-1"
                                data-bs-dismiss="modal">Registrar</button>

                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script>
        var el = document.getElementById("wrapper");
        var des = document.getElementById("desap"); /* para candy */
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
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