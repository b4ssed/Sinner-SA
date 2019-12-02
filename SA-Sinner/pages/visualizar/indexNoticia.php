<link rel="stylesheet" href="../css/bootstrap.min.css">
<?php
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
<style media="screen">
  p{
    max-width: 19ch;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
</style>
<div id="conteudo">
  <h1>Notícias</h1>
  <div class="row">
    <?php
      foreach ($arrayNoticia as $key => $value) {
        echo '<div class="col-4">';
        echo '<a href="visualizar/visualizarNoticiaUsuario.php?id='.$value['id_noticia'].'">';
        echo '<div id="noticia" class="card card-accent-primary wider">';
        //<!-- Card image -->
        echo '<div class="view view-cascade overlay">';
        echo '<div class="mask rgba-white-slight"></div>';
        echo '</div>';
        //<!-- Card content -->
        echo '<div class="card-body card-body-cascade text-center pb-0">';
        //<!-- Title -->
        echo '<h4 class="card-title"><strong>'.$value['descricao'].'</strong></h4>';
        //<!-- Subtitle -->
        echo '<p class="card-text">'.$value['conteudo'].'</p>';
        echo '';
        echo '</div>';
        echo '</div>';
        echo '</a>';
        echo "</div>";

      }
    ?>
  </div>
</div>
