<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cadastro Gênero</title>
        <?php include("../../template/styles.php"); ?>
        <link rel="stylesheet" href="../../css/styleCadastro.css"> 
    </head>
    <body>

        <div class="wrapper">
            <?php include("../../template/navbar.php"); ?>
            <div id="content" class="container">
            <div class="containerCadastro">
                <form action="../../includes/cadastros/cadastrarGenero.php" method="post">
                  <!-- area de campos do form -->
                  <hr />
                    <div class="form-group">
                        <h2>Cadastro Gênero</h2>
                      <input type="text" class="form-control" name="descricao" placeholder="Pagodinho">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-dark">Enviar</button>
                    </div>
                    <div>
                        <button class="form-control btn btn-dark" type='button' onclick="window.location.href='index.php'">Cancelar</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
        <?php include("../../template/js.php"); ?>
    </body>
</html>
