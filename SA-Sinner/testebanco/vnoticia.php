<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<?php
 
$con = mysqli_connect("localhost", "root", "", "database_sinner"); 

$query = mysqli_query($con,"SELECT * FROM noticia");
$dados = mysqli_fetch_all($query, MYSQLI_ASSOC);
$query2 = mysqli_query($con,"SELECT * FROM genero");
$dados2 = mysqli_fetch_all($query2, MYSQLI_ASSOC);

//echo"<img src='";

//echo"'>"; 

//conectado no band
$a=0;
echo "<div class='card-deck'>"; 
foreach ($dados as $key => $value) {
    
    echo "<a href='noticia.php?id=".($value['id_noticia'])."'> <div class='card' style='width: 18rem;'>
    <img src='".$value['img']."' style='height: 350px;width: 313;'>
    <div class='card-body' >
    <h4>".$value['descricao']."</h4>
    <h3>".$dados[$value['genero_id_genero']]['descricao']."</h3>";
    echo '<a href="../includes/ExcluirBanda.php?idb='.($value['id_noticia']).'"><button>Excluir</button></a>';
    echo '<a href="testen.php?idb='.($value['id_noticia']).'"><button>adicionar noticia</button></a>';  
   echo" </div>
    </div>
    </a>";
}
?>
</div>


</html>
