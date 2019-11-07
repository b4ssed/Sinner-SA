<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  echo $id;
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
        <?php include("../../template/styles.php"); ?>
    </head>
    <body>
        <?php

        ?>
        <div class="wrapper">
            <?php include("../../includes/btnNavbar.php"); ?>
            <!-- / -->
            <div id="content" class="container">
            <div class="containerCadastro">
                <form action="../../includes/editar/editarAlbum.php" enctype="multipart/form-data" method="post">
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
                            <label for="descricao">Banda</label>
                            <br>
                        <select name="banda">
                            <?php
                                $con = mysqli_connect("localhost", "root", "", "database_sinner");

                                //Selecionar Genero
                                $query_banda = mysqli_query($con,"SELECT * FROM banda");
                                $arrayBanda = mysqli_fetch_all($query_banda);
                                $banda = $arrayBanda;

                                //Printar Select Genero
                                foreach($banda as $key => $value){
                                    echo '<option value="'.$value[0].'">'.$value[1].'</option>';
                                }

                                mysqli_close($con)
                            ?>
                    </div>
                      <div class="form-group">
                    <label>Imagem da banda</label>
                    <input type="file" name="imgband" >
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <a href="VisualizarAlbum.php">
                    <button class="btn btn-default" type='button' onclick="window.location.href='../visualizar/visualizarAlbum.php'">Cancelar</button>
                    </a>
                </form>
            </div>
        </div>
        <?php include("../../template/js.php"); ?>
    </body>
</html>
