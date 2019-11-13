<link href="index.css" rel="stylesheet">
<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
<div class='container'>

<div id="editor">

      
    
<?php


$con = mysqli_connect("localhost", "root", "", "database_sinner");
$query = mysqli_query($con,"SELECT * FROM noticia");
$noticia = mysqli_fetch_all($query, MYSQLI_ASSOC);
 echo $noticia[1]['conteudo'];

?></div></div></div></div>