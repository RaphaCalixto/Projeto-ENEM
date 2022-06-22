<?php
session_start();

//destruindo a variavel $_SESSION['usuario']
unset( $_SESSION["email"]);
unset( $_SESSION["senha"]);
unset( $_SESSION["adm"]);
unset( $_SESSION["nor"]);
unset( $_SESSION["nome"]);

?>

<script type="text/javascript">
	// redirecionando o usuario para a pagina de login
	location.href='index.php';
</script>