<?php
// Inicia sessões
session_start();
// Verifica se existe os dados da sessão de login
if (isset($_SESSION['usuario'])) {
  //Verifica o tipo de usuário
  if (!isset($_SESSION["tipo_usuario"])) {
    //Armezena o tipo de usuário em uma Sessão
    foreach ($_SESSION['usuario'] as $key => $value) {
      if ($value["tipo_usuario_id_tipo_usuario"] == 1) {
        $_SESSION["tipo_usuario"] = "ADM";
      }elseif ($value["tipo_usuario_id_tipo_usuario"] == 2) {
        $_SESSION["tipo_usuario"] = "CMN";
      }
    }
  }
}else{
  // Usuário não logado! Redireciona para a página de login
  header("Location:../../../../Sinner-SA/SA-Sinner/index.php");
}







?>
