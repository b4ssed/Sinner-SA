<?php
    $descricao = $_POST["descricao"];
    $duracao = $_POST["duracao"];
    $destino= '../css/images/image'; 
    $ext = strtolower(substr($_FILES['imgband']['name'],-4));
        //verifica caratere especial
        //if (preg_match("/^([a-zA-Z0-9]+)$/", $descricao)){
            

            if($ext=="jpeg"||$ext==".png"||$ext==".gif"||$ext=="jfif"||$ext==".img"||$ext==".jpg"){
                $new_name = $_FILES['imgband']['name'];
                $caminho="../css/images/image".$new_name;
                echo $caminho;
                move_uploaded_file($_FILES['imgband']['tmp_name'], $destino.$new_name);
        
                }else{
                    
                    echo "<script> alert('esse tipo de imagem n é suportada'); window.location.href = '../pages/CBanda.php'; </script>" ;
                }
            $con = mysqli_connect("localhost", "root", "root", "database_sinner");
            $query = mysqli_query($con,"INSERT INTO album VALUES(DEFAULT, '$duracao', '$descricao', '$caminho', 1)");
            mysqli_close($con);
            header("Location: ../pages/VisualizarAlbum.php");
       // }

?>