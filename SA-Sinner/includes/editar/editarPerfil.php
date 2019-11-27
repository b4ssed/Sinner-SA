<?php
    session_start();

    $pic = $_FILES['pic1']['name'];
    $name = $_POST['name1'];
    $email = $_POST['email1'];
    $password = $_POST['password1'];
     $id = $_SESSION['usuario'][0]['id_usuario'] ;
      
    
    
            $con = mysqli_connect("localhost", "root", "", "database_sinner");
            if($pic!=""){
                echo"asdasd";
                $ext = strtolower(substr($_FILES['pic1']['name'],-4));
                if($ext=="jpeg"||$ext==".png"||$ext==".gif"||$ext=="jfif"||$ext==".img"||$ext==".jpg"){
                    $destino= '../../css/images/image';
                    $new_name = $_FILES['pic1']['name'];
                    $caminho="../../css/images/image".$new_name;
                    move_uploaded_file($_FILES['imgband']['tmp_name'], $destino.$new_name);
                    $query = mysqli_query($con,"UPDATE usuario SET img='$caminho' WHERE id_usuario = $id");
                    }else{
    
                        echo "<script> alert('esse tipo de imagem n é suportada'); window.location.href = '../../pages/cadastros/cadastroAlbum.php'; </script>" ;
                    }
                    
               
            }
            
           if($name!=""){
                $query1 = mysqli_query($con,"UPDATE usuario SET nome='$name' WHERE id_usuario = $id");
            }
            
            if($email!=""){
                $query2 = mysqli_query($con,"UPDATE usuario SET email='$email' WHERE id_usuario = $id");
            }

            if($password!=""){
                $query1 = mysqli_query($con,"UPDATE usuario SET senha='$password' WHERE id_usuario = $id");
            }
            mysqli_close($con);
          // header("Location: ../../pages/visualizar/perfil.php");
        

?>
