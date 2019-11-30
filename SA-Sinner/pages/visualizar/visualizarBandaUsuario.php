<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php
      $id = $_GET['id'];
      //Conexão com o BD
      $con = mysqli_connect("localhost", "root", "", "database_sinner");
      //Select e armazenamento em arrays
      //Banda
      $query_banda = mysqli_query($con,"SELECT * FROM banda WHERE id_banda=$id");
      $array_banda = mysqli_fetch_array($query_banda);
      //Album
      $query_album = mysqli_query($con,"SELECT * FROM album WHERE id_album = $array_banda[0]");
      $array_album = mysqli_fetch_array($query_album);
      //Musica
      $query_musica = mysqli_query($con,"SELECT * FROM musica WHERE id_musica = $array_album[0]");
      $array_musica = mysqli_fetch_array($query_musica);
    ?>
  </head>
  <body>
    
  </body>
</html>
