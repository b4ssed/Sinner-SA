<?php
    $id = $_GET['id'];
    echo $id;
          //exclui dado da tabela
          $con = mysqli_connect("localhost", "root", "", "database_sinner");
          $query = mysqli_query($con,"DELETE from genero where id_genero =$id");
          mysqli_close($con);
          header("Location: ../../pages/visualizar/visualizarGenero.php");

?>
