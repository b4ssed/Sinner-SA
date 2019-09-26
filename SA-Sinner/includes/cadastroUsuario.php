<?php 
    $nome = $_POST["usuario"];
    $email = $_POST['email'];
    $senha = $_POST["senha"];
    if (!preg_match("/^([a-zA-Z0-9]+)$/", $nome)){
        header("Location: ../paginas/cadastro.php?erro=200");
    } 
    
    session_start();
        $con = mysqli_connect("localhost", "root", "root", "database_sinner"); 
        $query = mysqli_query($con,"INSERT INTO usuario VALUES(DEFAULT, '$nome', '$email', '$senha', NULL, 1)");
        $query = mysqli_query($con, "SELECT * FROM usuario WHERE nome='$nome'");
        $arrayUser = mysqli_fetch_all($query, MYSQLI_ASSOC);
        $_SESSION["usuario"]  = $arrayUser;        
        mysqli_close($con);      
?>