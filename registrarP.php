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
    <title>Registrar pedido</title>
</head>

<body class="colorForm">
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
        <!-- Alineamos todo el contenido al centro -->
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-7 col-lg-8 pt-4 p-5">
                <form action="home.php" method="POST" class="needs-validation">
                    <!-- Nombre del cliente id: nombreC -->
                    <div class="mb-3">
                        <label for="nombreC" class="form-label">Nombre del cliente</label>
                        <input type="text" class="form-control borde" id="nombreC" required>

                    </div>
                    <!-- Número de teléfono id: numeroT -->
                    <div class="mb-3">
                        <label for="numeroT" class="form-label">Número de teléfono</label>
                        <input type="number" class="form-control borde" id="numeroT" required>

                    </div>
                    <!-- Dirección id: direccion -->
                    <div class="mb-3">
                        <label for="direccion" class="form-label">Dirección</label>
                        <textarea class="form-control borde" id="direccion" rows="3" required></textarea>

                    </div>

                    <!-- Sabor id: sabor -->
                    <div class="mb-3">
                        <label for="sabor" class="form-label">Sabor</label>
                        <select class="form-select borde" aria-label="Default select example" id="sabor" required>
                            <option selected>Seleccione un sabor</option>
                            <option value="1">3 leches</option>
                            <option value="2">Combinado</option>
                        </select>

                    </div>

                    <!-- Relleno id: relleno -->
                    <div class="mb-3">
                        <label for="relleno" class="form-label">Relleno</label>
                        <input type="text" class="form-control borde" id="relleno" required>

                    </div>
                    <!-- Rebanadas id: rebanadas -->
                    <div class="mb-3">
                        <label for="rebanadas" class="form-label">Rebanadas</label>
                        <input type="text" class="form-control borde" id="rebanadas" required>

                    </div>
                    <!-- Decoración id: decoracion -->
                    <div class="mb-3">
                        <label for="decoracion" class="form-label">Decoración</label>
                        <textarea class="form-control borde" id="decoracion" rows="3" required></textarea>

                    </div>
                    <!-- Precio id: precio -->
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="number" class="form-control borde" id="precio" required>

                    </div>
                    <!-- Anticipo id: anticipo -->
                    <div class="mb-3">
                        <label for="anticipo" class="form-label">Anticipo</label>
                        <input type="number" class="form-control borde" id="anticipo" required>

                    </div>
                    <!-- Fecha id: fecha -->
                    <div class="mb-3">
                        <label for="fecha" class="form-label">Fecha</label>
                        <input type="date" class="form-control borde" id="fecha" required>

                    </div>

                    <!-- Fecha id: hora -->
                    <div class="mb-3">
                        <label for="hora" class="form-label">Hora</label>
                        <input type="time" class="form-control borde" id="fecha" required>

                    </div>


                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>

                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="home.html" class="btn-blue-boton btn-color-rojo me-3">Cancelar</a>
                        <button type="submit" class="btn-blue-boton btn-color-azul">Submit</button>
                    </div>
                </form>
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