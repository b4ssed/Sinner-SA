<?php 
    session_start();
    if (isset($_POST["usuario"])){
        $nome = $_POST["usuario"];
    }   
    if (isset($_POST["email"])){
        $email = $_POST["email"];
    }
    if (isset($_POST["senha"])){
        $senha = $_POST["senha"];
    }
    
    insert($nome, $email, $senha);
    

    function cadastroUsuario($nome, $email, $senha){
        $con = mysqli_connect("localhost", "root", "root", "database_sinner"); 
        $query = mysqli_query($con,"INSERT INTO usuario VALUES(DEFAULT, '$nome', '$email', '$senha', NULL, 1)");
        mysqli_close($con); 
    }
      
       
?>