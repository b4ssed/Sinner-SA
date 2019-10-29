<?php
      
        $connect = mysqli_connect("localhost","root","","database_sinner");
        $idm = $_GET["id_musica"];
        $query1 = mysqli_query($connect, "SELECT * FROM musica where id_musica = $idm");
        $dados = mysqli_fetch_all($query1, MYSQLI_ASSOC);
        print_r($dados);
        $ext11 = ($dados[0]['musica']);
        unlink($ext11);
        //Cria a conexão com o banco de dados
        
        //Variavel que recebem o id do orçamento a ser excluído
        
        //Exclui o registro do banco de dados
        $query = mysqli_query($connect, "DELETE FROM musica WHERE id_musica=$idm");
        //Fechamento da conexão com o banco de dados
        mysqli_close($connect);
        

        //exclui parquinho
          

        //Redirecionamento
       header("Location:../pages/visualizar_musica.php");
      
  ?>
