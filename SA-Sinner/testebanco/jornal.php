<link href="index.css" rel="stylesheet">
<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">

      
    
<?php
$idd=$_GET['id'];

$con = mysqli_connect("localhost", "root", "", "database_sinner");
$query = mysqli_query($con,"SELECT * FROM noticia WHERE id_noticia=$idd");
$noticia = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<center><h1 ><?php  echo $noticia[0]['descricao']?></h1></center>;

<div class='container'>
<div id="editor">
<?php
 echo $noticia[0]['conteudo'];
?>


</div></div>