<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <?php
          $con = mysqli_connect("localhost", "root", "", "database_sinner");
          $noticia = $_GET['id'];
          $query = mysqli_query($con,"SELECT * FROM noticia WHERE id_noticia=$noticia");
          $dados = mysqli_fetch_all($query, MYSQLI_ASSOC);
        ?>
        <?php
        session_start();
        // $con = mysqli_connect("localhost", "root", "", "database_sinner");
        // $query = mysqli_query($con,"SELECT * FROM noticia");

         ?>
        <title>noticias</title>
        <?php include("../../template/styles.php"); ?>
        <?php include("../../template/sidebar.php"); ?>
        <style media="screen">
        .responsive {
          width: 100%;
          max-height: 400PX;
          }
          .lead{
             width: 75%;
          }
        </style>
    <title></title>
  </head>
  <body>
    <div id="content" style="padding:0px;" >
      <?php
        echo "<img src='".$dados[0]['img']."' class='responsive'>";
       ?>
      <div style="padding:40px;">
        <div class='panel panel-default'>

           <?php
                       echo"<div class='panel-heading'>";
                       echo "<h3 class='display-3'>".$dados[0]['descricao']."</h3>";
                       echo "</div>";
                       echo  "<center><div class='lead'>".$dados[0]['conteudo']."</div></center>";
            ?>
        </div>
    </div>
    <?php include("../../template/js.php"); ?>
  </body>
</html>
