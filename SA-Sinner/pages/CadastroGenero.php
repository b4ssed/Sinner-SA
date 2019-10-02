<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cadastro Gênero</title>
        <?php include("../template/styles.php"); ?>
         
    </head>
    <body>
    
        <div class="wrapper">
            <?php include("../template/navbar.php"); ?>
            <div id="content">

                <?php include("../includes/btnNavbar.php"); ?>               
                <form action="../includes/AdcGenero.php" method="post">
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
        <?php include("../template/js.php"); ?>
    </body>
</html>