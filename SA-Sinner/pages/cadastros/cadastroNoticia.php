<html>
<form action="../../includes/cadastros/cadastroNoticia.php?aa='1'" enctype="multipart/form-data"  method="post" >
 <H1>Cadastro de Notícia</H1>
<label >Titulo da Notícia:</label>
<input type="text" name="TNoticia" required >



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
<label>Imagem da Noticia.</label>
<input type="file" name="imgband" >
<button  id='submitt' type="submit">noticia</button>
</form>
</html>