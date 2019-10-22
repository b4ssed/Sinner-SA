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
        mysqli_close($con);
        header("Location: ../pages/cadastros/cadastroUsuario.php?erro=200");
    }else{
        if($dupEmail == $email){
            mysqli_close($con);
            header("Location: ../pages/cadastros/cadastroUsuario.php?erro=201");
        }elseif($dupUser == $nome){
            mysqli_close($con);
            header("Location: ../pages/cadastros/cadastroUsuario.php?erro=202");
        }else{
            $query_insert = mysqli_query($con,"INSERT INTO usuario VALUES(DEFAULT, '$nome', '$email', '$senha', NULL, 1)");
            if ($query_insert){
                mysqli_close($con);
                header("Location: ../pages/login.php");
            }else{
                mysqli_close($con);
                header("Location: ../pages/cadastros/cadastroUsuario.php?erro=203");
            }
        }
    }



?>
