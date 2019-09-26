<?php 
$con = mysqli_connect("localhost", "root", "root", "database_sinner"); 

$query = mysqli_query($con, "SELECT img FROM banda");
$dados = mysqli_fetch_row ($query);
printf ($dados[0]);
mysqli_close($con);
?>