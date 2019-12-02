<!DOCTYPE html>
<html>
  <head>
    <?php include("../template/styles.php"); ?>
    <style>
            .containerLogin{
              width: 50%;
              height: 30%;
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
              <center>
                <h2>SINNER</h2>
                <small class="form-text text-muted">Você precisa realizar o log-in para acessar o site</small>
              </center>
              <?php
                if (isset($_GET['newUser'])) {
                  echo '<form action="../actions/validarLogin.php?newUser=1" method="post">';
                }else {
                  echo '<form action="../actions/validarLogin.php" method="post">';
                }
              ?>
                  <form action="../actions/validarLogin.php" method="post">
                        <div class="form-group">
                          <center>
                            <input type="text" class="form-control" required id="login" name="login" placeholder="Login">
                          </center>
                        </div>
                        <div class="form-group">
                          <center>
                            <input type="password" class="form-control" required id="senha" name="senha" placeholder="Senha">
                          </center>
                        </div>
                        <div class="form-group">
                          <center>
                          <a href="cadastros/cadastroUsuario.php"><small class="form-text text-muted">Cadastre-se</small></a>
                          <button type="submit" class="btn btn-dark " >Entrar</button>
                          </center>
                        </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
  </body>
</html>
