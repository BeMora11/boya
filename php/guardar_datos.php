<?php
  include_once 'conexion.php';
  $conexion = new DB();


  if(isset($_POST['oxigeno']) && isset($_POST['temp']) && isset($_POST['turbidez']) && isset($_POST['co2'])){
    $oxigeno = $_POST['oxigeno'];
    $temperatura = $_POST['temp'];
    $turbidez = $_POST['turbidez'];
    $co2 = $_POST['co2'];

    $query = $conexion -> connect() -> prepare("INSERT INTO dispositivo(oxigeno ,temperatura, turbidez, dioxido_carbono) VALUES(:oxigeno ,:temperatura, :turbidez, :dioxido_carbono)");
    $query -> bindParam("oxigeno", $oxigeno, PDO::PARAM_INT);
    $query -> bindParam("temperatura", $temperatura, PDO::PARAM_INT);
    $query -> bindParam("turbidez", $turbidez, PDO::PARAM_INT);
    $query -> bindParam("dioxido_carbono", $co2, PDO::PARAM_INT);
    $query -> execute();
  }
?>