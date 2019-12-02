<link rel="stylesheet" href="../css/bootstrap.min.css">
<?php
  //Conexão com o Banco de dados
  $con = mysqli_connect("localhost", "root", "", "database_sinner");
  //Select
  $select_album = mysqli_query($con,"SELECT * FROM album");
  //Armazenando os dados dos select
  $arrayAlbum = mysqli_fetch_all($select_album, MYSQLI_ASSOC);
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
    <h1>Álbuns</h1>
    <br>
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
