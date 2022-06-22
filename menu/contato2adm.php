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
    <title>Contato ADM</title>
    <link rel="stylesheet" type="text/css" href="estrutura/estrutura.css" />
    <link rel="stylesheet" type="text/css" href="./rodape/rodape.css" />
    <link rel="shortcut icon" href="./imagens/favicon.ico" />
     <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Cherry+Swash'>
      <link rel="stylesheet" href="icones/icones.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="../testemenu/css/styles.css">
        <script src="../testemenu/js/responsive-nav.js"></script>


</head>

<body>

<header>
      <a href="../index2.php" class="logo" data-scroll><img src="../imagens/190x33.png"></a>
       <ul class="nav">
      <nav class="nav-collapse">
        <ul>
          <li class="menu-item active"><a href="../index2adm.php" data-scroll>Inicio</a></li>
          <li class="menu-item"><a href="./enemadm.php" data-scroll>ENEM</a></li>
          <li class="menu-item"><a href="./materiasadm.php" data-scroll>Matérias</a></li>
          <li class="menu-item"><a href="./trocasenhaadm.php" data-scroll>Trocar Senha</a></li>
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

<form method="post" action="logout.php">


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





<style>
  body {
  background-color: ;
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
  color:#000000;
}

.conteudoos p {
  font-size: 16px;
  text-align: justify;
}

@media all and (max-width : 500px) {
  .ponti {
  width: 100%;
  height: auto;
background-position: center;
background-size: cover;
background-repeat: no-repeat;
}
}

@media all and (min-width : 768px) and (max-width : 1900px) { 

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

</style>

<br><br>
        <div align="left">
          <div class="esquerda">
            <ul>
          <div style="text-align:left;justify-content:center; " align="center">
          <font face="Arial"><font size="6" color="black">&nbsp;&nbsp;&nbsp;Alguma Dúvida?</font></font> <Br><br>
          <img src="imagens/ponti.png" class="ponti"><br><br>
          <font face="Arial"><font size="4" color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ligue: (21)000080100 <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mande um e-mail: projsemduvidas@gmail.com
</font></font>
</div>
</div>
</ul>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.974098848771!2d-43.337214585635465!3d-22.877415185026766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997dd3d9d90a2f%3A0x61595da23354a011!2sLemos%20De%20Castro!5e0!3m2!1spt-BR!2sbr!4v1568160357489!5m2!1spt-BR!2sbr" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>


<br><br><br><br><br><br><br><br><br>
<div id= "corpo_pagina">
<font color="white">
      <center>© Todos os direitos autorais ao grupo Focus.</center>
      <h3><center>Contate-nos: projsemduvidas@gmail.com</center></h3>
      <center><h5>Lemos de Castro, 2019.</h5></center>
    </div>
  </font>

</body>
</html>
