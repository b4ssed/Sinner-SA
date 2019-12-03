<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cadastro Gênero</title>
        <?php session_start(); ?>
        <?php include("../../template/styles.php"); ?>
        <link rel="stylesheet" href="../../css/styleCadastro.css">
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
            <div id="content" class="container">
            <div class="containerCadastro">
              <?php
                $id = $_GET['id'];
                echo '<form action="../../includes/editar/editarUsuario.php?id='.$id.'" method="post">';
              ?>
                  <div class="row">
                    <div class="col form-group">
                      <label for="usuario">Usuário</label>
                      <input type="text" class="form-control" name="usuario" max="45" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col form-group">
                      <label for="email">E-mail</label>
                      <input type="email" class="form-control" name="email" max="50" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col form-group">
                      <label for="senha">Senha</label>
                      <input type="password" class="form-control"  name="senha" max="8" required>
                    </div>
                  </div>
                    <div class="form-group">
                      <select name="tipoUsuario">
                        <?php
                          $con = mysqli_connect("localhost", "root", "", "database_sinner");

                          $query_tipo_usuario = mysqli_query($con,"SELECT * FROM tipo_usuario");
                          $arrayTipo = mysqli_fetch_all($query_tipo_usuario);
                          $arrayTipo;
                          foreach($arrayTipo as $key => $value){
                              echo '<option value="'.$value[0].'">'.$value[1].'</option>';
                          }

                          mysqli_close($con)
                         ?>
                      </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-dark">Enviar</button>
                    </div>
                    <div>
                        <button class="form-control btn btn-dark" type='button' onclick="window.location.href='index.php'">Cancelar</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
        <?php include("../../template/js.php"); ?>
    </body>
</html>
