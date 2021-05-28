<?php
  session_start();

  include_once 'conexion.php';
  $conexion = new DB();

  // $password = password_hash('admin', PASSWORD_DEFAULT);
  // $usuario = 'admin';

  // $query = $conexion -> connect() -> query("INSERT INTO usuarios(usuario, password_usuario) VALUES('$usuario', '$password')");
  // echo $query -> execute();

  $usuario = $_POST['usuario'];
  $password = $_POST['password'];

  $query = $conexion -> connect() -> prepare("SELECT * FROM usuarios WHERE usuario = ?");
  $query -> bindValue(1, $usuario);
  $query -> execute();

  if($query -> rowCount() > 0){
    $row = $query -> fetch();
    $rowPassword = $row['password_usuario'];

    if(password_verify($password, $rowPassword)){
      $_SESSION['user'] = $row['id_usuario'];
      echo true;
    } else {
      echo false;
    }
  } else {
    echo false;
  }
?>