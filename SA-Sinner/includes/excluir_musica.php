<?php
      if (isset($_GET["id_musica"])) {
        //Cria a conexão com o banco de dados
        $connect = mysqli_connect("localhost","root","","database_sinner");
        //Variavel que recebem o id do orçamento a ser excluído
        $idm = $_GET["id_musica"];
        //Exclui o registro do banco de dados
        $query = mysqli_query($connect, "DELETE FROM musica WHERE id_musica=$idm");
        //Fechamento da conexão com o banco de dados
        mysqli_close($connect);
        //Redirecionamento
        header("Location:../pages/visualizar_musica.php");
      }
  ?>
