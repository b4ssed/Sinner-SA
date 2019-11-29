<?php
  $id=$_SESSION['usuario'][0]['id_usuario'];
  $con = mysqli_connect("localhost", "root", "", "database_sinner");
  $query = mysqli_query($con, "SELECT * from usuario WHERE id_usuario=$id");
  $array1 = mysqli_fetch_all($query, MYSQLI_ASSOC);
  $array=$array1;
?>
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Sinner</h3>
        </div>
        <ul class="list-unstyled components">
          <li class="">
              <a href="../../../../Sinner-SA/SA-Sinner/index.php">Home</a>
          </li>
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
