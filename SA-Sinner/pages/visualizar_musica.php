<!DOCTYPE html>
<?php
$con = mysqli_connect("localhost", "root", "root", "database_sinner"); 
$busca = mysqli_query($con,"SELECT * FROM musica");
$arr = mysqli_fetch_all($busca, MYSQLI_ASSOC);

?>
<html>
<head>
    <title>Visualizar Musicas</title>
</head>
<body>
<table class="table">
            <thead>
            <tr class="">
                    <th>#</th>
                    <th>Nome</th>
                    <th>Duração</th>
                    <th>Genero</th>
                    <th>Album</th>
                    <th>Ações</th>
             
                </tr>
            </thead>
            <tbody>
                <tr>
                <?php 
                foreach($arr as $chave => $valor){
                    echo "<tr>";
                    echo "<td>".$valor['id_musica']."</td>";
                    echo "<td>".$valor['dsmusica']."</td>";
                    echo "<td>".$valor['duracao']."</td>";
                    echo "<td>";
                    echo "<td>";
                    echo "<td>";
					echo '<a href="?pagina=editar&usuarioID='.$valor['id_musica'].'"><button class="btn btn-primary">Editar</button></a>';
                    echo '<a href="excluir.php?id='.$valor["id_musica"].'"><button class="btn btn-primary">Excluir</button></a>';
                    echo "</td>";
                }
               

                mysqli_close($con);
                   ?> 	
                </tr>
             
            </tbody>
        </table>

</body>
</html>