
<?php
    $nome = $_POST['name'];
    $destino= '../../../../Sinner-SA/SA-Sinner/css/images/image';
    $data=date('s'). $_FILES['imgband']['name'];
    $genero = $_POST['genero'];
    $ext = strtolower(substr($_FILES['imgband']['name'],-4));
    if($ext=="jpeg"||$ext==".png"||$ext==".gif"||$ext=="jfif"||$ext==".img"||$ext==".jpg"){
    $new_name =$data ;
    $caminho="../../../../Sinner-SA/SA-Sinner/css/images/image".$new_name;
    echo $caminho;
    move_uploaded_file($_FILES['imgband']['tmp_name'], $destino.$new_name);
    }else{

      header('Location: ../../pages/cadastros/cadastroBanda.php');
    }
        $con = mysqli_connect("localhost", "root", "", "database_sinner");
        $query = mysqli_query($con,"INSERT INTO banda VALUES(DEFAULT, '$nome', '$caminho', '$genero')");
        mysqli_close($con);
        header('Location: ../../pages/cadastros/cadastroBanda.php');

?>
