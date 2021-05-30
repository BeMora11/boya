<?php

session_start();

include_once 'php/conexion.php';

$conexion = new DB();

if (!isset($_SESSION['user'])) {
  header("Location: index.php");
}


?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <link rel="icon" href="assets/img/monitoreo.png" type="image/png">
  <?php include_once 'templates/resources-head.php' ?>
  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

  <div class="text-center" id="loading">
    <div class="spinner-border mt-5" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>

  <div class="visually-hidden" id="content">
    <?php
    include_once 'templates/navbar.php';
    ?>

    <div class="container">

      <h2 id="graficas" class="my-4 text-center">Gráficas</h2>

      <div class="row mt-2 mb-4">

        <div class="col-sm-12 mb-4">
          <h4 class="text-center">Oxigeno</h4>
          <div class="row">
            <div class="col-sm-12 col-md-4">
              <div class="card shadow-sm mb-2">
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                      <img src="assets/img/oxigeno.png" class="" width="120" height="auto" alt="">
                    </div>
                    <div class="col-6" id="oxigeno">

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-8">
              <div class="card shadow-sm">
                <div class="card-body">
                  <input onchange="renderOxigeno()" type="date" value="<?php echo date('Y-m-d') ?>" class="form-control mb-2" name="fecha" id="fechaOxigen">
                  <canvas id="graficaOxigeno"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-12 mb-4">
          <h4 class="text-center">Temperatura</h4>
          <div class="row">
            <div class="col-sm-12 col-md-4">
              <div class="card shadow-sm mb-2">
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                      <img src="assets/img/temp.png" class="" width="120" height="auto" alt="">
                    </div>
                    <div class="col-6" id="temp">

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-8 mb-2">
              <div class="card shadow-sm">
                <div class="card-body">
                  <input onchange="renderTemp()" type="date" value="<?php echo date('Y-m-d') ?>" class="form-control mb-2" name="fecha" id="fechaTemp">
                  <canvas id="graficaTemp"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-sm-12 mb-4">
          <h4 class="text-center">Turbidez</h4>
          <div class="row">
            <div class="col-sm-12 col-md-4">
              <div class="card shadow-sm mb-2">
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                      <img src="assets/img/turbidez.png" class="" width="120" height="auto" alt="">
                    </div>
                    <div class="col-6" id="turbidez">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-8">
              <div class="card shadow-sm">
                <div class="card-body">
                  <input onchange="renderTurb()" type="date" value="<?php echo date('Y-m-d') ?>" class="form-control mb-2" name="fecha" id="fechaTurb">
                  <canvas id="graficaTurbidez"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-12 mb-4">
          <h4 class="text-center">CO<sub>2</sub></h4>
          <div class="row">
            <div class="col-sm-12 col-md-4">
              <div class="card shadow-sm mb-2">
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                      <img src="assets/img/co2.jpg" class="" width="120" height="auto" alt="">
                    </div>
                    <div class="col-6" id="co2">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-8">
              <div class="card shadow-sm">
                <div class="card-body">
                  <input onchange="renderCO2()" type="date" value="<?php echo date('Y-m-d') ?>" class="form-control mb-2" name="fecha" id="fechaCO2">
                  <canvas id="graficaCO2"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <h4 id="localizacion" class="my-4 text-center">Localización</h4>

    <div class="mx-2">
      <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d120658.78462148654!2d-104.40118245708027!3d19.081886823596676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1smaps!5e0!3m2!1ses!2smx!4v1615316219504!5m2!1ses!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" class="my-3" loading="lazy"></iframe>
    </div>


    <footer class="bg-dark">
      <div class="text-center text-white py-4">
        Copyright &copy; - 2021
      </div>
    </footer>
  </div>





  <?php include_once 'templates/js-links.php' ?>
  <script type="text/javascript">
    datos();
  </script>
</body>

</html>