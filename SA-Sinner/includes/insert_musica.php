<?php
$destino= '../css/music/music'; 
$ext = strtolower(substr($_FILES['imgband']['name'],-4));
if($ext=="jpeg"||$ext==".png"||$ext==".gif"||$ext=="jfif"||$ext==".img"||$ext==".jpg"){
$new_name = $_FILES['imgband']['name'] . $ext;
$caminho="../css/images/image".$new_name;
echo $caminho;
move_uploaded_file($_FILES['imgband']['tmp_name'], $destino.$new_name);
insert($nome, $caminho );
}else{
    
    echo "<script> alert('esse tipo de imagem n é suportada'); window.location.href = '../pages/CBanda.php'; </script>" ;
}
?>