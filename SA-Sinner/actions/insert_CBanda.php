<?php    
    $nome = $_POST["NameBand"];

    insert($nome);
    

    function insert($nome){
        $con = mysqli_connect("localhost", "root", "root", "database_sinner"); 
        $query = mysqli_query($con,"INSERT INTO banda VALUES(DEFAULT, '$nome', NULL)");
        mysqli_close($con);
       header("location:CBanda")  
}   
?>