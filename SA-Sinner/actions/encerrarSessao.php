<?php
  session_start();
  session_destroy($_SESSION["usuario"]);
  header("Location:../../../../Sinner-SA/SA-Sinner/index.php");
?>
