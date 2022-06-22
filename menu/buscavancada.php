<?php
include("../conexao.php"); // caminho do seu arquivo de conexão ao banco de dados

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

<?php
session_start();
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true) and (!isset ($_SESSION['adm']) == true) )
{
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  unset($_SESSION['adm']);

  header('location:../visitante/login.php');
  }
?>

    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="estrutura/estrutura.css" />
    <link rel="stylesheet" type="text/css" href="sair/sair.css" />
    <link rel="stylesheet" type="text/css" href="./butpesquisa.css" />
        <link rel="stylesheet" type="text/css" href="./select.css" />
            <link rel="stylesheet" type="text/css" href="./botao.css" />
    <link rel="stylesheet" type="text/css" href="rodape/rodape.css" />
     <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Cherry+Swash'>
      <link rel="stylesheet" href="icones/icones.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="../testemenu/css/styles.css">
        <script src="testemenu/js/responsive-nav.js"></script>

</head>

<body>
<style>
  

  @media all and (max-width : 1200px) {

.logo {
  width:10%;
  -webkit-tap-highlight-color: rgba(0,0,0,0);
  text-decoration: none;
  font-weight: bold;
  line-height: 55px;
  padding: 0 20px;
  color: #fff;
  float: left;
}
  }

  <br><br><br>
.conteudoos {
  overflow: hidden;
  position: absolute;
  margin-left: 30%;
  margin-right: 30%;
  top: 20%;
  color: #000000;

}

.conteudoos h2 {
  text-align: center;
  font-size: 45px;
  font-family: Geneva;
  color:#FF8000;
}



</style>




<header>
      <a href="../index2.php" class="logo"  data-scroll><img src="../imagens/190x33.png" ></a>
       <ul class="nav">
      <nav class="nav-collapse">
        <ul>
           <li class="menu-item active"><a href="../index2adm.php" data-scroll>Inicio</a></li>
          <li class="menu-item"><a href="./enemadm.php" data-scroll>ENEM</a></li>
          <li class="menu-item"><a href="./materiasadm.php" data-scroll>Matérias</a></li>
          <li class="menu-item"><a href="./trocasenhaadm.php" data-scroll>Trocar Senha</a>
          <li class="menu-item"><a href="./contato2adm.php" data-scroll>Contato</a></li>
          <li class="menu-item"><a href="./cadastradosadm.php" data-scroll>Cadastrados</a></li>
          <li class="menu-item"><a href="../logout.php" onclick="return confirm('Deseja realmente sair?');" title="Deslogar">SAIR</a></li>
        </ul>
      </ul>
      </nav>
    </header>


    <script src="testemenu/js/fastclick.js"></script>
    <script src="testemenu/js/scroll.js"></script>
    <script src="testemenu/js/fixed-responsive-nav.js"></script>
<br><br>

    <br>
    <div class="rede" id="facebook" id="alinhar">
     <img class="icone" src="imagens/facebook.png">
    </div>
    <div class="rede" id="twitter" id="alinhar">
     <img class="icone" src="imagens/twitter.png">
    </div>
    <div class="rede" id="instagram" id="alinhar">
     <img class="icone" src="imagens/instagram.png">
    </div>
    <div class="rede" id="youtube" id="alinhar">
     <img class="icone" src="imagens/youtube.png">
    </div>
  </section>


<br><br>

<div class="conteudoos">
  <h2>BUSCA DE CADASTRO</h2>
  <br>
        </div>

<center>
<div id='busca'>
  <form name="f1" method="post" action="relbuscavan.php">
    <input id="txtbusca" type="text" name="busca" placeholder="Digite aqui o desejado." autocomplete="off" required />
    <input id="btnBusca" type="submit"  value="Ok"/>

    <center>
<br>
      <div class="div-select">

         <select id="campo" name="campo">
            <option value="">Selecione</option>
            <option value=nome>Nome</option>
            <option value=email>Email</option>
            <option value=adm>Nível</option>
            <option value=id>ID</option>
         </select>  
      </div>
    </center>
  </form>
</div>
</center>

<br>





<br><br><br><br><br><br><br><br><Br><br><br><br><br><Br><br><br><Br>
<div id= "corpo_pagina">
  <font color="white">
      <center>© Todos os direitos autorais ao grupo Focus.</center>
      <h3><center>Contate-nos: projsemduvidas@gmail.com</center></h3>
      <center><h5>Lemos de Castro, 2019.</h5></center>
    </font>
</div>

</body>
</html>
