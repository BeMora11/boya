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
          <a class="nav-link" href="#principal"><i class="fas fa-home mr-2"></i>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#medidores"><i class="fas fa-weight mr-2"></i>Medidores</a>
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

    <div id="principal" class="container col-xxl-8 px-4 py-5">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
          <img src="https://www.darrera.com/wp/wp-content/uploads/2018/04/3r-edb200-boya-oceanografica.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
          <h1 class="display-5 fw-bold lh-1 mb-3">Boya para el monitoreo de variables en un entorno marino</h1>
          <p class="lead">El objetivo de esta aplicación es mostrar al investigador los datos tomados de los sensores integrados en la boya, haciendo uso de la tecnologia Sigfox para el envio de datos capturados y ser mostrados de manera gráfica en esta aplicación, para un historial de registros.</p>
        </div>
      </div>
    </div>

    <h4 id="medidores" class="text-center">Medidores de datos obtenidos por ultima vez</h4>

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


    <div class="row mt-4">
      <div class="col-sm-12">
        <div class="alert alert-info shadow" role="alert">
          Los valores en los medidores se actualizan al ultimo dato recibido desde el dispositivo.
        </div>
      </div>
    </div>

    <h4 id="variables" class="my-4 text-center">Variables registradas</h4>

    <div class="card shadow">
      <div class="card-body">
        <div id="tabIndex" class="table-responsive my-4">
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

      <div class="col-sm-12 col-md-6 mb-4">
        <div class="card shadow">
          <div class="card-body">
            <canvas id="graficaOxigeno"></canvas>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 mb-4">
        <div class="card shadow">
          <div class="card-body">
            <canvas id="graficaTemp"></canvas>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 mb-4">
        <div class="card shadow">
          <div class="card-body">
            <canvas id="graficaTurbidez"></canvas>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 mb-4">
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