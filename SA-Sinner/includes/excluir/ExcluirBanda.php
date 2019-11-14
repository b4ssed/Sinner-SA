<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<?php

$con = mysqli_connect("localhost", "root", "", "database_sinner");
$id= $_GET['idb'];
$query = mysqli_query($con, "SELECT * FROM banda where id_banda = $id");
$dados = mysqli_fetch_all($query, MYSQLI_ASSOC);
$query = mysqli_query($con, "DELETE  FROM banda where id_banda = $id ");
print_r($dados);
$ext = ($dados[0]['img']);
unlink($ext);


echo "<script> alert('banda EXCLUIDA :)'); window.location.href = '../../pages/visualizar/visualizarBanda.php'; </script>" ;
?>
</div>


</html>
