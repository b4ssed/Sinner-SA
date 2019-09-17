<?php 
    $nome = $_POST["user"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    insert($nome, $email, $senha);
    
        
    function insert($nome, $email, $password){
        $con = mysqli_connect("localhost", "root", "root", "database_sinner");    
        $query = mysqli_query($con,"insert into tb_usuario values(DEFAULT, '".$nome."','".$email."','".$password."','0','0','1'");
        mysqli_close($con);   
    }    
?>