<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <?php include_once 'templates/resources-head.php' ?>
</head>

<body>

  <?php include_once 'templates/navbar.php'; ?>

  <div class="container">
    <div class="card-deck mt-4">
      <div class="card shadow">
        <div class="card-body">
          <div class="card-title text-center">Oxígeno</div>
          <div id="oxigeno" class="mx-auto my-2" style="width: 120px; height: 120px;"></div>
          <a href="oxigeno" class="btn btn-primary btn-block">Ver mas</a>
        </div>
      </div>
      <div class="card shadow">
        <div class="card-body">
          <div class="card-title text-center">Temperatura</div>
          <div id="temperatura" class="mx-auto my-2" style="width: 120px; height: 120px;"></div>
          <a href="temperatura" class="btn btn-primary btn-block">Ver mas</a>
        </div>
      </div>
    </div>

    <div class="card-deck mt-2">
      <div class="card shadow">
        <div class="card-body">
          <div class="card-title text-center">Turbidez</div>
          <div id="turbidez" class="mx-auto my-2" style="width: 120px; height: 120px;"></div>
          <a href="turbidez" class="btn btn-primary btn-block">Ver mas</a>
        </div>
      </div>
      <div class="card shadow">
        <div class="card-body">
          <div class="card-title text-center">CO2</div>
          <div id="co2" class="mx-auto my-2" style="width: 120px; height: 120px;"></div>
          <a href="co2" class="btn btn-primary btn-block">Ver mas</a>
        </div>
      </div>
    </div>

    <h4 class="my-4 text-center">Variables registradas</h4>

    <div id="tabIndex" class="table-responsive my-4">
    </div>
  </div>

  <?php include_once 'templates/js-links.php' ?>
  <script type="text/javascript">
    datos();
  </script>
</body>

</html>