<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $conexao = mysqli_connect('localhost','root','','database_sinner');
  $query = mysqli_query($conexao, "SELECT * FROM album WHERE id=$id");
  $arrayorc = mysqli_fetch_all($query, MYSQLI_ASSOC);
  mysqli_close ($conexao);
}
 ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cadastro Album</title>
        <?php include("../template/styles.php"); ?>
        <style>
            .containerCadastro{
            width:450px;
            padding: 15px;
            margin-top: 50px;
            margin-left: 30%;
            border-radius: 10px;
            background: #fff;
            }
            .containerPrincipal{
            background: #b2bec3;
            }

        </style>
    </head>
    <body>
        <?php
            
        ?>
        <div class="wrapper">
            <?php include("../template/navbar.php"); ?>
            <div id="content" class="containerPrincipal">
            <div class="containerCadastro">
                <form action="../includes/EdtAlbum.php" enctype="multipart/form-data" method="post">
                  <!-- area de campos do form -->
                  <hr />
                  <?php
                  if (isset($_GET['id'])) {
                    echo "<input type='hidden' name='id' value='".$id."'>";
                  }
                  ?>
                    <div class="form-group">
                    <h1>Editar Album</h1>
                      <label for="descricao">Descrição</label>
                      <?php
                      print_r ($arrayorc);
                          if (isset($arrayorc[0]['descricao'])) {
                            echo '<input id="descricao" name="descricao" type="text" value="'.$arrayorc[0]["descricao"].'" class="form-control" required>';
                          }else {
                            echo '<input id="descricao" name="descricao" type="text" placeholder="descricao" class="form-control" required>';
                          }
                          ?>
                          <label for="duracao">Duração</label>
                          <?php
                          if (isset($arrayorc[0]['duracao'])) {
                            echo '<input id="duracao" name="duracao" type="text" value="'.$arrayorc[0]["duracao"].'" class="form-control" required>';
                          }else {
                            echo '<input id="duracao" name="duracao" type="text" placeholder="duracao" class="form-control" required>';
                          }
                           ?>
                      <div class="form-group">
                    <label>Imagem da banda</label>
                    <input type="file" name="imgband" >
                    </div> 
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="reset" class="btn btn-default">Cancelar</button>
                </form>
            </div>
        </div>
        <?php include("../template/js.php"); ?>
    </body>
</html>
