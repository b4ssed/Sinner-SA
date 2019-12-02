<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cadastro Album</title>
        <?php session_start(); ?>
        <?php include("../../template/styles.php"); ?>
        <link rel="stylesheet" href="../../css/styleCadastro.css">
    </head>
    <body>

        <div class="wrapper">
            <?php include("../../template/sidebar.php"); ?>
            <div id="content" class="container">
            <div class="containerCadastro">
                <form action="../../includes/cadastros/cadastrarAlbum.php" enctype="multipart/form-data" method="post">
                  <!-- area de campos do form -->
                  <hr />
                  <center>
                  <H2>Cadastro de Album</H2>
                  </center>
                    <div class="form-group">
                      <label for="descricao">Duração</label>
                      <input type="text" class="form-control" name="duracao" placeholder="Duração">
                    </div>
                    <div class="form-group">
                      <label for="descricao">Descrição</label>
                      <input type="text" class="form-control" name="descricao" placeholder="Descrição">
                    </div>
                    <div class="form-group">
                        <label for="descricao">Banda</label>
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
                            </select>
                    </div>
                    <div class="form-group">
                        <label>Imagem do Album:</label>
                        <input type="file" name="imgband">
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
        </div>
        <?php include("../../template/js.php"); ?>
    </body>
</html>
