<?php
    $desc = $_POST["descricao"];
        //verifica caratere especial
        if (preg_match("/^([a-zA-Z0-9]+)$/", $desc)){
            $con = mysqli_connect("localhost", "root", "root", "database_sinner");
            $query = mysqli_query($con,"INSERT INTO genero VALUES(DEFAULT, '$desc')");
            mysqli_close($con);
            header("Location: ../../pages/VisualizarGenero.php");
        }

?>
