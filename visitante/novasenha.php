<!DOCTYPE html>
<html lang="pt-br">

<head>


    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
    <title>Login</title>
    <meta name="description" content="DESCRIPTION">
    <link rel="stylesheet" type="text/css" href="../secao/secao.css" />
    <link rel="stylesheet" type="text/css" href="../estilo/estilo.css" />
    <link rel="stylesheet" type="text/css" href="../estilo/estiloprincipal.css" />
    <link rel="stylesheet" type="text/css" href="../principal/principal.css" />
    <link rel="stylesheet" type="text/css" href="../conteudo/conteudo.css" />
</head>

<body>

<style>
  body {
   background-image: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .7)), url(imagens/emat.jpg); /* imagem de fundo */
  }
</style>

<form action="senhanova.php" method="post">
    <?php
    session_start();
    $cpf = $_SESSION['cpf'];
    $rg = $_SESSION['rg'];
    ?>

    <div class="principal">
        <div class="nav">
            <div class="esquerda">
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>
            </div>
            <div class="direita">
                <ul>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="cadastro.php">Registrar</a></li>
                </ul>
            </div>
        </div>

        <div class="cabecalho">
          <br><br><br><br><br><br><br>
            <h1>NOVA SENHA</h1>
            <p>Digite sua nova senha abaixo</p>
        </div>

        <div class="form">
            <form>
		<input type="password" name="nsenha" placeholder="Digite sua nova senha" maxlength="40" >
            </form>
            <button class="button" a href="login2.php">Confirmar</button>
            <br><br>
        </div>
  </body>
</html>