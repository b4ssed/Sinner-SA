<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
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
$a=0;
echo "<div class='card-deck'>"; 
foreach ($dados as $key => $value) {
    echo "<div class='card' style='width: 18rem;'>
    <img src='".$value['img']."' style='height: 350px;width: 313;'>
    <div class='card-body' >
    <h4>".$value['id_banda']."</h4>
    <h3>".$value['descricao']."</h3>";
    echo '<a href="../includes/ExcluirBanda.php?idb='.($value['id_banda']).'"><button>Excluir</button></a>';
    echo '<a href="../pages/AlterarBanda.php?idb='.($value['id_banda']).'"><button>Atualizar</button></a>';  
   echo" </div>
    </div>";
}
?>
</div>


</html>
