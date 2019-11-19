<html>
<form action="../../includes/cadastros/cadastroNoticia.php?aa='1'" enctype="multipart/form-data"  method="post" >
 <H1>Cadastro de Notícia</H1>
<label >Titulo da Notícia:</label>
<input type="text" name="TNoticia" required >
    <?php include("../../template/styles.php"); ?>
    <link rel="stylesheet" href="../../css/styleCadastro.css">
    <div class="wrapper">
    <?php include("../../template/navbar.php"); ?>
    <div id="content" class="container">
    <div class="containerCadastro">
    <hr />
                  <center>
                  <H2>Cadastro de Noticia</H2>
                  </center>
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
    <button  id='submitt' type="submit" class="form-control btn btn-dark"> noticia</button>
</form>
</div>
</div>
</div>

</html>