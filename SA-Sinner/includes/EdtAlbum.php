<?php
    $id = $_POST['id'];
    $descricao = $_POST['descricao'];
    $duracao = $_POST['duracao'];
        //verifica caratere especial
        if (preg_match("/^([a-zA-Z0-9]+)$/", $descricao)){
            $con = mysqli_connect("localhost", "root", "root", "database_sinner");
            $query = mysqli_query($con,"INSERT INTO album VALUES(DEFAULT, '$duracao', '$descricao', NULL, 1)");
            mysqli_close($con);
            header("Location: ../pages/VisualizarAlbum.php");
        }

?>