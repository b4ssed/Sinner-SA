<?php

$connect = mysqli_connect ('localhost','root','root','database_sinner');

//$id = $_GET["id"];
    
    //include_once '../includes/connect.php';
    $id = 1;
    $sql = mysqli_query($connect,"delete from usuario where id_usuario = ".$id);
      
//     if(mysql_query($sql,$connect)){
//         $msg = "Deletado com sucesso!";
//    }else{
//         $msg = "Erro ao deletar!";
//     }
    mysqli_close($connect);    
      
    ?>