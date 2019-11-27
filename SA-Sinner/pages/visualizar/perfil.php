<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Perfil</title>
        <?php include("../../template/styles.php");session_start();  ?>
        <?php include("../../template/navbar.php"); ?>
         
     </head>
    
     <script>
     
        function Mudarestado() {
            if(document.getElementById("pic1").style.display == "none")
            {
                document.getElementById("pic1").style.display = 'block';
            }else{
                document.getElementById("pic1").style.display = 'none';
            }

            if(document.getElementById("name1").style.display == "none")
            {
                document.getElementById("name1").style.display = 'block';
            }else{
                document.getElementById("name1").style.display = 'none';
            }

            if(document.getElementById("email1").style.display == "none")
            {
                document.getElementById("email1").style.display = 'block';
            }else{
                document.getElementById("email1").style.display = 'none';
            }

            if(document.getElementById("password1").style.display == "none")
            {
                document.getElementById("password1").style.display = 'block';
            }else{
                document.getElementById("password1").style.display = 'none';
            }

            if(document.getElementById("buttom1").style.display == "none")
            {
                document.getElementById("buttom1").style.display = 'block';
            }else{
                document.getElementById("buttom1").style.display = 'none';
            }
        }
     </script>     
               
                <div class="containerCadastro">
                <div class="wrapper">
           
     
                         <div id="content"  class="containerPrincipal">
                         <?php
                            
                            $id=$_SESSION['usuario'][0]['id_usuario'];
                            $con = mysqli_connect("localhost", "root", "", "database_sinner");
                            $query = mysqli_query($con, "SELECT * from usuario WHERE id_usuario=$id");
                            $array1 = mysqli_fetch_all($query, MYSQLI_ASSOC);
                            $array=$array1;
                        
                        
                        ?>
                            <div class="form-group">
                            <?php 
                            if($array[0]['img']=="")
                            {
                            echo" <img src='../../css/images/perfil.png'  style='width:180px ; length:150 px;' >";
                            }else
                            {
                            echo" <img src='".$array[0]['img']."' alt=''>"; 
                            } 
                        ?>   
                         <button style="margin-left: 80%;" onclick="Mudarestado('minhaDiv')" > Editar Perfil </button>
                         <form action="../../includes/editar/editarPerfil.php" enctype="multipart/form-data" method="post">  
                            <input type="file" style="display:none;" id="pic1" name="pic1" >
                           
                        </div>                    
       
                        <div class="form-group">
                       <label>nome: </label>
                       <h3 ><?php echo $array[0]['nome']; ?></h3 >
                            <input type="text" id="name1" style="display:none;" class="form-control" name="name1" >
                        </div>
                        <div class="form-group">
                            <label >email:</label>
                            <h3 for="name"> <?php  echo $array[0]['email']; ?> </h3>
                            <input type="text" id="email1" style="display:none;" class="form-control" name="email1"  >
                        </div>
                        <div class="form-group">
                            <label for="imgband">senha:</label>
                            <h3>******</h3>
                            <input type="password" style="display:none;" id="password1" name="password1" >
                        </div>
                            <div class="form-group">
                            <button type="submit" id="buttom1" style="display:none;" class="form-control btn btn-dark">Salvar</button>
                         </div>
                   
                    </form>
                </div>
            </div>
        </div>
        <?php include("../../template/js.php"); ?>
    </body>
</html>

    </head>