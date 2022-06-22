<?php

//criando um objeto mysqli.
$conn = new mysqli('localhost', 'root', '@lablemos2019', 'tbusuarios');

	if($conn->connect_errno)
		echo "Falha na conexao: (".$conn->connect_errno.") ".$conn->connect_error;
	
?>
