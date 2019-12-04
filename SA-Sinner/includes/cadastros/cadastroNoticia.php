<?php
    $nome = $_POST['TNoticia'];

    $GENERO=$_POST['genero'];



    $destino= '../../../../Sinner-SA/SA-Sinner/css/imagesnoticia/image';

    $data=date('s'). $_FILES['imgband']['name'];
    $ext = strtolower(substr($_FILES['imgband']['name'],-4));
    if($ext=="jpeg"||$ext==".png"||$ext==".gif"||$ext=="jfif"||$ext==".img"||$ext==".jpg"){
    $new_name =$data ;
    $caminho="../../../../Sinner-SA/SA-Sinner/css/imagesnoticia/image".$new_name;

    move_uploaded_file($_FILES['imgband']['tmp_name'], $destino.$new_name);
    $con = mysqli_connect("localhost", "root", "", "database_sinner");
        $query = mysqli_query($con,"INSERT INTO noticia VALUES(DEFAULT, '$nome', '00','$caminho',$GENERO)");
        mysqli_close($con);
        header('Location: ../../pages/cadastros/cadastroNoticia.php');

    }else{

        header('Location: ../../pages/cadastros/cadastroNoticia.php');
    }


?>
