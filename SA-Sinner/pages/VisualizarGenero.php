<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Visualizar Gênero</title>
        <?php include("../template/styles.php"); ?>   
    </head>
    <body>
    <?php
      session_start();
      include("../../includes/navbar.php");

     ?>
     <div class="container">
       <div>
         <table class="table" style="background:#1e272e; color:white">
           <thead>
             <tr>
               <th scope="col">Gênero</th>
             </tr>
           </thead>
           <tbody>
             <?php
             $con = mysqli_connect("localhost", "root", "root", "database_sinner");
             $query_genero = mysqli_query($con, "SELECT * from genero");
             $arrayGenero = mysqli_fetch_all($query_genero, MYSQLI_ASSOC);
              if (isset($arrayGenero) {
                
                foreach ($arrayGenero as $key => $value) {
                  echo "<tr>";
                  echo "<td>".$value['descricao']."</td>";
                  echo '<form class="" action="../../includes/excluirProduto.php? method="post">';
                  echo '<td><button type="submit" class="btn btn-danger" name="excluirCarrinho" value='.$key.'>Excluir Item</td>';
                  echo '</form>';
                  echo "</tr>";
                }
              }
             ?>
           </tbody>
         </table>
       </div>
      <br>
      <form class="" action="../../includes/limparCarrinho.php" method="post">
        <a href="../home/index.php">
          <button type="button" class="btn btn-outline-dark" name="voltarHome">Continuar Comprando</button>
        </a>
        <button type="submit" class="btn btn-outline-danger" name="limparCarrinho" value="limparCarrinho">Limpar Carrinho
      </form>

    </div>
    </body>
</html>