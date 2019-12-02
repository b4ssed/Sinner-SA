<!DOCTYPE html>
<html>
  <head>
    <style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    table, td, th {
        border: 1px solid black;
        padding: 5px;
    }

    th {text-align: left;}
    </style>
  </head>
  <body>
    <?php
    $q = intval($_GET['q']);

    $con = mysqli_connect('localhost','root','','database_sinner');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }

    $select_noticia = mysqli_query($con,"SELECT * FROM noticia WHERE id_noticia=$q");
    $arrayNoticia = mysqli_fetch_array($select_noticia);

    echo "<table>
    <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Age</th>
    <th>Hometown</th>
    <th>Job</th>
    </tr>";
    foreach ($arrayNoticia as $key => $value) {
      echo "<tr>";
      echo "<td>" . $value['id_noticia'] . "</td>";
      echo "<td>" . $row['descricao'] . "</td>";
      echo "<td>" . $row['conteudo'] . "</td>";
      echo "<td>" . $row['img'] . "</td>";
      echo "<td>" . $row['Job'] . "</td>";
      echo "</tr>";
    }
    echo "</table>";
    mysqli_close($con);
    ?>
  </body>
</html>
