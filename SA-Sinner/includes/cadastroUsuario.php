<?php 
    session_start();
    if (preg_match('/^[a-zA-Z0-9]+/', $username)){
        $nome = $_POST["usuario"];
    }else{
        header("Location: ../index.php?erro=200");
    }   
    if (preg_match('/^[a-zA-Z0-9]+/', $username)){
        $email = $_POST["email"];
    }else{
        header("Location: ../index.php?erro=201");
    }
    if  (preg_match('/^[a-zA-Z0-9]+/', $username)){
        $senha = $_POST["senha"];
    }else{
        header("Location: ../index.php?erro=202");
    }
    
    insert($nome, $email, $senha);
    

    function cadastroUsuario($nome, $email, $senha){
        $con = mysqli_connect("localhost", "root", "root", "database_sinner"); 
        $query = mysqli_query($con,"INSERT INTO usuario VALUES(DEFAULT, '$nome', '$email', '$senha', NULL, 1)");
        mysqli_close($con); 
    }
      
       
?>