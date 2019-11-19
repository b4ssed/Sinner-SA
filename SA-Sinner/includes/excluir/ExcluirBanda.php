
<?php

  $con = mysqli_connect("localhost", "root", "", "database_sinner");
  $id= $_GET['excluirBanda'];
  $query = mysqli_query($con, "SELECT * FROM banda where id_banda = $id");
  $dados = mysqli_fetch_all($query, MYSQLI_ASSOC);
  $query = mysqli_query($con, "DELETE  FROM banda where id_banda = $id ");
  echo $dados[0]['img'];
  $ext = ($dados[0]['img']);
  unlink($ext);


 echo "<script> alert('banda EXCLUIDA :)'); window.location.href = '../../pages/visualizar/visualizarBanda.php'; </script>" ;
?>
