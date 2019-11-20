<?php    
  
    $noticamilgrau=$_POST['conteudo'];
    $id=$_POST['id'];

    

        $con = mysqli_connect("localhost", "root", "", "database_sinner"); 
        $query = mysqli_query($con,"UPDATE noticia SET conteudo='$noticamilgrau' WHERE id_noticia=$id");
        mysqli_close($con);
        echo "<script> alert('banda cadastrada :)'); window.location.href = '../pages/VNoticia.php'; </script>" ;

    
        

  

?>