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
<div class="conteudo">
  <?php  ?>
  <div class="card">
    <div class="card-header">
      Destaque
    </div>
    <div class="card-body">
      <a href="#">
        <h5 class="card-title"><?php echo ($arrayNoticia[0]["descricao"]); ?></h5>
        <p class="card-text" style=""><?php echo ($arrayNoticia[0]["conteudo"]); ?></p>
      </a>
    </div>
  </div>
  <br>
  <h1>Notícias</h1>
  <div class="row">
    <?php
      foreach ($arrayNoticia as $key => $value) {
        echo '<div class="col-4">';
        echo '<a href="#!">';
        echo '<div class="card  card-accent-primary wider">';
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
        echo '</div>';
        echo '</div>';
        echo '</a>';
        echo "</div>";
      }
    ?>
  </div>
  <br>
  <h1>Bandas</h1>
  <div class="row">
    <?php
      foreach ($arrayBanda as $key => $value) {
        echo '<div class="col">';
          echo '<div class="card" style="width: 13rem;">';
            echo '<img class="card-img-top" src="'.$value[''].'" alt="Imagem de capa do card">';
            echo '<div class="card-body">';
              echo '<p class="card-text">Cage the Elephant - Melophobia</p>';
            echo '</div>';
          echo '</div>';
        echo '</div>';
        if ($key == 7){
          break;
        }
      }
    ?>
  </div>
    <br>
    <h1>Álbuns</h1>
    <ul class="list-group list-group-flush">
      <li class="list-group-item"><b>Destaque</b></li>
    </ul>
    <div class="row">
      <div class="col-4">
        <div class="card card-cascade wider">
          <!-- Card image -->
          <div class="view view-cascade overlay">
            <img  class="card-img-top" src="css/images/image07melophobia.jpg" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!-- Card content -->
          <div class="card-body card-body-cascade text-center pb-0">
            <!-- Title -->
            <h4 class="card-title"><strong>Alison Belmont</strong></h4>
            <!-- Subtitle -->
            <h5 class="blue-text pb-2"><strong>Graffiti Artist</strong></h5>
          </div>
        </div>
      </div>
      <div class="col-8">
          <ul class="list-group list-group-flush">
            <li class="list-group-item disabled">Melophobia</li>
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
            <li class="list-group-item">Vestibulum at eros</li>
            <li class="list-group-item">Vestibulum at eros</li>
            <li class="list-group-item">Vestibulum at eros</li>
            <li class="list-group-item">Vestibulum at eros</li>
          </ul>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <?php
        foreach ($arrayAlbum as $key => $value) {
          echo '<div class="col">';
            echo '<div class="card" style="width: 13rem;">';
              echo '<img class="card-img-top" src="css/images/image05swampthing.jpg" alt="Imagem de capa do card">';
              echo '<div class="card-body">';
                echo '<p class="card-text">Cage the Elephant - Melophobia</p>';
              echo '</div>';
            echo '</div>';
          echo '</div>';
          if ($key == 3){
            break;
          }
        }
      ?>
    </div>
  </div>
</div>
