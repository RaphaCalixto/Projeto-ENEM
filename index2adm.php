<!DOCTYPE html>
<html lang="pt-br">

<head>

  <!-- 
    VER OS COMENTARIOS 
    
    PESQUISAR SOBRE EMMET(Plugin/Packege)
  -->

<?php
session_start();
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true) and (!isset ($_SESSION['adm']) == true) )
{
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  unset($_SESSION['adm']);

  header('location:visitante/login.php');
  }
?>


    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
    <title>Home ADM</title>
    <link rel="stylesheet" type="text/css" href="estrutura/estrutura.css" />
    <link rel="stylesheet" type="text/css" href="autoplay/slide.css">
    <link rel="stylesheet" type="text/css" href="rodape/rodape.css" />
    <link rel="shortcut icon" href="menu/imagens/favicon.ico" />
     <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Cherry+Swash'>
      <link rel="stylesheet" href="icones/icones.css">
      <link rel="stylesheet" href="responsivo/responsivo.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
       <meta name="author" content="Adtile">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="testemenu/css/styles.css">
    <link rel="stylesheet" href="botao.css">
        <script src="testemenu/js/responsive-nav.js"></script>


</head>

<body>

<!--

abaixo é a cor do fundo da pagina 
-->

<style>
  body{
  background-color: #E6E6E6;
}
</style>

<!--

abaixo é as imagens do autoplay
-->

<style>
.s-wrap .s-item-1 {
  background-image: url("imagens/EMAT3.png");
}
.s-wrap .s-item-2 {
  background-image: url("imagens/BRAN.png");
}
.s-wrap .s-item-3 {
  background-image: url("imagens/BEN.png");
}
.s-wrap .s-item-4 {
  background-image: url("imagens/mater.png");
}
.s-wrap .s-item-5 {
  background-image: url("imagens/ESTD.png");
}
</style>

  <!-- 
    
    CSS GRID

    OPTIMIZAR SECÇÃO CSS
  
  -->
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




@media all and (max-width : 500px) {

   .responsive1 {
  width: 60%;
  height: auto;
}

  .responsive2 {
  width: 60%;
  height: auto;
}

  .responsive3 {
  width: 60%;
  height: auto;
}
}

@media all and (min-width : 768px) and (max-width : 1500px) {

   .responsive1 {
  width: 18%;
  height: auto;

}

  .responsive2 {
  width: 17%;
  height: auto;

}

  .responsive3 {
  width: 17%;
  height: auto;

}
}

</style>

<Style>
  /* Alerta Erro----------------------------------------------- *//* Geral */.alerta {
    padding: 25px;
    border: 1px solid gray;
    border-radius: 3px;
    margin: 10px;
    font-size: 20px;
  }
    .error {border-color: #e8273b;color: #FFF;background-color: #ed5565;}.sucesso {border-color: #87c940;color: #FFF;background-color: #a0d468;}
    .atencao {
      border-color: #f4a911;
      color: #FFF;
      top:5px;
      position:relative;
          top: 20px;
      background-color: #f6bb42;
      }.info {border-color: #2f80e7;color: #FFF;background-color: #5d9cec;}
</Style>




  <header>

      <a href="index2.php" class="logo"  data-scroll><img src="imagens/190x33.png" ></a>
      <nav class="nav-collapse">
        <ul class="nav">
          <li class="menu-item active"><a href="index2adm.php" data-scroll>Inicio</a></li>
          <li class="menu-item"><a href="menu/enemadm.php" data-scroll>ENEM</a></li>
          <li class="menu-item"><a href="menu/materiasadm.php" data-scroll>Matérias</a></li>
          <li class="menu-item"><a href="menu/trocasenhaadm.php" data-scroll>Trocar Senha</a></li>
          <li class="menu-item"><a href="menu/contato2adm.php" data-scroll>Contato</a></li>
          <li class="menu-item"><a href="menu/cadastradosadm.php" data-scroll>Cadastrados</a></li>
          <li class="menu-item"><a href="logout.php" onclick="return confirm('Deseja realmente sair?');" title="Deslogar">SAIR</a></li>
        </ul>
      </nav>
    </header>


    <script src="testemenu/js/fastclick.js"></script>
    <script src="testemenu/js/scroll.js"></script>
    <script src="testemenu/js/fixed-responsive-nav.js"></script>
<br><br>
<form method="post" action="logout.php">


    <!--
      REDUZIR QUANTIDADE DE ELEMENTOS DO DOCUMENTO PARA MELHOR ENTENDIMENTO 
      
      EX.:
        <div class="div">
          <img src="" alt="">
          <img src="" alt="">
          <img src="" alt="">
          <img src="" alt="">
        </div>
    -->
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
<br>
<div class="alerta atencao">Administrador: <?php echo $_SESSION["nome"];  ?> </font></div>
<br>
<div class="outer-wrapper">
  <div class="s-wrap s-type-2" role="slider">
    <input type="radio" id="s-1" name="slider-control" checked="checked">
    <input type="radio" id="s-2" name="slider-control">
    <input type="radio" id="s-3" name="slider-control">
    <input type="radio" id="s-4" name="slider-control">
    <input type="radio" id="s-5" name="slider-control">
    <ul class="s-content">
      <li class="s-item s-item-1"></li>
      <li class="s-item s-item-2"></li>
      <li class="s-item s-item-3"></li>
      <li class="s-item s-item-4"></li>
      <li class="s-item s-item-5"></li>
    </ul>
  </div>
</div>

       <div style="text-align:center;justify-content:center;" align="center">
          <font face="Arial"><font size="5" color="black">Olá, <?php echo $_SESSION["nome"];  ?>. Seja muito bem vindo ao nosso portal de estudos!<br>Agora que você está logado, entre no menu de matérias e comece a estudar. Desejamos bons estudos para você! 
 </font>
</font>
 </div>

<br><br>

    <div align="left">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://enem.inep.gov.br" target="_blank"> <img src="imagens/enem201.png" class="responsive1"></a> <div class="box">
</div>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="menu/materiasadm.php"><img src="imagens/redacao.png" class="responsive2"></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="imagens/std.png" class="responsive3">
      </div>


<br><br><br><br><br><br><br><br><br>
<div id= "corpo_pagina">
      <center>© Todos os direitos autorais ao grupo Focus.</center>
      <h3><center>Contate-nos: projsemduvidas@gmail.com</center></h3>
      <center><h5>Lemos de Castro, 2019.</h5></center>
</div>
</body>
</html>
