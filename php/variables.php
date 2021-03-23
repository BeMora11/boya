<?php
  include_once 'conexion.php';
  $conexion = new DB();

  $query = $conexion -> connect() -> query("SELECT * FROM dispositivo ORDER BY fecha DESC");
  $query -> execute();

  echo $datos = json_encode($query -> fetchAll());
?>