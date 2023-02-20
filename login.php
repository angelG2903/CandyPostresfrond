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


    <title>Candy Postres</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light color-navbar">
        <div class="container-fluid ">
            <a class="navbar-brand ti ms-1" href="#">Candy Postres</a>
            <a class="navbar-brand text-white" href="index.php"><i class="bi bi-house me-2"></i>Inicio</a>
        </div>
    </nav>

    <div class="container-fluid">

        <div class="row mt-5 mb-5 d-flex justify-content-center">
            <div class="col-sm-12 col-md-7 col-lg-7">
                <img src="img/Candy.png" alt="" class="img-fluid">
            </div>
            <!-- d-none d-md-block -->
            <div class="col-md-10 col-lg-4 mt-5 mb-4">
                <form>
                    <h4 class="text-center">Inicio de sesión</h4>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="correo" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Ingrese su correo electrónico</div>
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="pass">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn-blue-boton btn-color-azul">Ingresar</button>
                    </div>

                </form>
            </div>

           <!--  <div class="row d-flex justify-content-center">
                <div class="d-md-none col-sm-10 mt-4 mb-4">
                    <form>
                        <h4 class="text-center">Inicio de sesión</h4>
                        <div class="mb-3">
                            <label for="correo" class="form-label">Correo</label>
                            <input type="email" class="form-control" id="correo" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Ingrese su correo electrónico</div>
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="pass">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Ingresar</button>
                        </div>

                    </form>
                </div>
            </div> -->


        </div>
        

    </div>
    <footer></footer>





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