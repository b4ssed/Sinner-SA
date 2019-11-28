    <?php
     session_start();
     $id=$_SESSION['usuario'][0]['id_usuario'];
     $con = mysqli_connect("localhost", "root", "", "database_sinner");
     $query = mysqli_query($con, "SELECT * from usuario WHERE id_usuario=$id");
     $array1 = mysqli_fetch_all($query, MYSQLI_ASSOC);
     $array=$array1;
    ?>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button type="button" id="sidebarCollapse" class="btn btn-info">
            <i class="fas fa-align-left"></i>
            <span>Sidebar</span>
        </button>
        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-align-justify"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link" href="#">Sei lá</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="">Sei lá</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Sei lá</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Sei lá</a>
              </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
          </form>
        </div>
    </div>
        <ul class="list-unstyled components">
        
            <li class="">
                <a href="../../../../Sinner-SA/SA-Sinner/pages/cadastros/index.php">Menu Principal</a>
            </li>
            
        </ul>
        
         
        <ul class="list-unstyled CTAs">
        <li class="">
              <center>
                  <a href="../../../../Sinner-SA/SA-Sinner/pages/visualizar/perfil.php" class="" ><?php         if($array[0]['img']==""){ echo "<img src='../../../../Sinner-SA/SA-Sinner/css/images/perfil.png' style='width:45px ;length:60px;border-radius: 50%;'";}else{echo" <img src='".$array[0]['img']."'  style='width:45px ;length:60px;border-radius: 50%;'>";} ?></a>
             </center>
             </li>
                <li>
                <center>
                     <a href="../../../../Sinner-SA/SA-Sinner/actions/encerrarSessao.php"><button class='btn       btn-danger'>Log-off</button></a>
                </center>
                </li>
            </ul>
                 
    </nav>

