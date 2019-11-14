<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Visualizar Gênero</title>
        <?php include("../../template/styles.php"); ?>
        <style>
            .containerCadastro{
            width:800px;
            padding: 15px;
            border-radius: 10px;
            background: #fff;
            }
            .containerPrincipal{
            background: #b2bec3;
            }

        </style>
    </head>
    <body>
    <?php
      session_start();
     ?>
     <div class="wrapper">
     <?php include("../../template/navbar.php"); ?>
       <div id="content" class="containerPrincipal">
        <div class="containerCadastro">
         <table class="table" style="background:#1e272e; color:white">
           <thead>
             <tr>
               <th scope="col">Gênero</th>
             </tr>
           </thead>
           <tbody>
             <?php
             $con = mysqli_connect("localhost", "root", "", "database_sinner");
             $query_genero = mysqli_query($con, "SELECT * from genero");
             $arrayGenero = mysqli_fetch_all($query_genero, MYSQLI_ASSOC);
             $array = $arrayGenero;
              if (isset($array)) {
                foreach ($array as $key => $value) {
                  echo "<tr>";
                  echo "<td>".$value['descricao']."</td>";

                  echo '<form class="" action="../../includes/excluir/excluirGenero.php? method="post">';
                  echo '<td><button type="submit" class="btn btn-danger" name="excluirGenero" value='.$value["id_genero"].'>Excluir Item';
                  echo '</form>';
                  echo '<a href="../../pages/editar/rditarGenero.php?id='.$value["id_genero"].'">	<button class="btn btn-dark">Editar</button></a></td>';
                  echo "</tr>";
                }
              }
             ?>
           </tbody>
         </table>
        </div>
      </div>
    <br>


    </div>
      <?php include("../../template/js.php"); ?>
    </body>
</html>
