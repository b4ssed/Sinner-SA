<?php

 $nmusica = $_POST['name'];
 $duracao = $_POST['duracao'];
 $album = $_POST['album'];

    $destino= '../../../../Sinner-SA/SA-Sinner/css/music/';
    $ext = strtolower(substr($_FILES['music']['name'],-4));
    if($ext==".mp3"||$ext==".wma"||$ext==".aac"||$ext==".ogg"){
        $new_name = $_FILES['music']['name'];
        $destino="../../../../Sinner-SA/SA-Sinner/css/music/".$new_name;
        echo $destino;
        print_r($_FILES['music']);
        move_uploaded_file($_FILES['music']['tmp_name'], $destino.$new_name);
        $con = mysqli_connect("localhost", "root", "", "database_sinner");
        $query_insert = mysqli_query($con,"INSERT INTO musica VALUES(DEFAULT, '$nmusica', '$duracao', '$destino', $album)");
        mysqli_close($con);
        header('Location: ../../pages/cadastros/cadastroMusica.php');
    }else{
        header('Location: ../../pages/cadastros/cadastroMusica.php');
    }

?>
