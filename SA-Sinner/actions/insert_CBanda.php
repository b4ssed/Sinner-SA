
<?php    
  //  $nome = $_POST["max"];
    $destino= '../css/images/image'; 
    $ext = strtolower(substr($_FILES['imgband']['name'],-4));
    if($ext=="jpeg"||$ext==".png"||$ext==".gif"||$ext=="jfif"||$ext==".img"||$ext==".jpg"){
    $new_name = date("Y.m.d-H.i.s") . $ext;
    $caminho="../css/iamges/image".$new_name;
    echo $caminho;
    move_uploaded_file($_FILES['imgband']['tmp_name'], $destino.$new_name);
   // insert($nome);
    }else{
        
        echo "<script> alert('esse tipo de imagem n é suportada'); window.location.href = '../CBanda.php'; </script>" ;
    }
    function insert($nome){
        $con = mysqli_connect("localhost", "root", "root", "database_sinner"); 
        $query = mysqli_query($con,"INSERT INTO banda VALUES(DEFAULT, '$nome', NULL)");
        mysqli_close($con);
       header("location:../CBanda.php"); 
}  
//header("location:../CBanda.php");  
?>