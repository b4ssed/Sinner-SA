
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../../css/styleCadastro.css">
    <title>Editar Música</title>
    <?php session_start();
    include("../../template/styles.php"); ?>
</head>
  <body>
    <div class="wrapper">
        <?php include("../../template/sidebar.php"); ?>
        <!-- / -->
        <div id="content" class="container">
        <div class="containerCadastro">
    <?php
      $id_musica = $_GET["id_musica"];
       echo '<form action="../../includes/editar/editarMusica.php?id='.$id_musica.'" enctype="multipart/form-data" method="post">'
    ?>
      <div class="form-group">
        <h2>Editar Música</h2>
        <div class="">
          <label for="name">Nome da Música</label>
      	     <input type="text " class="form-control" name="name" placeholder="Nome da Música" required>
        </div>
        <div class="form-group">
        <label>Duração</label>
      	   <input type="float" class="form-control" name="duracao" placeholder="Duração" required>
        </div>
        <div class="form-group">
        <label>Música</label>
      	   <input type="file" name="music">
        </div>
        <div class="form-group">
          <label>Album</label>
        <select name="album">
        <?php
            $con = mysqli_connect("localhost", "root", "", "database_sinner");

            //Selecionar Album
            $query_album = mysqli_query($con,"SELECT * FROM album");
            $arrayAlbum = mysqli_fetch_all($query_album);
            $albuns = $arrayAlbum;


            //Printar Select Album
            foreach($albuns as $key => $value){
                echo '<option value="'.$value[0].'">'.$value[2].'</option>';
            }

            mysqli_close($con)
        ?>
        </select>
      </div>
      <div class="form-group">
          <button type="submit" class="form-control btn btn-dark">Enviar</button>
      </div>
      <div class="form-group">
        <button class="form-control btn btn-dark" type='button' onclick="window.location.href='../visualizar/visualizarMusica.php'">Cancelar</button>
      </div>
    </div>
    </form>
      <?php include("../../template/js.php"); ?>
  </body>
</html>
