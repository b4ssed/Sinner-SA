<?php
 $con = mysqli_connect("localhost", "root", "", "database_sinner");
 $id= $_POST['id'];
 $name=$_POST['descricao'];

 echo $name;

        //RESGATA OS DADOS
    $query = mysqli_query($con, "SELECT * FROM banda where id_banda = $id");
    $dados = mysqli_fetch_all($query, MYSQLI_ASSOC);
    $ext11 = ($dados[0]['img']);

//ADICIONA A NOVA IMAGEM E EXCLUI A ANTIGA
 $destino= '../../css/images/image';
    $ext = strtolower(substr($_FILES['imgband']['name'],-4));
    if($ext=="jpeg"||$ext==".png"||$ext==".gif"||$ext=="jfif"||$ext==".img"||$ext==".jpg"){
    $new_name = $_FILES['imgband']['name'].$id.$ext;
    $caminho="../../css/images/image".$new_name;
    move_uploaded_file($_FILES['imgband']['tmp_name'], $destino.$new_name);
    unlink($ext11);

    $query1 = mysqli_query($con,"UPDATE banda SET descricao='$name', img='$caminho' WHERE id_banda=$id ");
    mysqli_close($con);
    }else{

      echo "<script> alert('esse tipo de imagem n é suportada'); window.location.href = '../../pages/cadastros/cadastroBanda.php'; </script>" ;
    }
  header("Location: ../../pages/visualizar/visualizarBanda.php");
?>
