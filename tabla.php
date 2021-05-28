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

    <h4 id="variables" class="my-4 text-center">Variables registradas</h4>

    <div class="card shadow mb-4">
      <div class="card-body">
        <div id="tabIndex" class="table-responsive my-4">
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