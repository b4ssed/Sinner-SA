<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Visualizar Noticia</title>
        <?php include("../../template/styles.php"); ?>
        <style>
            .containerCadastro{
            width:800px;
            padding: 15px;
            border-radius: 10px;
            background: #fff;
            }
            .containerPrincipal{
            background: #b2bec3;
            }

        </style>
    </head>
    <thead>
             <tr>
               <th scope="col">Notícia</th>
             </tr>
           </thead>
            <tr class="">
                    <th>Imagem</th>
                    <th>Titulo</th>
                    <th>Genero</th>
                    <th></th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
<?php
 
$con = mysqli_connect("localhost", "root", "", "database_sinner"); 
$query = mysqli_query($con,"SELECT * FROM noticia");
$dados = mysqli_fetch_all($query, MYSQLI_ASSOC);
$query2 = mysqli_query($con,"SELECT * FROM genero");
$dados2 = mysqli_fetch_all($query2, MYSQLI_ASSOC);
$a=0;
echo "<div class='card-deck'>"; 


        foreach ($dados as $key => $value) {
            echo"<tr>";
            echo "<td><img src=".$value['img']."></td>";
            echo "<td>".$value['descricao']."</td>";
            echo "<a href='jornal.php?id=".($value['id_noticia'])."'> <div class='card' style='width: 18rem;'>
            
            <div class='card-body' >
            
            <h3>".$value['descricao']."</h3>";
            echo '<a href="../includes/ExcluirBanda.php?idb='.($value['id_noticia']).'"><button>Excluir</button></a>';
            echo '<a href="../editar/noticias/editarnoticia.php?idb='.($value['id_noticia']).'"><button>adicionar noticia</button></a>';  
        echo" </div>
            </div>
            </a>";
        }
?>
</div>


</html>
