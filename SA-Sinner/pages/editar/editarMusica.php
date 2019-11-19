
<!DOCTYPE html>
<html>
  <head>
    <title>Editar musica</title>
  </head>
  <body>
    <?php
      $id_musica = $_GET["id_musica"];
       echo '<form action="../../includes/editar/editarMusica.php?id='.$id_musica.'" enctype="multipart/form-data" method="post">'
    ?>

      <div>
    	  <input type="text" name="name" placeholder="Nome da Música" required>
      </div>

      <div>
      	<input type="float" name="duracao" placeholder="Duração" required>
      </div>

      <div>
      	<input type="file" name="music">
      </div>
        <div>
            <label>Genero</label>
            <select name="genero">
                <?php
                    $con = mysqli_connect("localhost", "root", "", "database_sinner");

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
            $con = mysqli_connect("localhost", "root", "", "database_sinner");

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

      <button name="enviar" type="submit">Alterar</button>
    </form>
  </body>
</html>