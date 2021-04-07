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

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Boya oceanográfica</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#principal"><i class="fas fa-home mr-2"></i>Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#variables"><i class="fas fa-table mr-2"></i>Variables</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#graficas"><i class="fas fa-chart-area mr-2"></i>Gráficas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#localizacion"><i class="fas fa-map-marker-alt mr-2"></i>Localizacion</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <h4 id="principal" class="my-4 text-center">Monitoreo de variables</h4>
    <div class="card-deck mt-4">
      <div class="card shadow">
        <div class="card-body">
          <div class="card-title text-center">Oxígeno</div>
          <div id="oxigeno" class="mx-auto my-2" style="width: 120px; height: 120px;"></div>
          <a href="#graficaOxigeno" class="btn btn-primary btn-block">Ver mas</a>
        </div>
      </div>
      <div class="card shadow">
        <div class="card-body">
          <div class="card-title text-center">Temperatura</div>
          <div id="temperatura" class="mx-auto my-2" style="width: 120px; height: 120px;"></div>
          <a href="#graficaTemp" class="btn btn-primary btn-block">Ver mas</a>
        </div>
      </div>
    </div>

    <div class="card-deck mt-2">
      <div class="card shadow">
        <div class="card-body">
          <div class="card-title text-center">Turbidez</div>
          <div id="turbidez" class="mx-auto my-2" style="width: 120px; height: 120px;"></div>
          <a href="#graficaTurbidez" class="btn btn-primary btn-block">Ver mas</a>
        </div>
      </div>
      <div class="card shadow">
        <div class="card-body">
          <div class="card-title text-center">CO2</div>
          <div id="co2" class="mx-auto my-2" style="width: 120px; height: 120px;"></div>
          <a href="#graficaCO2" class="btn btn-primary btn-block">Ver mas</a>
        </div>
      </div>
    </div>

    <h4 id="variables" class="my-4 text-center">Variables registradas</h4>

    <div id="tabIndex" class="table-responsive my-4">
    </div>

    <h4 id="graficas" class="my-4 text-center">Gráficas</h4>

    <div class="row mt-2 mb-4">
      <div class="col-sm-12 col-md-8 mx-auto">
        <div class="card shadow">
          <div class="card-body">
            <canvas id="graficaOxigeno"></canvas>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-8 mx-auto mt-4">
        <div class="card shadow">
          <div class="card-body">
            <canvas id="graficaTemp"></canvas>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-8 mx-auto mt-4">
        <div class="card shadow">
          <div class="card-body">
            <canvas id="graficaTurbidez"></canvas>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-8 mx-auto mt-4">
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