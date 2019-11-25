<?php
    $id = $_GET['excluirGenero'];
          //exclui dado da tabela
          $con = mysqli_connect("localhost", "root", "", "database_sinner");
          $query = mysqli_query($con,"DELETE from genero where id_genero = ".$id);
          mysqli_close($con);
        header("Location: ../../pages/cadastros/visualizarGenero.php");

?>
