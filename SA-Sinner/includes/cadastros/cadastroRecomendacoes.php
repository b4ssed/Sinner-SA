<?php
  session_start();
  // echo "";
  // // foreach ($_POST as $key => $value) {
  // //   echo $value . ", CU: ". $key  ;
  // //
  // // }
  // print_r($_SESSION["usuario"][0]["id_usuario"]);
  // var_dump($_SESSION["usuario"]["id_usuario"]);
  $con = mysqli_connect("localhost", "root", "", "database_sinner");
  //Conta quantos generos estão registrados no banco
  $query_genero = mysqli_query($con,"SELECT COUNT(id_genero) AS result FROM genero");
  $array_num = mysqli_fetch_assoc($query_genero);
  //Array para armazenar registros enviados pelo form
  $arrayDados = array();
  $a = 0;
  //While para armazenar os registros do form
  while ($a <= $array_num['result']) {
    if (isset($_POST[$a])){
        $arrayDados[] = $_POST[$a];
    }
    $a++;
  }
  //Armazenar no banco de dados
  if (isset($arrayDados)) {
    //Quantidade de generos selecionados pelo usuário
    $qtdDados = count($arrayDados);
    $b = 0;
    while ($b < $qtdDados) {
      //Pegar o id do usuário logado atualmente no site
      //E cadastrar cada genero selecionado pelo usuário
      foreach ($_SESSION['usuario'] as $key => $value) {
        //Selecionar id dos generos
        $query_genero1 = mysqli_query($con,"SELECT id_genero FROM genero WHERE descricao= '$arrayDados[$b]'");
        $nomeGenero = mysqli_fetch_array($query_genero1);
        //Inserir os dados generos no banco
        $query_usuario_genero = mysqli_query($con, "INSERT INTO usuario_genero VALUES(DEFAULT, '{$value['id_usuario']}', '{$nomeGenero['id_genero']}')");
      }
      $b++;
    }
    mysqli_close($con);
    header("Location:../../index.php");
  }else{

  }
?>
