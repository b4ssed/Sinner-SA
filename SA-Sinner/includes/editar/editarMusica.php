<?php
$id_musica = $_GET["id"];

echo ($id_musica);
  if (isset($_GET['id'])){
     //Cria a conexão com o banco de dados
     $con = mysqli_connect("localhost","root","","database_sinner");
     //Variaveis que recebem os dados
     $nmusica = $_POST['name'];
     $duracao = $_POST['duracao'];
     $genero = $_POST['genero'];
     $album = $_POST['album'];
  } // FIM DO IF


  $query = mysqli_query($con, "SELECT * FROM musica where id_musica  = $id_musica");
  $dados = mysqli_fetch_all($query, MYSQLI_ASSOC);
  print_r($dados);
  $ext11 = ($dados[0]['musica']);
  unlink($ext11);

  $destino= '../../../../Sinner-SA/SA-Sinner/css/music/';
  $ext = strtolower(substr($_FILES['music']['name'],-4));
  if($ext==".mp3"||$ext==".wma"||$ext==".aac"||$ext==".ogg"){
      $new_name = $_FILES['music']['name'];
      $caminho="../../../../Sinner-SA/SA-Sinner/css/music/".$new_name;
      move_uploaded_file($_FILES['music']['tmp_name'], $caminho);
      $query = mysqli_query($con, "UPDATE musica SET descricao='$nmusica', duracao=$duracao, musica='$caminho', album_id_album=$album WHERE id_musica = '$id_musica'") or DIE(mysqli_error($con));
      mysqli_close($con);
      echo "<script> alert('Musica Atualizada com sucesso !'); window.location.href ='../../pages/cadastros/cadastroMusica.php'; </script>" ;
      header("Location:../../pages/visualizar/visualizarMusica.php");
  }else{

      echo "<script> alert('Erro ao atualizar a musica '); window.location.href ='../../pages/cadastros/cadastroMusica.php'; </script>" ;
  }

?>
