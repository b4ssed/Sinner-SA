<?php
    $desc = $_POST['descricao'];

        //exclui dado da tabela
            $con = mysqli_connect("localhost", "root", "root", "database_sinner");
            $sql = mysqli_query($con,"DELETE from genero where id_genero = ".$id);
      
    if(mysql_query($sql,$con)){
        $msg = "Deletado com sucesso!";
    }else{
        $msg = "Erro ao deletar!";
    }
    mysql_close($con);    
      
    ?>
        }
?>