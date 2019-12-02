<html>

    <head>
        <?php include("../../template/styles.php"); ?>
        <link rel="stylesheet" href="../../css/styleCadastro.css">
    </head>

    <div class="wrapper">
        <?php include("../../template/sidebar.php"); ?>
        <?php session_start(); ?>
            <div id="content" class="container">
                <div class="containerCadastro">
                    <hr/>
                  <form action="../../includes/cadastros/cadastroNoticia.php" enctype="multipart/form-data"  method="post" >
                  <center>
                  <H2>Cadastro de Noticia</H2>
                  </center>
                  <div>
                  <label>Titulo da notícia:</label>
                  <input type="text" id="TNoticia" required pattern={*,3} class="form-control" name="TNoticia" placeholde="Lançamento de novo album" >
                  </div>
                  <br>
                  <div class="form-group">
                    <label>Genero:</label>
                <select name="genero" id='genero'>
                    <?php
                    $con = mysqli_connect("localhost", "root", "", "database_sinner");

                    $query_genero = mysqli_query($con,"SELECT * FROM genero");
                    $arrayGenero = mysqli_fetch_all($query_genero);
                    $generos = $arrayGenero;
                    foreach($generos as $key => $value){
                        echo '<option value="'.$value[0].'">'.$value[1].'</option>';
                    }

                    mysqli_close($con)
                     ?>

                </select>
                </div>
                <div class="form-group">
    <label>Imagem da Noticia.</label>
    <input type="file" name="imgband" >
    </div>
    <button  id='submitt' type="submit" class="form-control btn btn-dark">enviar</button>
</form>
</div>
</div>
</div>

</html>
