<html><head><title>Cadastro</title></head>
<body>
<?php 
 
$nome = $_POST["nome"];

$email = $_POST["email"];

$senha = $_POST["senha"];


$mysqli = new mysqli('localhost', 'root', '123','tbusuarios');
if ( $mysqli->connect_errno ) echo $mysqli->connect_errno, ' ', $mysqli->connect_error;

$sql = "INSERT INTO usuarios (nome,email,senha) VALUES ('$nome', '$email', '$senha')";
$result = $mysqli->query( $sql );

  if($result){
  echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.php'</script>";
  }else{
  echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.php'</script>";
  }

?>
</body>
</html>