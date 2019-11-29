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
            background: #ffff;
            }
            img {
            width:100px;
            }

        </style>
    </head>
    <body>
    <?php
     

     ?>
     <div class="wrapper">
     <?php include("../../template/navbar.php"); ?>
       <div id="content" class="container">
        <div class="containerCadastro">
         <table class="table table-dark">
           <thead>
             <tr>
               <th scope="col">Album</th>
               <th scope="col"></th>
               <th scope="col"></th>
               <th scope="col"></th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <th>Imagem</th>
               <td>Título</td>
               <td>Time</td>
               <td>Opções</td>
             </tr>
             <?php
             $con = mysqli_connect("localhost", "root", "", "database_sinner");
             $query_album = mysqli_query($con, "SELECT * from album");
             $arrayAlbum = mysqli_fetch_all($query_album, MYSQLI_ASSOC);
             $array = $arrayAlbum;
              if (isset($array)) {

                foreach ($array as $key => $value) {
                  echo "<tr>";
                  echo "<td><img src=".$value['img']."></td>";
                  echo "<td>".$value['descricao']."</td>";
                  echo "<td>".$value['duracao']."</td>";
                  echo '<form class="" action="../../includes/excluir/excluirAlbum.php? method="post">';
                  echo '<td><button type="submit" class="btn btn-danger" name="excluirAlbum" value='.$value["id_album"].'>Excluir Item';
                  echo '</form>';
                  echo '<a href="../../pages/editar/editarAlbum.php?id='.$value["id_album"].'">	<button class="btn btn-dark">Editar</button></a></td>';
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
