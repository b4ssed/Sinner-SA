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
  hr{
    border:1px solid #05011b;
    box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.76);
  }

  
</style>
<div id="conteudo">
  <div class="card">
    <div class="card-header">
      Destaque
    </div>
    <div class="card-body">
      <a href="pages/visualizar/visualizarNoticiaUsuario.php?id=<?php echo ($arrayNoticia[0]['id_noticia'])?>">
        <h5 class="card-title"><?php echo ($arrayNoticia[0]["descricao"]); ?></h5>
      </a>
    </div>
  </div>
  <br>
<hr>
  <h1>Notícias</h1>
  <div class="row">
    <?php
      foreach ($arrayNoticia as $key => $value) {
        echo '<div class="col-4">';
        echo '<a href="pages/visualizar/visualizarNoticiaUsuario.php?id='.$value['id_noticia'].'">';
        echo '<div id="noticia" class="card card-accent-primary wider">';
        //<!-- Card image -->
        echo '<div class="view view-cascade overlay">';
        echo '<div class="mask rgba-white-slight"></div>';
        echo '</div>';
        //<!-- Card content -->
        echo '<div class="card-body card-body-cascade text-center pb-0">';
        //<!-- Title -->
        echo '<h4 class="card-title"><strong>'.$value['descricao'].'</strong></h4>';
        echo '';
        echo '</div>';
        echo '</div>';
        echo '</a>';
        echo "</div>";
        if ($key == 7){
          break;
        }
      }
    ?>
  </div>
 
  <hr>
  <br>
  <h1>Bandas</h1>
  <div class="row">
    <?php
      foreach ($arrayBanda as $key => $value) {
        echo '<div class="col">';
        echo '<a href="pages/visualizar/visualizarBandaUsuario.php?id='.$value['id_banda'].'">';
        echo '<div class="card" style="width: 13rem;">';
        echo '<img class="card-img-top" src="'.$value['img'].'" alt="Imagem de capa do card">';
        echo '<div class="card-body">';
        echo '<p class="card-text">'.$value['descricao'].'</p>';
        echo '</div>';
        echo '</div>';
        echo '</a>';
        echo '</div>';
        echo '<br>';
        if ($key == 7){
          break;
        }
      }
    ?>
  </div>
  <hr>
    <br>
    <h1>Álbuns</h1>
    <br>
    <div class="row">
      <?php
        foreach ($arrayAlbum as $key => $value) {
          echo '<div class="col">';
          echo '<a href="pages/Player.php?id='.$value['id_album'].'">';
          echo '<div class="card" style="width: 13rem;">';
          echo '<img class="card-img-top" src="'.$value['img'].'" alt="Imagem de capa do card">';
          echo '<div class="card-body">';
          echo '<p class="card-text">'.$value['descricao'].'';
          echo '</div>';
          echo '</div>';
          echo "</a>";
          echo '</div>';
          if ($key == 7){
            break;
          }
        }
      ?>
    </div>
  </div>
</div>
