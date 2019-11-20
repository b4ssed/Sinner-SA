<?php
    $desc = $_POST["descricao"];
        //verifica caractere especial
        $con = mysqli_connect("localhost", "root", "", "database_sinner");
        $query = mysqli_query($con,"INSERT INTO genero VALUES(DEFAULT, '$desc')");
        mysqli_close($con);
        header("Location: ../../pages/visualizar/visualizarGenero.php");


?>
