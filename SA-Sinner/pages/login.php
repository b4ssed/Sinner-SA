<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>
<?php // Tratativa de erro #100
if(isset($_GET["erro"])){
  $erro = $_GET["erro"];
  if($erro==100){
    echo"<script>alert('Usuário não cadastrado')</script>";
  }
}
?>

<form action="../includes/validar_login.php" method="post">
  <div>
	  <input type="text" required id="login" name="login" placeholder="Login">
  </div>
  
  <div>
  	<input type="password"  required id="senha" name="senha" placeholder="Senha"> 
  </div>
  
  <button type="submit" >Entrar</button>
</form>

</body>
</html>















