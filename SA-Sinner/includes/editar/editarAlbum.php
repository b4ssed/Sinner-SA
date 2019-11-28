<?php
    $id = $_POST['id'];
    $descricao = $_POST['descricao'];
    $duracao = $_POST['duracao'];
    $banda = $_POST['banda'];
    $destino= '../../../../Sinner-SA/SA-Sinner/css/images/image';
    $ext = strtolower(substr($_FILES['imgband']['name'],-4));
        //verifica caratere especial
        //if (preg_match("/^([a-zA-Z0-9]+)$/", $descricao)){

            if($ext=="jpeg"||$ext==".png"||$ext==".gif"||$ext=="jfif"||$ext==".img"||$ext==".jpg"){
                $new_name = $_FILES['imgband']['name'];
                $caminho="../../../../Sinner-SA/SA-Sinner/css/images/image".$new_name;
                echo $caminho;
                move_uploaded_file($_FILES['imgband']['tmp_name'], $destino.$new_name);

                }else{

                    echo "<script> alert('esse tipo de imagem n é suportada'); window.location.href = '../../pages/cadastros/cadastroAlbum.php'; </script>" ;
                }
            $con = mysqli_connect("localhost", "root", "", "database_sinner");
            $query = mysqli_query($con,"UPDATE album SET descricao='$descricao', duracao='$duracao', img='$caminho', banda_id_banda='$banda' WHERE id_album = $id", );
            mysqli_close($con);
            header("Location: ../../pages/visualizar/visualizarAlbum.php");
        //}

?>
