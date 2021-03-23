<?php
include_once 'conexion.php';
$conexion = new DB();

$oxigeno = $_GET['oxigeno'];
$temperatura = $_GET['temp'];
$turbidez = $_GET['turbidez'];
$co2 = $_GET['co2'];

$query = $conexion->connect()->prepare("INSERT INTO dispositivo(oxigeno ,temperatura, turbidez, dioxido_carbono) VALUES(:oxigeno ,:temperatura, :turbidez, :dioxido_carbono)");
$query->bindParam("oxigeno", $oxigeno, PDO::PARAM_INT);
$query->bindParam("temperatura", $temperatura, PDO::PARAM_INT);
$query->bindParam("turbidez", $turbidez, PDO::PARAM_INT);
$query->bindParam("dioxido_carbono", $co2, PDO::PARAM_INT);
echo $query -> execute()
?>