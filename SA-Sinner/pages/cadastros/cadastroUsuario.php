<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/stylePrincipal.css">
  <style media="screen">
    .mx-auto{
      height: auto;
    }
  </style>
</head>
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
    <div class="container">
      <div class="mx-auto">
        <div class="row">
          <div class="col">
              <center>
                  <h3>Cadastre-se</h3>
              </center>
            </div>
          </div>
            <form action="../../includes/cadastros/cadastrarUsuario.php" method="post">
              <input type="hidden" name="tipoUsuario" value="2">
              <div class="row">
                <div class="col form-group">
                  
                  <input type="text" style="width: 80%;margin-left: 10%;" placeholder="Usuário" class="form-control" name="usuario" max="45" required>
                </div>
              </div>
              <div class="row">
                <div class="col form-group">
                  
                  <input type="email" style="width: 80%;margin-left: 10%;"  placeholder="E-mail" class="form-control" name="email" max="50" required>
                </div>
              </div>
              <div class="row">
                <div class="col form-group">
                  
                  <input type="password" style="width: 80%;margin-left: 10%;" class="form-control" placeholder="Senha"  name="senha" max="8" required>
                </div>
              </div>
              <div class="row">
                <div class="col">
                <center>
                  <div class="form-group">
                    <button type="submit" class="btn btn-light">Cadastrar</button>
                  </div>
              </center>
            </div>
          </div>
          </form>
        </div>
      </div>
    </body>
</html>
