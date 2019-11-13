<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include("../template/styles.php"); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title></title>
    <style media="screen">
    label{
      margin-left: 5px;
    }
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
    <?php
      $con = mysqli_connect("localhost", "root", "", "database_sinner");
      $query_genero = mysqli_query($con,"SELECT COUNT(id_genero) AS result FROM genero;");
      $array_num = mysqli_fetch_assoc($query_genero);
      $arraynum = json_encode($array_num);

    ?>
    <script>
      $(document).ready(function(){
        $('input[type="checkbox"]').click(function(){
            if($(this).prop("checked") == true){
              $("#a").addClass("active");
              $("#btnSubmit").removeClass("disabled");
            }
            else if($(this).prop("checked") == false){
                $("#a").removeClass("active");
                $("#btnSubmit").addClass("disabled");
            }
        });
        // $("#checkboxActive").checked(function(){
        //
        // });
      });



    </script>
  </head>
  <body>
    <div class="container">
      <div class="mx-auto">
        <form class="" action="../includes/cadastros/cadastroRecomendacoes.php" method="post">
          <div class="list-group" id="list-tab" role="tablist">
            <ul class="list-group">
              <li class="list-group-item"><center>Selecione um genero</center></li>
            <?php
              $con = mysqli_connect("localhost", "root", "", "database_sinner");
              $query_genero = mysqli_query($con,"SELECT * FROM genero");
              $array_g = mysqli_fetch_all($query_genero, MYSQLI_ASSOC);
              $arrayGenero = $array_g;
              foreach ($arrayGenero as $key => $value) {

                echo '<li class="list-group-item" id="">';
                echo '<input type="checkbox" name="'.$value['id_genero'].'" value="'.$value["descricao"].'">'.$value["descricao"].'</label>';
                echo '</li>';
              }
            ?>
            </ul>
          </div>
          <li class="list-group-item"><center><button type="submit" class="btn btn-dark disabled" id="btnSubmit">Enviar</button></center></li>
        </form>
      </div>
    </div>
    <?php include("../template/js.php"); ?>
  </body>
</html>
