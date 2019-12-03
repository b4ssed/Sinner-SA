<?php
    $admPanel = $_GET['admPanel'];
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
      if ($admPanel==1) {
        mysqli_close($con);
        header("Location: ../../pages/cadastros/cadastroUsuarioAdministrador.php?erro=200");
      }else{
        mysqli_close($con);
        header("Location: ../../pages/cadastros/cadastroUsuario.php?erro=200");
      }

    }else{
        if($dupUser == $nome){
          if ($admPanel==1) {
            mysqli_close($con);
            header("Location: ../../pages/cadastros/cadastroUsuarioAdministrador.php?erro=202");
          }else{
            mysqli_close($con);
            header("Location: ../../pages/cadastros/cadastroUsuario.php?erro=202");
          }
        }elseif($dupEmail == $email){
          if ($admPanel==1) {
            mysqli_close($con);
            header("Location: ../../pages/cadastros/cadastroUsuarioAdministrador.php?erro=201");
          }else{
            mysqli_close($con);
            header("Location: ../../pages/cadastros/cadastroUsuario.php?erro=201");
          }
        }else{
            $query_insert = mysqli_query($con,"INSERT INTO usuario VALUES(DEFAULT, '$nome', '$email', '$senha', NULL, $tipoUsuario)");
            if ($admPanel==1) {
              mysqli_close($con);
              header("Location: ../../pages/cadastros/cadastroUsuarioAdministrador.php");
            }elseif ($query_insert){
                mysqli_close($con);
                header("Location: ../../pages/login.php?newUser=1");
            }else{
              if ($admPanel==1) {
                mysqli_close($con);
                header("Location: ../../pages/cadastros/cadastroUsuarioAdministrador.php?erro=203");
              }else{
                mysqli_close($con);
                header("Location: ../../pages/cadastros/cadastroUsuario.php?erro=203");
              }
            }
        }
    }



?>
