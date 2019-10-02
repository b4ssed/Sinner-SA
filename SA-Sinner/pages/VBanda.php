<html>

<?php
$con = mysqli_connect("localhost", "root", "root", "database_sinner"); 

$query = mysqli_query($con, "SELECT * FROM banda");
$dados = mysqli_fetch_all($query, MYSQLI_ASSOC);
//var_dump($dados);
//echo"<img src='";
//printf ($dados[0]);
//echo"'>"; 
$e = count($dados);
echo "<pre>";
print_r($dados);
echo "</pre>";
//conectado no band

while ($a <= $e) {
    $a++;
    print$a;
}
?>
</html>
