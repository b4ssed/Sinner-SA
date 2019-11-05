<!-- move_uploaded_file -->
<html>
    <head>
        <?php include("../../template/styles.php"); ?>
        <link rel="stylesheet" href="../../css/styleCadastro.css">
    </head>
    <body>
        <div class="wrapper">
            <?php include("../../template/navbar.php"); ?>
            <div class="containerPrincipal" id ='content'>
                <div class="containerCadastro">
                    <form action="../../includes/cadastros/cadastroBanda.php" enctype="multipart/form-data"  method="post" >
                        <center>
                            <H1>Cadastro de Banda</H1>
                        </center>
                        <div class="form-group">
                            <label for="name">Nome da banda:</label>
                            <input type="text" class="form-control" name="name" required >
                        </div>
                        <div class="form-group">
                            <label for="imgband">Imagem da banda</label>
                            <input type="file"  name="imgband" >
                        </div>
                        <button type="submit" class="btn btn-dark form-control">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
        <?php include("../../template/js.php"); ?>
    </body>
</html>
