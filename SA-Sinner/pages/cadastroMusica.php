<!DOCTYPE html>
<html>
<head>
<style>
 
</style>
  <title>Cadastro musica</title>
</head>
<body>
<!-- <?php // Tratativa de erro #100
if(isset($_GET["erro"])){
  $erro = $_GET["erro"];
  if($erro==100){
    echo"<script>alert('Usuário não cadastrado')</script>";
  }
}
?> -->
<form action="../includes/cadastrarMusica.php" method="post">
  <div>
	  <input type="text" required id="nmusica" name="nmusica" placeholder="Nome da Música">
  </div>
  
  <div>
  	<input type="float"  required id="duracao" name="duracao" placeholder="Duração"> 
  </div>

  <div>
  	<input type="file" id="music" name="music" placeholder=".mp4"> 
  </div>
    <div>
        <label>Genero</label>
        <select name="genero">
            <?php
                $con = mysqli_connect("localhost", "root", "root", "database_sinner");

                //Selecionar Genero
                $query_genero = mysqli_query($con,"SELECT * FROM genero");
                $arrayGenero = mysqli_fetch_all($query_genero);
                $generos = $arrayGenero;
                               
                //Printar Select Genero
                foreach($generos as $key => $value){                
                    echo '<option value="'.$value[0]["id_genero"].'">'.$value[1]["descricao"].'</option>';       
                }
                
                mysqli_close($con)
            ?>
        </select>
    </div>  
  <div>
    <label>Album</label>
    <select name="album">
    <?php
        $con = mysqli_connect("localhost", "root", "root", "database_sinner");

        //Selecionar Album
        $query_album = mysqli_query($con,"SELECT * FROM album");
        $arrayAlbum = mysqli_fetch_all($query_album);
        $albuns = $arrayAlbum;
        
        
        //Printar Select Album
        foreach($albuns as $key => $value){                
            echo '<option value="'.$value[0]["id_album"].'">'.$value[2]["descricao"].'</option>';       
        }

        mysqli_close($con)
    ?>
        
    </select>
  </div>
  
  <button type="submit">Cadastrar</button>
</form>

</body>
</html>
