<?php
    $id = $_GET['idb'];
    echo$id;
          //exclui dado da tabela
          $con = mysqli_connect("localhost", "root", "", "database_sinner");
          $sql = mysqli_query($con,"DELETE from noticia where id_noticia=$id");
          mysqli_close($con);
        header("Location: ../../pages/visualizar/visualizarNoticia.php");

?>
