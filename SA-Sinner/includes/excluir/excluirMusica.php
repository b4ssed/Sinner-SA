<?php

        $connect = mysqli_connect("localhost","root","","database_sinner");
        $idm = $_GET["id_musica"];
        $query1 = mysqli_query($connect, "SELECT * FROM musica where id_musica = $idm");
        $dados = mysqli_fetch_all($query1, MYSQLI_ASSOC);
        print_r($dados);
        $ext11 = ($dados[0]['musica']);
        unlink($ext11);
        $query = mysqli_query($connect, "DELETE FROM musica WHERE id_musica=$idm");
        mysqli_close($connect);
       header("Location:../../pages/visualizar/visualizarMusica.php");

  ?>
