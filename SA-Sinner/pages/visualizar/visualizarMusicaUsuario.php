<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <?php
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
          <h2><?php echo $array_album["descricao"]; ?></h2>
          <div class='row'>
            <table class="table lead">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Título</th>
                  <th scope="col">Artista</th>
                  <th scope="col">Álbum</th>
                  <th scope="col">Duração</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  foreach ($a as $key => $value) {
                    echo "<tr>";
                    echo "<th scope='row'>".$value["id_musica"]."</th>";
                    echo "<td>".$value['descricao']."</td>";
                    echo "<td>".$array_banda['descricao']."</td>";
                    echo "<td>".$array_album["descricao"]."</td>";
                    echo "<td>".$value["duracao"]."</td>";
                    echo "</tr>";
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <?php include("../../template/js.php"); ?>
  </body>
</html>
