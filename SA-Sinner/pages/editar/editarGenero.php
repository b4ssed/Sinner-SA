<?php
session_start();

 ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Editar Gênero</title>
        <?php include("../../template/styles.php"); ?>
        <style>
            .containerCadastro{
            width:400px;
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
        <div class="wrapper">
            <?php include("../../template/sidebar.php"); ?>
            <div id="content" class="containerPrincipal">
            <div class="containerCadastro">
              <?php
                $id = $_GET['id'];
                echo '<form action="../../includes/editar/editarGenero.php?id='.$id.'" method="post">';
              ?>

                  <!-- area de campos do form -->
                  <hr />

                    <div class="form-group">
                      <H2>Gênero</H2>
                      <?php
                          if (isset($arrayorc[0]['descricao'])) {
                            echo '<input id="descricao" name="descricao" type="text" value="'.$arrayorc[0]["descricao"].'" class="form-control" required>';
                          }else {
                            echo '<input id="descricao" name="descricao" type="text" placeholder="descricao" class="form-control" required>';
                          }

                           ?>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-dark">Enviar</button>
                    </div>
                    <div>
                        <button class="form-control btn btn-dark" type='button' onclick="window.location.href='index.php'">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
        <?php include("../../template/js.php"); ?>
    </body>
</html>
