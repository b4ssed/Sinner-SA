<?php

 $nmusica = $_POST['name'];
 $duracao = $_POST['duracao'];
 $genero = $_POST['genero'];
 $album = $_POST['album'];

    $destino= '../../css/music/';
    $ext = strtolower(substr($_FILES['music']['name'],-4));
    if($ext==".mp3"||$ext==".wma"||$ext==".aac"||$ext==".ogg"){
        $new_name = $_FILES['music']['name'];
        $caminho="../css/music/".$new_name;
    // echo $caminho;
    // print_r($_FILES['music']);
        move_uploaded_file($_FILES['music']['tmp_name'], $caminho);
        $con = mysqli_connect("localhost", "root", "", "database_sinner");
        $query_insert = mysqli_query($con,"INSERT INTO musica VALUES(DEFAULT, '$nmusica', '$duracao', '$caminho', $album, $genero)");
        mysqli_close($con);
        echo "<script> alert('Musica cadastrada com sucesso !'); window.location.href ='../../pages/cadastros/cadastroMusica.php'; </script>" ;
    }else{

        echo "<script> alert('Esse tipo arquivo não é suportado'); window.location.href ='../../pages/cadastros/cadastroMusica.php'; </script>" ;
    }







?>
