<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include("../template/styles.php"); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title></title>
    <style media="screen">
    .container{
      width: 100vw;
      height: 100vh;
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
    }
    .mx-auto{
      background: white;
      width: 30%;
      border-radius: 5px;
    }
    </style>
    <!-- //https://getbootstrap.com.br/docs/4.1/components/list-group/ -->
    <!-- <?php
      $con = mysqli_connect("localhost", "root", "", "database_sinner");
      $query_genero = mysqli_query($con,"SELECT COUNT(id_genero) AS result FROM genero;");
      $array_num = mysqli_fetch_assoc($query_genero);
      $arraynum = json_encode($array_num);

      print_r($arraynum);
      echo "<script>";
      echo "$(document).ready(function(){";
      echo "$('input[type='checkbox']').click(function(){";
      echo 'if($(this).prop("checked") == true){';
      echo '$("#1").addClass("active");';
      echo '}';
      echo 'else if($(this).prop("checked") == false){';
      echo '$("#1").removeClass("active");';
      echo '}';
      echo '});';
      echo '});';
      echo '</script>';
    ?> -->
    <script>
      $(document).ready(function(){
        $('input[type="checkbox"]').click(function(){
            if($(this).prop("checked") == true){
                $("#1").addClass("active");
            }
            else if($(this).prop("checked") == false){
                $("#1").removeClass("active");
            }
        });
      });
    </script>
  </head>
  <body>
    <div class="container">
      <div class="mx-auto">
        <div class="list-group" id="list-tab" role="tablist">1
        <?php
          $con = mysqli_connect("localhost", "root", "", "database_sinner");
          $query_genero = mysqli_query($con,"SELECT * FROM genero");
          $array_g = mysqli_fetch_all($query_genero, MYSQLI_ASSOC);
          $arrayGenero = $array_g;
          foreach ($arrayGenero as $key => $value) {
            echo '<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#lista-home" role="tab" aria-controls="home">Home</a>';
            echo '<a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Perfil</a>';
            echo '<a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#lista-mensagens" role="tab" aria-controls="messages">Mensagens</a>';
            echo '<a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#lista-configuracoes" role="tab" aria-controls="settings">Configurações</a>';
          }
        ?>
        </div>
      </div>
    </div>
    <?php include("../template/js.php"); ?>
  </body>
</html>
