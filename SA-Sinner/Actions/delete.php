<?php

    $id = $_GET["id"];
    
    include_once '../includes/connect.php';
      
    $sql = "delete from tb_usuario where idusuario = ".$id;
      
    if(mysql_query($sql,$con)){
        $msg = "Deletado com sucesso!";
    }else{
        $msg = "Erro ao deletar!";
    }
    mysql_close($con);    
      
    ?>