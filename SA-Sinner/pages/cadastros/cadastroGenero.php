<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cadastro Gênero</title>
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
            <?php include("../../template/navbar.php"); ?>
            <div id="content" class="containerPrincipal">
            <div class="containerCadastro">
                <form action="../../includes/AdcGenero.php" method="post">
                  <!-- area de campos do form -->
                  <hr />
                    <div class="form-group">
                      <label for="descricao">Gênero</label>
                      <input type="text" class="form-control" name="descricao" placeholder="Gênero">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="reset" class="btn btn-default">Cancelar</button>
                </form>
            </div>
        </div>
        <?php include("../../template/js.php"); ?>
    </body>
</html>
