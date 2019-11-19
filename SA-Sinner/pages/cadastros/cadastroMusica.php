
<!DOCTYPE html>
<html>
  <head>
    <?php include("../../template/styles.php"); ?>
    <link rel="stylesheet" href="../../css/styleCadastro.css">
    <title>Cadastro musica</title>
  </head>
  <body>
    <div class="wrapper">
      <?php include("../../template/navbar.php"); ?>
    <div id="content" class="containerPrincipal">
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
      <input type="float" name="duracao" class="form-control" placeholder="Duração" required>
    </div>
    <div class="form-group">
    <label for="descricao">Arquivo da música</label>
      <input type="file" name="music" class="form-control">
    </div>
    <div>
      <label>Gênero</label>
        <select name="genero">
            <?php
                $con = mysqli_connect("localhost", "root", "", "database_sinner");

                //Selecionar Genero
                $query_genero = mysqli_query($con,"SELECT * FROM genero");
                $arrayGenero = mysqli_fetch_all($query_genero);
                $generos = $arrayGenero;

                //Printar Select Genero
                foreach($generos as $key => $value){
                    echo '<option value="'.$value[0]["id_genero"].'">'.$value[1]["descricao"].'</option>';
                }

                mysqli_close($con)
            ?>
        </select>
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
              echo '<option value="'.$value[0]["id_album"].'">'.$value[2]["descricao"].'</option>';
          }

          mysqli_close($con)
      ?>
      </select>
      </div>
      <button name="enviar" type="submit" class="form-control btn btn-dark">Cadastrar</button>
    </form>
  </body>
</html>
