<html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Visualizar Gênero</title>
      <?php session_start(); ?>
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
        if (isset($_GET["erro"])){
            $erro = $_GET["erro"];
            if ($erro==200){
                echo "<script>alert('Campo Usuário preenchido incorretamente')</script>";
            }elseif ($erro==201){
                echo "<script>alert('Este E-mail já está registrado')</script>";
            }elseif ($erro==202){
                echo "<script>alert('Este Usuário já existe')</script>";
            }elseif ($erro==203){
                echo "<script>alert('Não foi possível realizar o cadastro')</script>";
            }
        }
    ?>
   <div class="wrapper">
   <?php include("../../template/sidebar.php"); ?>
     <div id="content" class="containerPrincipal">
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
             <th>ID</th>
             <td>Username</td>
             <td>E-mail</td>
             <td>Tipo</td>
             <td></td>
             <td></td>
           </tr>
           <?php
           $con = mysqli_connect("localhost", "root", "", "database_sinner");
           $query_usuario = mysqli_query($con, "SELECT * from usuario");
           $arrayUsuario = mysqli_fetch_all($query_usuario, MYSQLI_ASSOC);
            if (isset($arrayUsuario)) {

              foreach ($arrayUsuario as $key => $value) {
                echo "<tr>";
                echo "<td>".$value['id_usuario']."</td>";
                echo "<td>".$value['nome']."</td>";
                echo "<td>".$value['email']."</td>";
                echo "<td>".$value['tipo_usuario_id_tipo_usuario']."</td>";
                echo '<td><a href="../../pages/editar/editarUsuario.php?id='.$value["id_usuario"].'">	<button class="btn btn-dark">Editar</button></a></td>';
                echo '<td><a href="../../includes/excluir/excluirUsuario.php?id='.$value["id_usuario"].'">	<button class="btn btn-danger">Excluir</button></a></td>';
                echo "</tr>";
              }
            }
           ?>
         </tbody>
       </table>
       <button class="form-control btn btn-dark" type='button' onclick="window.location.href='../cadastros/index.php'">Voltar</button>
      </div>
    </div>
  <br>
  </div>
    <?php include("../../template/js.php"); ?>
  </body>
</html>
