<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="../../css/styleCadastro.css">
        <title>Visualizar Gênero</title>
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
    <body>
    <?php
      session_start();
     ?>
     <div class="wrapper">
     <?php include("../../template/sidebar.php"); ?>
       <div id="content" class="containerPrincipal">
        <div class="containerCadastro">
         <table class="table table-dark" style="background:#1e272e; color:white">
           <thead>
             <tr>
               <th scope="col">Música</th>
               <th scope="col"></th>
               <th scope="col"></th>
             </tr>
           </thead>
            <tr class="">
                    <td>Nome</td>
                    <td>Duração</td>
                    <td>Album</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                <?php

                $con = mysqli_connect("localhost", "root", "", "database_sinner");
                $busca = mysqli_query($con,"SELECT * FROM musica");


                $arr = mysqli_fetch_all($busca, MYSQLI_ASSOC);
                foreach($arr as $chave => $valor){
                    $busca2 = mysqli_query($con,"SELECT descricao FROM album WHERE id_album=$valor[album_id_album]");
                    $array = mysqli_fetch_all($busca2, MYSQLI_ASSOC);


                    echo "<tr>";
                    echo "<td>".$valor['descricao']."</td>";
                    echo "<td>".$valor['duracao']."</td>";
                    echo "<td>".$array[0]["descricao"]."</td>";
                    echo "<td>";
                    echo '<a href="../../includes/excluir/excluirMusica.php?id_musica='.$valor["id_musica"].'"><button class="btn btn-danger"">Excluir</button></a>';
                    echo '<a href="../../pages/editar/editarMusica.php?id_musica='.$valor['id_musica'].'"><button class="btn btn-dark">Editar</button></a>';
                    echo "</td>";
                }


                    mysqli_close($con);
                   ?>
                </tr>

            </tbody>
        </table>
        <?php include("../../template/js.php"); ?>
</body>
</html>
