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
            img {
            width:100px;
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
               <th scope="col">Banda</th>
             </tr>
           </thead>
           <tbody>
      <?php


      $con = mysqli_connect("localhost", "root", "", "database_sinner");
      $query_banda = mysqli_query($con, "SELECT * from banda");
      $arrayBanda = mysqli_fetch_all($query_banda, MYSQLI_ASSOC);
      $array = $arrayBanda;
       if (isset($array)) {

         foreach ($array as $key => $value) {
           echo "<tr>";
           echo "<td><img src=".$value['img']."></td>";
           echo "<td>".$value['descricao']."</td>";
           echo '<form class="" action="../../includes/excluir/excluirBanda.php? method="post">';
           echo '<td><button type="submit" class="btn btn-danger" name="excluirBanda" value='.$value["id_banda"].'>Excluir Item';
           echo '</form>';
           echo '<a href="../../pages/editar/editarBanda.php?id='.$value["id_banda"].'">	<button class="btn btn-dark">Editar</button></a></td>';
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
<?php include("../template/js.php"); ?>
</body>
</html>
