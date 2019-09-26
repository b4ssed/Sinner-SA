<html>
    <head>
    
    </head>
    <body>
    <?php
        if (isset($_GET["erro"])){
            $erro = $_GET["erro"];
            if ($erro==200){
                echo "<script>alert('Campo Usuário preenchido incorretamente')</script>";
            }
        }
        
    ?>
        <form action="../includes/cadastroUsuario.php" method="post">
            <div class="">
                <label for="usuario">Usuário</label>
                <input type="text" name="usuario" max="45" required>
            </div>
            <div class="">
                <label for="email">E-mail</label>
                <input type="email" name="email" max="50" required>
            </div>
            <div class="">
                <label for="senha">Senha</label>
                <input type="password" name="senha" max="8" required>
            </div>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>