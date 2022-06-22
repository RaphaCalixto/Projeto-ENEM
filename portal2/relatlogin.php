<?php

	$conexao=mysqli_connect('localhost','root','123','tbusuarios') or die(mysqli_error());

	
	if(isset($_POST['email']) && isset($_POST['senha'])){

	$email=$_POST['email'];
	$senha=$_POST['senha'];
    $senha = md5($senha);

	
	$get=mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");
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
                
                echo"<script language='javascript' type='text/javascript'>window.location.href='dentro.php'</script>";

                
            }
    }else{
        
                echo"<script language='javascript' type='text/javascript'>alert('Email ou senha incorretos. Tente novamente.');window.location.href='../visitante/login.php'</script>";
    
    }

}

?>

