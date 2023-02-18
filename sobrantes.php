<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Inventario</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light color-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Candy Postres</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Registrate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Conecenos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <!-- Formulario -->
        <div class="row mt-4">

            <form>
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-3">
                        <select class="form-select" aria-label="Default select example" id="opt" required>
                            <option selected>¿Qué desea buscar?</option>
                            <option value="1">Pasteles que sobraron</option>
                            <option value="2">Pasteles que entraron</option>
                            <option value="3">Velitas u otros</option>
                            <option value="4">Pedidos realizados</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-lg-6 mb-3">
                        <div class="row">
                            <div class="col-auto">
                                <label for="fecha" class="form-label">Fecha</label>
                            </div>
                            <div class="col-md-6 col-sm-8">
                                <input type="date" class="form-control" id="fecha">
                            </div>
                            <div class="col-auto d-none d-sm-block">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>

                    </div>


                </div>
                <div class="row">
                    <div class="col-12 d-sm-none d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Buscar</button>
                    </div>

                </div>


            </form>

        </div>

        <!-- Pasteles que sobraron -->
        <div class="row m-2 mt-4">

            <div class="col-sm-12 col-md-6 col-lg-6 ">
                <H2>Pasteles que sobraron</H2>
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Sabor</th>
                            <th scope="col">Tamaño</th>
                            <th scope="col">Fecha</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <!-- table-light -->
                        <tr>
                            <th scope="row">1</th>
                            <td>3 leches</td>
                            <td>Grande</td>
                            <td>20/01/2023</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Combinado</td>
                            <td>Mediano</td>
                            <td>19/01/2023</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Chocolate</td>
                            <td>Mediano</td>
                            <td>22/01/2023</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th scope="row" colspan="3">Número de pasteles que sobraron</th>
                            <th>3</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <!-- Pasteles que entraron -->
        <div class="row m-2 mt-4">

            <div class="col-sm-12 col-md-6 col-lg-6 ">
                <H2>Pasteles que Entraron</H2>
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Sabor</th>
                            <th scope="col">Tamaño</th>
                            <th scope="col">Fecha</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <!-- table-light -->
                        <tr>
                            <th scope="row">1</th>
                            <td>3 leches</td>
                            <td>Grande</td>
                            <td>20/01/2023</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Combinado</td>
                            <td>Mediano</td>
                            <td>19/01/2023</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Chocolate</td>
                            <td>Mediano</td>
                            <td>22/01/2023</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th scope="row" colspan="3">Número de pasteles que entraron</th>
                            <th>3</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <!-- Velas u otros -->
        <div class="row m-2 mt-4">

            <div class="col-sm-12 col-md-6 col-lg-6">
                <H2>Velas u otros</H2>
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Cantidad</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <!-- table-light -->
                        <tr>
                            <th scope="row">1</th>
                            <td>Vela de número</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Velitas mágicas</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>platos</td>
                            <td>10</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th scope="row" colspan="2">Total</th>
                            <th>35</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <!-- Pedidos -->
        <div class="row m-2 mt-4 d-flex justify-content-start">

            <div class="col-sm-12 col-lg-6 mt-4">
                <H2>Pasteles que Entraron</H2>
                <div class="card text-white bg-dark" style="max-width: 30rem;">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-8">Nombre del cliente</div>
                            <div class="col-lg-4 d-lg-flex justify-content-end">Fecha</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Número de teléfono: 2241163875</p>
                        <p class="card-text">Sabor</p>
                        <p class="card-text">Relleno</p>
                        <p class="card-text">Dirección</p>
                        <p class="card-text">Decoración</p>
                        <div class="row">
                            <div class="col-8">
                                <p class="card-text">Rebanadas: 50-60</p>
                            </div>
                            <div class="col-4 d-flex justify-content-end">
                                <p class="card-text">Precio: 650</p>

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