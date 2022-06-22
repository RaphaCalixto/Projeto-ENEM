<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">


<?php

$conexao=mysqli_connect('localhost','root','123','tbusuarios') or die (mysqli_error()); 

if(isset($_POST['nsenha']) && isset($_POST['cpf'])){
	$cpf = $_POST['cpf'];
	$nsenha = $_POST['nsenha'];
	$nsenha = md5($nsenha);
	$senha = $_POST['nsenha'];
	$cpf = md5($cpf);
	$stringg =  strlen($senha);

$sql = mysqli_query($conexao, "SELECT * FROM usuarios WHERE cpf = '$cpf'");


	 if($stringg < 6){
	echo"<script language='javascript' type='text/javascript'>alert('O mínimo de caracteres para senha é 6.');window.location.href='../menu/trocasenhaadm.php'</script>";
	exit();
}

	if (mysqli_num_rows($sql)> 0) {

   $up = mysqli_query($conexao, "UPDATE usuarios SET senha = '$nsenha' WHERE cpf='$cpf'");

          echo"<script language='javascript' type='text/javascript'>alert('Senha alterada com sucesso!');window.location.href='../index2adm.php'</script>";
        }else{
        	echo"<script language='javascript' type='text/javascript'>alert('O CPF digitado está incorreto.');window.location.href='../menu/trocasenhaadm.php'</script>";
        }


}



?>