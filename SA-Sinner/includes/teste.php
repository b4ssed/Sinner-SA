<img src="">
<?php 
$con = mysqli_connect("localhost", "root", "root", "database_sinner"); 

$query = mysqli_query($con, "SELECT img FROM banda where id_banda=4");
$dados = mysqli_fetch_row ($query);
echo"<img src='";
printf ($dados[0]);
echo"'>"; 
mysqli_close($con);
?>