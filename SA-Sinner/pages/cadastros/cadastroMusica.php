
<!DOCTYPE html>
<html>
  <head>
    <?php include("../../template/styles.php"); ?>
    <?php session_start(); ?>
    <link rel="stylesheet" href="../../css/styleCadastro.css">
    <title>Cadastro musica</title>
  </head>
  <body>
    <div class="wrapper">
      <?php include("../../template/sidebar.php"); ?>
    <div id="content" class="container">
    <div class="containerCadastro">
      <form action="../../includes/cadastros/cadastrarMusica.php" enctype="multipart/form-data" method="post">
     <!-- area de campos do form -->
      <center>
       <H2>Cadastro de Música</H2>
      </center>
    <div class="form-group">
      <label for="descricao">Nome</label>
      <input type="text" name="name" class="form-control" placeholder="Nome da Música" required>
    </div>
    <div class="form-group">
      <label for="descricao">Duração</label>
      <input type="float" name="duracao" class="form-control" placeholder="MM:SS" required>
    </div>
    <div class="form-group">
    <label for="descricao">Arquivo da música</label>
      <input type="file" name="music" class="form-control">
    </div>
    <div>
      <label>Álbum</label>
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
         <div>
          <button class="form-control btn btn-dark" type='button' onclick="window.location.href='index.php'">Cancelar</button>
        </div>
    </form>
  </body>
</html>
