<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/stylePrincipal.css">
  <style media="screen">
    .mx-auto{
      height: auto;
    }
    .col{
      style= padding: 0px 20px;
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
    <div class="container">
      <div class="mx-auto">
        <div class="row" >
          <div class="col">
              <center>
                <h3>SINNER</h3>
                <small class="form-text">Você precisa realizar o log-in para acessar o site</small>
              </center>
              <?php
                if (isset($_GET['newUser'])) {
                  echo '<form action="../actions/validarLogin.php?newUser=1" method="post">';
                }else {
                  echo '<form action="../actions/validarLogin.php" method="post">';
                }
              ?>
              <br>
            </div>
            </div>
                  <form action="../actions/validarLogin.php" method="post">
                    <div class="row">
                      <div class="col">
                          <input type="text" class="form-control" required id="login" name="login" placeholder="Login">
                        </div>
                      </div>
                        <br>
                        <div class="row">
                          <div class="col">
                          <center>
                            <input type="password" class="form-control" required id="senha" name="senha" placeholder="Senha">
                          </center>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                          <center>
                          <a href="cadastros/cadastroUsuario.php"><small class="form-text">Cadastre-se</small></a>
                          <button type="submit" class="btn btn-light " >Entrar</button>
                          </center>
                          </div>
                        </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
  </body>
</html>
