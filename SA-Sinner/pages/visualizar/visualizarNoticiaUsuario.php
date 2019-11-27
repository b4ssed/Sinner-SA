<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <title>noticias</title>
        <?php include("../../template/styles.php"); ?>
        <?php include("../../template/navbar.php"); ?>
        <style media="screen">
        #bannerimage {
          width: 100%;
          background-image: url(../../../../Sinner-SA/SA-Sinner/css/images/image08melophobia.jpg);
          height: 100px;
          background-color: purple;
          background-position: center;
          }
        </style>
    <title></title>
  </head>
  <body>
    <div id="content" style="padding:0px;" class="containerPrincipal">
      <img id="bannerimage"></img>
      </div>
      <div style="padding:40px;">
        <div class='panel panel-default'>

           <?php
           $con = mysqli_connect("localhost", "root", "", "database_sinner");
           $query = mysqli_query($con,"SELECT * FROM noticia");
           $dados = mysqli_fetch_all($query, MYSQLI_ASSOC);

                   foreach ($dados as $key => $value) {
                       echo "<img src='".$value['img']."' class='rounded' alt='' width='1000' height='700' hover='-1'>";
                       echo"<div class='panel-heading'>";
                       echo "<h3 class='display-3'>".$value['descricao']."</h3>";
                       echo "</div>";
                       echo  "<div class='lead'>".$value['conteudo']."</div>";
                     }
            ?>
        </div>

      </div>


    </div>
  </body>
</html>
