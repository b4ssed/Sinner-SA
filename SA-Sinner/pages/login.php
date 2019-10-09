<!DOCTYPE html>
<html>
  <head>
    <?php include("../template/styles.php"); ?>
    <style>
            .containerLogin{
              height:185px;
              width:700px;
              padding: 15px;            
              margin-top: 150px;
              margin-left: 20%;
              border-radius: 10px;
              background: #fff;
            }
            .containerLogin input,button{              
              margin-top: 15px;
              margin-left: 10px;
            }
            .containerLogin a{              
              margin-left: 10px;
              text-decoration: underline;
            }
            .containerPrincipal{
              background: #b2bec3;
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
    <div class="wrapper">
      <?php include("../template/navbar.php"); ?>
      <div class="containerPrincipal" id="content">
        <div class="container containerLogin">
          <div class="row">
            <div class="col">
              <center>
                <h2>SINNER</h2>
                <small class="form-text text-muted">Você precisa realizar o log-in para acessar o site</small>
              </center>
            </div>
          </div>
          <form class="form-inline" action="../includes/validar_login.php" method="post">
            <div class="row">
              <div class="col-sm">              
                <div class="form-group">
                  <input type="text" class="form-control" required id="login" name="login" placeholder="Login">
                </div>
              </div>
              <div class="col-sm">
                <div class="form-group">
                  <input type="password" class="form-control" required id="senha" name="senha" placeholder="Senha"> 
                </div>
              </div>  
              <div class="col-sm">
                <button type="submit" class="btn btn-dark" >Entrar</button>
              </div>                             
            </div>
            <div class="row">
              <div class="col">
                <a href="cadastro.php"><small class="form-text text-muted">Cadastre-se</small></a>
              </div>                           
              <div class="col">
                <a href="#"><small class="form-text text-muted">Esqueci minha senha</small></a>                
              </div>
              
            </div>
          </form>          
        </div>
      </div>
    </div>
    <?php include("../template/js.php"); ?>        
  </body>
</html>















