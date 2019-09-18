<?php 
       
    $nome = $_POST["user"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    insert($nome, $email, $senha);
    

    function insert($nome, $email, $senha){
        $con = mysqli_connect("localhost", "root", "root", "database_sinner"); 
        $query = mysqli_query($con,"INSERT INTO usuario VALUES(DEFAULT, '$nome', '$email', '$senha', NULL, 1)");
        mysqli_close($con); 
    }
      
       
?>