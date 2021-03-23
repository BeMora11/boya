<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Temperatura</title>
  <?php include_once 'templates/resources-head.php'; ?>
</head>

<body>

  <?php include_once 'templates/navbar.php'; ?>

  <div class="row">
    <div class="col-6 mx-auto">
      <canvas id="graficaTemp"></canvas>
    </div>
  </div>

  <?php include_once 'templates/js-links.php'; ?>
</body>

</html>