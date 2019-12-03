<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
    session_start();
      //Conexão com o Banco de dados
      $con = mysqli_connect("localhost", "root", "", "database_sinner");
      //Select
      $select_musica = mysqli_query($con,"SELECT * FROM musica");
      $select_album = mysqli_query($con,"SELECT * FROM album");
      $select_banda = mysqli_query($con,"SELECT * FROM banda");
      $select_noticia = mysqli_query($con,"SELECT * FROM noticia");
      //Armazenando os dados dos select
      $arrayMusica = mysqli_fetch_all($select_musica, MYSQLI_ASSOC);
      $arrayAlbum = mysqli_fetch_all($select_album, MYSQLI_ASSOC);
      $arrayBanda = mysqli_fetch_all($select_banda, MYSQLI_ASSOC);
      $arrayNoticia = mysqli_fetch_all($select_noticia, MYSQLI_ASSOC);
    ?>
    <?php include("../../template/styles.php"); ?>
    <style media="screen">
      p{
        max-width: 19ch;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
      }
    </style>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="wrapper">
      <?php include("../../template/sidebar.php"); ?>
      <div id="content">
        <?php include("../../template/navbar.php"); ?>
        <h1>Álbuns</h1>
        <div class="row">
          <?php
            foreach ($arrayAlbum as $key => $value) {
              echo '<div class="col">';
              echo '<a href="visualizarAlbumUsuario.php?id='.$value['id_album'].'">';
              echo '<div class="card" style="width: 13rem;">';
              echo '<img class="card-img-top" src="'.$value['img'].'" alt="Imagem de capa do card">';
              echo '<div class="card-body">';
              echo '<p class="card-text">'.$value['descricao'].'';
              echo '</div>';
              echo '</div>';
              echo "</a>";
              echo '</div>';
            }
          ?>
        </div>
      </div>
    </div>
      <?php include("../../template/js.php"); ?>
  </body>
</html>
