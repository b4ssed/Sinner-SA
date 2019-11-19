<?php    
    $nome = $_POST['TNoticia'];
    $conteudo = $_POST['CNoticia'];
    $GENERO=$_POST['genero'];
   


    $destino= '../css/imagesnoticia/image'; 
    $data=date('s'). $_FILES['imgband']['name'];
    $ext = strtolower(substr($_FILES['imgband']['name'],-4));
    if($ext=="jpeg"||$ext==".png"||$ext==".gif"||$ext=="jfif"||$ext==".img"||$ext==".jpg"){
    $new_name =$data ;
    $caminho="../css/imagesnoticia/image".$new_name;
    move_uploaded_file($_FILES['imgband']['tmp_name'], $destino.$new_name);
    $con = mysqli_connect("localhost", "root", "", "database_sinner"); 
        $query = mysqli_query($con,"INSERT INTO noticia VALUES(DEFAULT, '$nome', '00','$caminho',$GENERO)");
        mysqli_close($con);
        echo "<script> alert('digite a noticia :)'); window.location.href = '../../../testebanco/testen.php'; </script>" ;

    }else{
        
        echo "<script> alert('esse tipo de imagem não é suportada'); window.location.href = '../pages/CNoticia.php'; </script>" ;
    }
  

?>