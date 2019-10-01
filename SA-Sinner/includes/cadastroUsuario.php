<?php 
    $nome = $_POST["usuario"];
    $email = $_POST['email'];
    $senha = $_POST["senha"];
     
    $con = mysqli_connect("localhost", "root", "root", "database_sinner"); 
    
    //Selecionar Email Duplicado
    $query_email = mysqli_query($con,"SELECT email FROM usuario WHERE email = '$email'");
    $arrayEmail = mysqli_fetch_array($query_email);
    $dupEmail = $arrayEmail['email'];
    
    //Selecionar Usuario Duplicado
    $query_user = mysqli_query($con,"SELECT nome FROM usuario WHERE nome = '$nome'");
    $arrayUser = mysqli_fetch_array($query_user);
    $dupUser = $arrayUser['nome'];

    //Verificar Cadastro
    if (!preg_match("/^([a-zA-Z0-9]+)$/", $nome)){
        header("Location: ../pages/cadastro.php?erro=200");
    }else{
        if($dupEmail == $email){
            header("Location: ../pages/cadastro.php?erro=201");     
        }elseif($dupUser == $nome){
            header("Location: ../pages/cadastro.php?erro=202");
        }else{
            $query_insert = mysqli_query($con,"INSERT INTO usuario VALUES(DEFAULT, '$nome', '$email', '$senha', NULL, 1)");
            if ($query_insert){
                session_start();
                $query_session = mysqli_query($con, "SELECT * FROM usuario WHERE nome='$nome'");
                $sessionUser = mysqli_fetch_all($query_session, MYSQLI_ASSOC);
                $_SESSION["usuario"]  = $sessionUser;        
                mysqli_close($con);
            }else{
                header("Location: ../pages/cadastro.php?erro=203");   
            }
        }
    }
        
        
              
?>