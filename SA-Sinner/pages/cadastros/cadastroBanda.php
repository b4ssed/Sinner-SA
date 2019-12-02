<!-- move_uploaded_file -->
<html>
    <head>
        <?php include("../../template/styles.php"); ?>
        <link rel="stylesheet" href="../../css/styleCadastro.css">
    </head>
    <body>
        <div class="wrapper">
          <?php session_start(); ?>
            <?php include("../../template/sidebar.php"); ?>
            <div class="container" id ='content'>
                <div class="containerCadastro">
                    <form action="../../includes/cadastros/cadastroBanda.php" enctype="multipart/form-data"  method="post" >
                    <center>
                    <H2>Cadastro de Banda</H2>
                    </center>
                        <div class="form-group">
                            <label for="name">Nome da banda</label>
                            <input type="text" class="form-control" name="name" required >
                        </div>
                        <div class="form-group">
                            <label for="name">Gênero</label>
                            <select name="genero">
                                <?php
                                    $con = mysqli_connect("localhost", "root", "", "database_sinner");

                                    //Selecionar Genero
                                    $query_genero = mysqli_query($con,"SELECT * FROM genero");
                                    $arrayGenero = mysqli_fetch_all($query_genero);
                                    $genero = $arrayGenero;

                                    //Printar Select Genero
                                    foreach($genero as $key => $value){
                                        echo '<option value="'.$value[0].'">'.$value[1].'</option>';
                                    }

                                    mysqli_close($con)
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="imgband">Imagem da banda:</label>
                            <input type="file"  name="imgband" >
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
