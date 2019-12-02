<?php
    $id = $_GET['id'];

    $desc = $_POST['descricao'];

        //verifica caratere especial
        if(preg_match("/^([a-zA-Z0-9]+)$/", $desc)){
            $con = mysqli_connect("localhost", "root", "", "database_sinner");
            $query = mysqli_query($con,"UPDATE genero SET descricao='$desc' WHERE id_genero = $id");
            mysqli_close($con);
            header("Location: ../../pages/visualizar/visualizarGenero.php");
        }

?>
