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


    <title>Registrar Producto</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">

            <div class="sidebar-heading border-bottom">
                <p class="fs-3 my-2 ti">Opciones</p>
            </div>
            <div class="list-group list-group-flush mt-3">

                <a href="inventario.php" class="list-group-item  fw-bold"><i
                        class="fa-solid fa-cake-candles me-2"></i>Inventario</a>
                <a href="registrarUsuarios.php" class="list-group-item  fw-bold mt-2"><i
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
                            <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#editarUsuario">Editar perfil</a></li>
                            <li><a class="dropdown-item" href="#">Cerrar sesión</a></li>
                        </ul>
                    </div>

                </div>


            </nav>
            <!-- Contenido de la pagina -->
            <div class="container">


                <!-- Tabla de los pasteles -->
                <div class="row mt-4 d-flex justify-content-center">
                    <div class="col-sm-12 col-lg-10 table-responsive-sm">
                        <h5>Pasteles frescos</h5>
                        <table class="table table-borderless">
                            <thead class="color-thead-p">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Sabor</th>
                                    <th scope="col">Tamaño</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Etiqueta</th>
                                    <th scope="col">Precio</th>
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
                                    
                                </tr>
                                <tr class="color-border-b">
                                    <th scope="row">2</th>
                                    <td>Chocolate</td>
                                    <td>Mediano</td>
                                    <td>05/02/2023</td>
                                    <td>Martes</td>
                                    <td>300</td>
                                    

                                </tr>
                                <tr class="color-footer-b">
                                    <th scope="row" colspan="5">Total</th>
                                    <td class="fw-bold">620</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>

                <!-- Tabla velitas -->
                <div class="row  mt-4 d-flex justify-content-center table-responsive-sm">
                    <div class="col-sm-12 col-md-7 col-lg-5">

                        <h5>Velas</h5>
                        <table class="table table-borderless">
                            <thead class="color-thead-p">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="color-border-b">
                                    <th scope="row">1</th>
                                    <td>Velita Número</td>
                                    <td>20</td>
                                    
                                </tr>
                                <tr class="color-border-b">
                                    <th scope="row">2</th>
                                    <td>Vela Magi</td>
                                    <td>15</td>
                                    
                                </tr>
                                <tr class="color-footer-b">
                                    <th scope="row" colspan="2">Total</th>
                                    <td class="fw-bold">35</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>

                <!-- Tabla de los pasteles rezagados -->
                <div class="row mt-4 mb-4 d-flex justify-content-center">
                    <div class="col-sm-12 col-lg-10 table-responsive-sm">
                        <h5>Pasteles rezagados</h5>
                        <table class="table table-borderless">
                            <thead class="color-thead-p">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Sabor</th>
                                    <th scope="col">Tamaño</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Etiqueta</th>
                                    <th scope="col">Precio</th>
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
                                    
                                </tr>
                                <tr class="color-border-b">
                                    <th scope="row">2</th>
                                    <td>Chocolate</td>
                                    <td>Mediano</td>
                                    <td>05/02/2023</td>
                                    <td>Martes</td>
                                    <td>300</td>
                                    

                                </tr>
                                <tr class="color-footer-b">
                                    <th scope="row" colspan="5">Total</th>
                                    <td class="fw-bold">620</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>


            </div>

        </div>


    </div>
    <!-- /#page-content-wrapper -->
    
    <footer></footer>





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