<?php

  $id = $_SESSION['usuario'][0]['id_usuario'];
  $con = mysqli_connect("localhost", "root", "", "database_sinner");
  $query = mysqli_query($con, "SELECT * from usuario WHERE id_usuario=$id");
  $array1 = mysqli_fetch_all($query, MYSQLI_ASSOC);
  $array=$array1;
?>
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <a href="../../../../Sinner-SA/SA-Sinner/index.php"><h3>Sinner</h3></a>
        </div>
        <ul class="list-unstyled components">
          <li class="">
              <a href="../../../../Sinner-SA/SA-Sinner/index.php">Home</a>
          </li>
          <li class="">
            <?php
              if ($_SESSION["usuario"][0]["tipo_usuario_id_tipo_usuario"]==1) {
                echo '<a href="../../../../Sinner-SA/SA-Sinner/pages/cadastros/index.php">Painel admin.</a>';
              }
             ?>
          </li>
          <li class="">
              <a href="../../../../Sinner-SA/SA-Sinner/pages/visualizar/indexNoticia.php">Notícias</a>
          </li>
          <li class="">
              <a href="../../../../Sinner-SA/SA-Sinner/pages/visualizar/indexBanda.php">Banda</a>
          </li>
          <li class="">
            <a href="../../../../Sinner-SA/SA-Sinner/pages/visualizar/indexAlbuns.php">Albuns</a>
          </li>
        </ul>
        <ul class="list-unstyled CTAs">
          <center>
            <li class="">
                <a href="../../../../Sinner-SA/SA-Sinner/pages/visualizar/perfil.php">
                <?php
                  if($array[0]['img']==""){
                    echo "<img src='../../../../Sinner-SA/SA-Sinner/css/images/perfil.png' style='width:45px ;length:60px;border-radius: 50%;'";
                  }else{
                    echo" <img src='".$array[0]['img']."'style='width:45px ;length:60px;border-radius: 50%;'>";
                  }
                ?>
              </a>
            </li>
            <li>
               <a href="../../../../Sinner-SA/SA-Sinner/actions/encerrarSessao.php"><button class='btn btn-danger'>Log-off</button></a>
            </li>
          </center>
        </ul>
      </nav>
