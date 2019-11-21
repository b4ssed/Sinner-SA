<!DOCTYPE html>
<html>
  <head>
    <?php include("../template/styles.php"); ?>
    <style>
            .containerLogin{
              width: 50%;
              height: 38%;
              border-radius: 10px;
              background: #fff;
            }
            body{
              background: grey;
            }
            .containerLogin a{
              text-decoration: underline;
            }
            .containerLogin input{
              width: 50%;
            }
            .containerPrincipal{
              width: 100vw;
              height: 100vh;
              display: flex;
              flex-direction: row;
              justify-content: center;
              align-items: center;
            }
        </style>
  </head>
  <body>
    <?php // Tratativa de erro #100
    if(isset($_GET["erro"])){
      $erro = $_GET["erro"];
      if($erro==100){
        echo"<script>alert('Usuário não cadastrado')</script>";
      }
    }
    ?>
      <div class="containerPrincipal">
        <div class="containerLogin">
          <div class="row">
            <div class="col">
              <center>
                <h2>SINNER</h2>
                <small class="form-text text-muted">Você precisa realizar o log-in para acessar o site</small>
              </center>
            </div>
          </div>
          <?php
            if (isset($_GET['newUser'])) {
              echo '<form action="../actions/validarLogin.php?newUser=1" method="post">';
            }else {
              echo '<form action="../actions/validarLogin.php" method="post">';
            }
          ?>
          <form action="../actions/validarLogin.php" method="post">
            <div class="row">
              <div class="col-sm">
                <div class="form-group">
                  <center>
                    <input type="text" class="form-control" required id="login" name="login" placeholder="Login">
                  </center>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm">
                <div class="form-group">
                  <center>
                    <input type="password" class="form-control" required id="senha" name="senha" placeholder="Senha">
                  </center>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm">
                <center>
                <a href="cadastros/cadastroUsuario.php"><small class="form-text text-muted">Cadastre-se</small></a>
              </center>
              </div>
              <div class="col-sm">
                <br>
                <center>
                <button type="submit" class="btn btn-light" >Entrar</button>
              </center>
              </div>
          </form>
        </div>
      </div>
  </body>
</html>
