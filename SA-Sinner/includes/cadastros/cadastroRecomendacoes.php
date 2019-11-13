<?php

  $con = mysqli_connect("localhost", "root", "", "database_sinner");
  //
  $query_genero = mysqli_query($con,"SELECT COUNT(id_genero) AS result FROM genero");
  $array_num = mysqli_fetch_assoc($query_genero);
  //
  $arrayDados = array();
  $a = 0;
  while ($a <= $array_num['result']) {
    switch ($a) {
      case $a:
        if (isset($_POST[$a])){
            $arrayDados[] = $_POST[$a];
        }
        break;

      default:
        // code...
        break;
    }
    $a++;
  }
  if (isset($arrayDados)) {
    $query_usuario_genero = mysqli_query($con,"INSERT INTO usuario_genero VALUES(DEFAULT, )");
  }else{

  }
  print_r($arrayDados);
?>
