<?php
    $id = $_GET['excluirGenero'];
          //exclui dado da tabela
          $con = mysqli_connect("localhost", "root", "root", "database_sinner");
          $sql = mysqli_query($con,"DELETE from genero where id_genero = ".$id);
        header("Location: ../pages/VisualizarGenero.php");

?>
