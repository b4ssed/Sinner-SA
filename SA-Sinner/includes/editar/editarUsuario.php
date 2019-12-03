<?php
    $id = $_GET['id'];
    $nome = $_POST["usuario"];
    $email = $_POST['email'];
    $senha = $_POST["senha"];
    $tipoUsuario = $_POST["tipoUsuario"];

    $con = mysqli_connect("localhost", "root", "", "database_sinner");


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
        header("Location: ../../pages/visualizar/visualizarUsuario.php?erro=200");
    }else{
        if($dupUser == $nome){
            mysqli_close($con);
            header("Location: ../../pages/visualizar/visualizarUsuario.php?erro=202");
        }elseif($dupEmail == $email){
            mysqli_close($con);
            header("Location: ../../pages/visualizar/visualizarUsuario.php?erro=201");
        }else{
            $query_insert = mysqli_query($con,"UPDATE usuario SET nome='$nome', email='$email', senha='$senha', tipo_usuario_id_tipo_usuario=$tipoUsuario WHERE id_usuario=$id");
            if ($query_insert){
                mysqli_close($con);
                header("Location: ../../pages/visualizar/visualizarUsuario.php");
            }else{
                mysqli_close($con);
                header("Location: ../../pages/visualizar/visualizarUsuario.php?erro=203");
            }
        }
    }



?>
