<html><head><title>Cadastro</title>
<meta http-equiv="Content-Type" charset="utf-8">
</head>
<body>
<?php 
 
$nome = $_POST["nome"];

$email = $_POST["email"];

$cpf = $_POST["cpf"];

$senha = $_POST["senha"];

$string =  strlen($senha);

$senha = md5($senha);

$cpf = md5($cpf);


$adm = 0;

$mysqli = new mysqli('localhost', 'root', '123','tbusuarios');
if ( $mysqli->connect_errno ) echo $mysqli->connect_errno, ' ', $mysqli->connect_error;

$dupesql = "SELECT email FROM usuarios where email = '$email'";
$dupesqll = "SELECT cpf FROM usuarios where cpf = '$cpf'";
$result = $mysqli->query( $dupesql );
$resultt = $mysqli->query( $dupesqll );

if($string < 6){
	echo"<script language='javascript' type='text/javascript'>alert('O mínimo de caracteres para senha é 6.');window.location.href='../visitante/cadastro.php'</script>";
	exit();
}


if (mysqli_num_rows($result) > 0) {

echo "<script language='javascript' type='text/javascript'>alert('Email já existente!');window.location.href='../visitante/cadastro.php'</script>";
exit();

}

if (mysqli_num_rows($resultt) > 0) {

echo "<script language='javascript' type='text/javascript'>alert('CPF já existente!');window.location.href='../visitante/cadastro.php'</script>";
exit();
}

else {

$sql = "INSERT INTO usuarios (nome,email,senha,adm,cpf) VALUES ('$nome', '$email', '$senha','$adm','$cpf')";
$result = $mysqli->query( $sql );

  if($result){
  echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='../visitante/login.php'</script>";
  }else{
  echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário. ');window.location.href='../visitante/cadastro.php'</script>";
  }
}

?>
</body>
</html>
