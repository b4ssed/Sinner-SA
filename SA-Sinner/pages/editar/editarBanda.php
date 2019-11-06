<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="">

    </div>
    <?php
      $con = mysqli_connect("localhost", "root", "", "database_sinner");
      $id= $_GET['idb'];
      $query = mysqli_query($con, "SELECT * FROM banda where id_banda = $id");
      $dados = mysqli_fetch_all($query, MYSQLI_ASSOC);

      $ext = ($dados[0]['img']);
      echo("
      <form action='../../includes/editar/editarBanda.php?idb=$id' enctype='multipart/form-data'  method='post' >
      <div class='card-deck'>
      <div class='card' style='width: 18rem;'>
      <img src='".$ext."' style='height: 350px;width: 313;'>
      <div class='card-body' >
      <label >Nome da banda:</label>
      <input type='text' name='name'value=".$dados[0]['descricao']." required >
      <label>Imagem da banda</label>
      <input type='file' name='imgband' >
      <button type='submit'>Enviar</button>
      </form>");
    ?>
  </body>
</html>
