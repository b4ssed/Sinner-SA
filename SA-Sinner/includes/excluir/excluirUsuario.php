<?php
    $id = $_GET['id'];
    //exclui dado da tabela
    $con = mysqli_connect("localhost", "root", "", "database_sinner");
    $query = mysqli_query($con,"DELETE from usuario where id_usuario=$id");
    mysqli_close($con);
    header("Location: ../../pages/visualizar/visualizarUsuario.php");
?>
