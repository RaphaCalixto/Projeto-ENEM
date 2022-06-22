<?php

	$conexao=mysqli_connect('localhost','root','123','tbusuarios') or die(mysqli_error());

	
	if(isset($_POST['email']) && isset($_POST['cpf'])){

	$email=$_POST['email'];
	$cpf=$_POST['cpf'];
    $cpf = md5($cpf);

	
	$get=mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email' AND cpf = '$cpf'");
	$n=mysqli_num_rows($get);
	
	if($n== 1){
            while($percorrer = mysqli_fetch_array($get)){
                $adm = $percorrer['adm'];
                $nome = $percorrer['nome'];
                
                session_start();
                
                
                
            if($adm == 1){
                $_SESSION['adm'] = $nome;
                $_SESSION['nome'] = $nome;
                
                
            }else{
                $_SESSION['nor'] = $nome;
                $_SESSION['nome'] = $nome;
            }
                
                echo"<script language='javascript' type='text/javascript'>window.location.href='dentro2.php'</script>";

                
            }
    }else{
        
                echo"<script language='javascript' type='text/javascript'>alert('Email ou CPF incorretos. Tente novamente.');window.location.href='../visitante/login.php'</script>";
    
    }

}

?>

