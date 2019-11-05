<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php  include("../../template/styles.php"); ?>
    <title></title>
  </head>
  <body>
    <div class="">      
      <?php

        $con = mysqli_connect("localhost", "root", "", "database_sinner");

        $query = mysqli_query($con, "SELECT * FROM banda");
        $dados = mysqli_fetch_all($query, MYSQLI_ASSOC);
        //var_dump($dados);
        //echo"<img src='";
        //printf ($dados[0]);
        //echo"'>";
        $e = count($dados);
        echo "<pre>";
        print_r($dados);
        echo "</pre>";
        //conectado no band
        $a=0;
        echo "<div class='card-deck'>";
        foreach ($dados as $key => $value) {
            echo "<div class='card' style='width: 18rem;'>
            <img src='".$value['img']."' style='height: 350px;width: 313;'>
            <div class='card-body' >
            <h4>".$value['id_banda']."</h4>
            <h3>".$value['descricao']."</h3>";
            echo '<a href="../../includes/ExcluirBanda.php?idb='.($value['id_banda']).'"><button>Excluir</button></a>';
            echo '<a href="../../pages/AlterarBanda.php?idb='.($value['id_banda']).'"><button>Atualizar</button></a>';
           echo" </div>
            </div>";
        }
      ?>
    </div>
  </body>
</html>
