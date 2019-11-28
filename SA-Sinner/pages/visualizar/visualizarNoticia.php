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
            img {
            width:100px;
            }

        </style>
        <div class="wrapper">
     <?php include("../../template/navbar.php"); ?>
       <div id="content" class="containerPrincipal">
        <div class="containerCadastro">
         <table class="table" style="background:#1e272e; color:white">
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
            echo"<td>".$dados2[0]['descricao']."</td>";
            echo ' <td><a href="../../includes/excluir/excluirnoticia.php?idb='.($value['id_noticia']).'"><button class="btn btn-danger">Excluir</button></a>';
            echo '<a href="../editar/noticias/editarnoticia.php?idb='.($value['id_noticia']).'"><button class="btn btn-dark" >adicionar noticia</button></a>';
            echo '<a href="jornal.php?id='.($value['id_noticia']).'"><button class="btn btn-dark" >ver noticia</button></a></td>';  
        
        }
?>
</div>


</html>
