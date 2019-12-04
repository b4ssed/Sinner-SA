<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <?php
      session_start();
      $id = $_GET['id'];
      //Conexão com o BD
      $con = mysqli_connect("localhost", "root", "", "database_sinner");
      //Select e armazenamento em arrays
      //Banda
      $query_banda = mysqli_query($con,"SELECT * FROM banda WHERE id_banda=$id");
      $array_banda = mysqli_fetch_assoc($query_banda);
      //Album
      $query_album = mysqli_query($con,"SELECT * FROM album WHERE id_album = $array_banda[id_banda]");
      $array_album = mysqli_fetch_assoc($query_album);
      $b[] = $array_album;
      //Musica
      $query_musica = mysqli_query($con,"SELECT * FROM musica WHERE id_musica = $array_album[id_album]");
      $array_musica = mysqli_fetch_assoc($query_musica);
      $a[] = $array_musica;
    ?>
    <style media="screen">
    .responsive {
      width: 100%;
      height: 200PX;
      background: black;
      }
      .lead{
         width: 75%;
      }
      .imgbanda{
        margin-top: 40px;
        width: 200px;
        height: 200px;
        border-radius: 50%;
        margin-left: 5%;
      }
    </style>
      <?php include("../../template/styles.php"); ?>
  </head>
  <body>
    <div class="wrapper">
      <?php include("../../template/sidebar.php"); ?>
      <div id="content" style="padding:0px;" >
        <div class="responsive">
          <?php
            echo "<img class='imgbanda'src='".$array_banda['img']."'>";
           ?>
        </div>
        <br>
        <div style="padding:40px;">
          <h1><?php echo $array_banda["descricao"] ?></h1>
          <h2>Álbuns</h2>
          <div class='row'>
            <?php
              foreach ($b as $key => $value) {
                echo '<div class="col">';
                echo '<a href="../Player.php?id='.$value['id_album'].'">';
                echo '<div class="card" style="width: 13rem;">';
                echo '<img class="card-img-top" src="'.$value['img'].'" alt="Imagem de capa do card">';
                echo '<div class="card-body">';
                echo '<p class="card-text">'.$value['descricao'].'';
                echo '</div>';
                echo '</div>';
                echo '</div>';
              }
            ?>
          </div>
        </div>
      </div>
    </div>
    <?php include("../../template/js.php"); ?>
  </body>
</html>
