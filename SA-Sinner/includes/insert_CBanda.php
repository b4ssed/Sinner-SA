
<?php    
    $nome = $_POST['name'];
    $destino= '../css/images/image'; 
    $ext = strtolower(substr($_FILES['imgband']['name'],-4));
    if($ext=="jpeg"||$ext==".png"||$ext==".gif"||$ext=="jfif"||$ext==".img"||$ext==".jpg"){
    $new_name = $_FILES['imgband']['name'] . $ext;
    $caminho="../css/images/image".$new_name;
    echo $caminho;
    move_uploaded_file($_FILES['imgband']['tmp_name'], $destino.$new_name);
    }else{
        
        echo "<script> alert('esse tipo de imagem n é suportada'); window.location.href = '../pages/CBanda.php'; </script>" ;
    }
    function insert($nome, $caminho ){
        $con = mysqli_connect("localhost", "root", "root", "database_sinner"); 
        $query = mysqli_query($con,"INSERT INTO banda VALUES(DEFAULT, '$nome', '$caminho')");
        mysqli_close($con);
        echo "<script> alert('banda cadastrada :)'); window.location.href = '../pages/CBanda.php'; </script>" ;
}  

?>