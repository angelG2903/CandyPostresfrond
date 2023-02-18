<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Corte de venta</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light color-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Candy Postres</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Regresar</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="row mt-4">
            <form>
                <div class="row">
                    <div class="col-sm-12 col-lg-auto">
                        <label for="fecha" class="form-label">Introduzca la fecha para ver el corte</label>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <input type="date" class="form-control" id="fecha">
                    </div>

                    <div class="d-none d-md-block col-md-auto col-lg-auto">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                <div class="row mt-2 ">
                    <div class="col-12 d-md-none d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>


            </form>

        </div>


        <div class="row m-2 mt-4">
            <div class="col-sm-12 col-md-6 col-lg-6 ">
                <H2>Pasteles</H2>
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Sabor</th>
                            <th scope="col">Tamaño</th>
                            <th scope="col">Precio</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <!-- table-light -->
                        <tr>
                            <th scope="row">1</th>
                            <td>3 leches</td>
                            <td>Grande</td>
                            <td>320</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Combinado</td>
                            <td>Mediano</td>
                            <td>260</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Chocolate</td>
                            <td>Mediano</td>
                            <td>300</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th scope="row" colspan="3">Total</th>
                            <th>880</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">
                <H2>Velas u otros</H2>
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Precio</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <!-- table-light -->
                        <tr>
                            <th scope="row">1</th>
                            <td>Vela de número</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Velitas mágicas</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>platos</td>
                            <td>20</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th scope="row" colspan="2">Total</th>
                            <th>50</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">
                <H2>Pedidos</H2>
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre del cliente</th>
                            <th scope="col">Anticipo</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <!-- table-light -->
                        <tr>
                            <th scope="row">1</th>
                            <td>Javier Tellez</td>
                            <td>300</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Pedro Castro</td>
                            <td>200</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th scope="row" colspan="2">Total</th>
                            <th>500</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>


        <div class="row mt-3 mb-3 m-4 d-flex justify-content-center">
            <div class="col-md-6 col-lg-5 bg-secondary bg-gradient rounded-pill d-flex justify-content-between">
                <h3 class="text-light">Total: 1430</h3>
                <h3 class="text-light">22/01/2023</h3>
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