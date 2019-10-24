<?php
  if (isset($_POST["name"])){
     //Cria a conexão com o banco de dados
     $con = mysqli_connect("localhost","root","root","database_sinner");
     //Variaveis que recebem os dados 
     $nmusica = $_POST['name'];
     $duracao = $_POST['duracao'];
     $genero = $_POST['genero'];
     $album = $_POST['album'];
  } // FIM DO IF
  $destino= '../css/music/'; 
  $ext = strtolower(substr($_FILES['music']['name'],-4));
  if($ext==".mp3"||$ext==".wma"||$ext==".aac"||$ext==".ogg"){
      $new_name = $_FILES['music']['name'];
      $caminho="../css/music/".$new_name;
      move_uploaded_file($_FILES['music']['tmp_name'], $caminho);
      $query = mysqli_query($con, "UPDATE musica SET dsmusica='$nmusica', duracao=$duracao, musica='$caminho', genero_id_genero=$genero, album_id_album=$album") or DIE(mysqli_error($connect));
      mysqli_close($con);
      echo "<script> alert('Musica Atualizada com sucesso !'); window.location.href ='../pages/cadastroMusica.php'; </script>" ;
      header("Location:../pages/visualizar_musica.php");
  }else{
      
      echo "<script> alert('Erro ao atualizar a musica '); window.location.href ='../pages/cadastroMusica.php'; </script>" ;
  }
  
?>