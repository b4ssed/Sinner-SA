<?php
    $id = $_GET['excluirAlbum'];
          //exclui dado da tabela
          $con = mysqli_connect("localhost", "root", "", "database_sinner");
          $sql = mysqli_query($con,"DELETE from album where id_album = ".$id);
        header("Location: ../pages/VisualizarAlbum.php");

?>