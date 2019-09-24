
<?php
    $descricao = $_POST['descricao'];

    CadastroGenero($descricao);

    function CadastroGenero($descricao){
        $con = mysqli_connect("localhost", "root", "root", "database_sinner");
        $query = mysqli_query($con,"INSERT INTO genero VALUES(DEFAULT, '$descricao')");
        mysqli_close($con);
    }
?>