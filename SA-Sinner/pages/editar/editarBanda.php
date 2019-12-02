<!DOCTYPE html>
    <?php
    session_start();
      $con = mysqli_connect("localhost", "root", "", "database_sinner");
      $id = $_GET['id'];
      $query = mysqli_query($con, "SELECT * FROM banda where id_banda = $id");
      $dados = mysqli_fetch_all($query, MYSQLI_ASSOC);
      $arrayorc = $dados;
      $ext = ($dados[0]['img']);

    ?>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <link rel="stylesheet" href="../../css/styleCadastro.css">
            <title>Editar Banda</title>
            <?php include("../../template/styles.php"); ?>
        </head>
        <body>
            <div class="wrapper">
                <?php include("../../template/sidebar.php"); ?>
                <!-- / -->
                <div id="content" class="container">
                <div class="containerCadastro">
                  <?php echo '  <form action="../../includes/editar/editarBanda.php?id='.$id.'" enctype="multipart/form-data" method="post">'; ?>

                      <!-- area de campos do form -->
                      <hr />
                        <div class="form-group">
                        <h1>Editar Banda</h1>
                          <label for="descricao">Descrição</label>
                          <?php

                              if (isset($arrayorc[0]['descricao'])) {
                                echo '<input id="descricao" name="descricao" type="text" value="'.$arrayorc[0]["descricao"].'" class="form-control" required>';
                              }else {
                                echo '<input id="descricao" name="descricao" type="text" placeholder="descricao" class="form-control" required>';
                              }
                              ?>
                        <div class="form-group">
                          <label>Imagem da banda</label>
                          <input type="file" name="imgband" >
                        </div>
                        </div>
                        <div class="">
                          <button type="submit"class="form-control btn btn-dark">Enviar</button>
                        </div>
                        <div class="">
                          <button class="form-control btn btn-dark" type='button' onclick="window.location.href='../visualizar/visualizarBanda.php'">Cancelar</button>
                        </div>

                    </form>
                </div>
            </div>
            <?php include("../../template/js.php"); ?>
        </body>
    </html>
