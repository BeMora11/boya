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
  <?php include_once 'templates/resources-head.php' ?>
  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

  <?php
  include_once 'templates/navbar.php';
  ?>

  <div class="container">

    <h4 id="medidores" class="text-center my-4">Datos registrados</h4>

    <div class="row mt-4">
      <div class="card col-sm-12 col-md-2 mb-2 mx-auto shadow">
        <div class="card-body text-center">
          <div class="card-title">Oxígeno</div>
          <div id="oxigeno" class="mx-auto my-2" style="width: 120px; height: 120px;"></div>
          <div class="d-grid gap-2">
            <a href="#graficaOxigeno" class="btn btn-primary btn-block">Ver mas</a>
          </div>
        </div>
      </div>
      <div class="card col-sm-12 col-md-2 mb-2 mx-auto shadow">
        <div class="card-body text-center">
          <div class="card-title">Temperatura</div>
          <div id="temperatura" class="mx-auto my-2" style="width: 120px; height: 120px;"></div>
          <div class="d-grid gap-2">
            <a href="#graficaTemp" class="btn btn-primary btn-block">Ver mas</a>
          </div>
        </div>
      </div>
      <div class="card col-sm-12 col-md-2 mb-2 mx-auto shadow">
        <div class="card-body text-center">
          <div class="card-title">Turbidez</div>
          <div id="turbidez" class="mx-auto my-2" style="width: 120px; height: 120px;"></div>
          <div class="d-grid gap-2">
            <a href="#graficaTurbidez" class="btn btn-primary btn-block">Ver mas</a>
          </div>
        </div>
      </div>
      <div class="card col-sm-12 col-md-2 mb-2 mx-auto shadow">
        <div class="card-body text-center">
          <div class="card-title">CO2</div>
          <div id="co2" class="mx-auto my-2" style="width: 120px; height: 120px;"></div>
          <div class="d-grid gap-2">
            <a href="#graficaCO2" class="btn btn-primary btn-block">Ver mas</a>
          </div>
        </div>
      </div>
    </div>


    <div class="row mt-4">
      <div class="col-sm-12">
        <div class="alert alert-info shadow" role="alert">
          Los valores en los medidores se actualizan al ultimo dato recibido desde el dispositivo.
        </div>
      </div>
    </div>

    <h4 id="graficas" class="my-4 text-center">Gráficas</h4>

    <div class="row mt-2 mb-4">
      <div class="col-sm-12">
        <div class="alert alert-info shadow" role="alert">
          Las gráficas se actualizan cada vez que un nuevo dato es enviado desde el dispositivo, y muestran todos los datos recibidos del día actual.
        </div>
      </div>

      <div class="col-sm-12 mb-4">
        <div class="card shadow">
          <div class="card-body">
            <h5 class="card-title text-center mb-2">Oxígeno</h5>
            <canvas id="graficaOxigeno"></canvas>
          </div>
        </div>
      </div>
      <div class="col-sm-12 mb-4">
        <div class="card shadow">
          <div class="card-body">
            <canvas id="graficaTemp"></canvas>
          </div>
        </div>
      </div>
      <div class="col-sm-12 mb-4">
        <div class="card shadow">
          <div class="card-body">
            <canvas id="graficaTurbidez"></canvas>
          </div>
        </div>
      </div>
      <div class="col-sm-12 mb-4">
        <div class="card shadow">
          <div class="card-body">
            <canvas id="graficaCO2"></canvas>
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





  <?php include_once 'templates/js-links.php' ?>
  <script type="text/javascript">
    datos();
  </script>
</body>

</html>