<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style media="screen">
      .container{
        width: 100vw;
        height: 100vh;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
      }
      a{
        margin-top: 4px;
      }
      .mx-auto{
        width: 50%;
        height: 38%;
        border-radius: 10px;
        background: #fff;
      }
      body{
        background: grey;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="mx-auto">
        <div class="row">
          <div class="col">
            <center>
              <br>
                <h3>Você precisa de uma conta para acessar</h3>
            </center>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <center>
              <small class="form-text text-muted">Ainda não possui cadastro?</small>
              <a href="pages/cadastros/cadastroUsuario.php" class="btn btn-dark">Cadastre-se</a>
            </center>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <center>
              <small class="form-text text-muted">Já é cadastrado?</small>
              <a href="pages/login.php" class="btn btn-dark">Entrar</a>
            </center>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
