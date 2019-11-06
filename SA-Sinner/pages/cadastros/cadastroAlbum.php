<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cadastro Album</title>
        <?php include("../../template/styles.php"); ?>
        <style>
            .containerCadastro{
            width:600px;
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
            <?php include("../../template/navbar.php"); ?>
            <div id="content" class="containerPrincipal">
            <div class="containerCadastro">
                <form action="../../includes/cadastros/cadastrarAlbum.php" enctype="multipart/form-data" method="post">
                  <!-- area de campos do form -->
                  <hr />
                  <H1>Cadastro de Album</H1>
                    <div class="form-group">
                      <label for="descricao">Duração</label>
                      <input type="text" class="form-control" name="duracao" placeholder="Duração">
                    </div>
                    <div class="form-group">
                      <label for="descricao">Descrição</label>
                      <input type="text" class="form-control" name="descricao" placeholder="Descrição">
                    </div>
                    <div class="form-group">
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

                </form>
                <button class="btn btn-default" type='button' onclick="window.location.href='../visualizar/visualizarAlbum.php'">Cancelar</button>
            </div>
        </div>
        <?php include("../../template/js.php"); ?>
    </body>
</html>
