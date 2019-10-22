<html>
    <head>
        <?php include("../../template/styles.php"); ?>
        <link rel="stylesheet" href="../../css/styleCadastro.css">
        <style media="screen">
        .container{
          width: 100vw;
          height: 100vh;
          display: flex;
          flex-direction: row;
          justify-content: center;
          align-items: center;
        }
        .mx-auto{
          background: white;
          width: 30%;
          border-radius: 5px;
        }
        .form-group{
          margin: 5px;
        }
        body{
          background: grey;
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
    <div class="container">
            <div class="mx-auto" >
                  <center>
                      <h3>Cadastre-se</h3>
                  </center>
                  <form action="../../includes/cadastroUsuario.php" method="post">
                      <div class="form-group">
                          <label for="usuario">Usuário</label>
                          <input type="text" class="form-control" name="usuario" max="45" required>
                      </div>
                      <div class="form-group">
                          <label for="email">E-mail</label>
                          <input type="email" class="form-control" name="email" max="50" required>
                      </div>
                      <div class="form-group">
                          <label for="senha">Senha</label>
                          <input type="password" class="form-control"  name="senha" max="8" required>
                      </div>
                      <center>
                        <button type="submit" class="btn btn-dark">Cadastrar</button>
                      </center>
                  </form>
            </div>
        </div>
    </body>
</html>
