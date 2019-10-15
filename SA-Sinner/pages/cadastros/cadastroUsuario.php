<html>
    <head>
        <?php include("../template/styles.php"); ?>
        <link rel="stylesheet" href="../css/styleCadastro.css">
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
            <?php include("../template/navbar.php"); ?>
            <div class="containerPrincipal" id="content">
                <div class="containerCadastro">
                    <center>
                        <h3>Cadastre-se</h3>
                    </center>
                    <form action="../includes/cadastroUsuario.php" method="post">
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
                        <button type="submit" class=" form-control btn btn-dark">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
        <?php include("../template/js.php"); ?>  
    </body>
</html>