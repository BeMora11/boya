<?php
$host = $_SERVER["HTTP_HOST"];
$url = $_SERVER["REQUEST_URI"];
//  echo "http://" . $host . $url;
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php"><i class="fas fa-ship mr-1"></i>Boya oceanográfica</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link <?php echo $url == '/App/index.php' ? 'active' : '' ; ?>" href="index.php"><i class="fas fa-home mr-1"></i>Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo $url == '/App/oxigeno.php' ? 'active' : '' ; ?>" href="oxigeno.php"><i class="fas fa-atom mr-1"></i>Oxígeno</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo $url == '/App/temperatura.php' ? 'active' : '' ; ?>" href="temperatura.php"><i class="fas fa-temperature-low mr-1"></i>Temperatura</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo $url == '/App/turbidez.php' ? 'active' : '' ; ?>" href="turbidez.php"><i class="fas fa-atom mr-1"></i>Turbidez</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo $url == '/App/co2.php' ? 'active' : '' ; ?>" href="co2.php"><i class="fas fa-atom mr-1"></i>CO2</a>
      </li>
    </ul>
  </div>
</nav>