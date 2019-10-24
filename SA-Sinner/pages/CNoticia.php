
<html>
<form action="../includes/insert_CNoticia.php" enctype="multipart/form-data"  method="post" >
 <H1>Cadastro de Notícia</H1>
<label >Titulo da Notícia:</label>
<input type="text" name="TNoticia" required >
<label > Conteúdo da Notícia</label>
<textarea name="CNoticia" cols="30" rows="10"></textarea>


<label>Genero:</label>
        <select name="genero" id='genero'>
             <?php
                $con = mysqli_connect("localhost", "root", "root", "database_sinner");

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
<button type="submit">Enviar</button>

</form>

</html>