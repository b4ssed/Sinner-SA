<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Perfil</title>
        <?php include("../../template/styles.php");session_start();  ?>

         <div class="containerCadastro">
         
        <div class="wrapper">
     <?php include("../../template/navbar.php"); ?>
       <div id="content" class="containerPrincipal">
                        <div class="form-group">
                        <?php 
                        if(($_SESSION['usuario'][0]['img'])=="")
                        {
                           echo" <img src='../../css/images/perfil.png'  style='width:180px ; length:150 px;' >";
                        }else
                        {
                           echo $_SESSION['usuario'][0]['img']; 
                        } 


                        ?>    
                        </div>                    
       
                        <div class="form-group">
                       <label>nome: </label>
                       <h3 ><?php echo $_SESSION['usuario'][0]['nome']; ?></h3 >
                            <input type="text" class="form-control" name="name" required >
                        </div>
                        <div class="form-group">
                            <label >email:</label>
                            <h3 for="name"> <?php echo $_SESSION['usuario'][0]['email']; ?> </h3>
                            <input type="text" class="form-control" name="name" required >
                        </div>
                        <div class="form-group">
                            <label for="imgband">senha:</label>
                            <h3>******</h3>
                            <input type="password" name="" id="">
                        </div>
                        <div class="form-group">
                        <button type="submit" class="form-control btn btn-dark">Enviar</button>
                    </div>
                    <div>
                        <button class="form-control btn btn-dark" type='button' onclick="window.location.href='index.php'">Cancelar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include("../../template/js.php"); ?>
    </body>
</html>

    </head>