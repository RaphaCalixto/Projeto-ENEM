<!DOCTYPE html>
<html lang="pt-br">

<head>

<?php
session_start();
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true) and (!isset ($_SESSION['nor']) == true))
{
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  unset($_SESSION['nome']);
  unset($_SESSION['nor']);
  header('location:../visitante/login.php');
  }
?>

    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
    <title>Exercícios</title>
    <link rel="shortcut icon" href="./imagens/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="estrutura/estrutura.css" />
    <link rel="stylesheet" type="text/css" href="../rodape/rodape.css" />
    <link rel="stylesheet" type="text/css" href="./butaoresponder.css" />
        <link rel="stylesheet" type="text/css" href="./option.css" />
     <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Cherry+Swash'>
      <link rel="stylesheet" href="icones/icones.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="../testemenu/css/styles.css">
    <link rel="stylesheet" href="./redire.css">
        <script src="../testemenu/js/responsive-nav.js"></script>


</head>

<body>

<header>
      <a href="../index2.php" class="logo" data-scroll><img src="../imagens/190x33.png"></a>
       <ul class="nav">
      <nav class="nav-collapse">
        <ul>
          <li class="menu-item active"><a href="../index2.php" data-scroll>Inicio</a></li>
          <li class="menu-item"><a href="./enem.php" data-scroll>ENEM</a></li>
          <li class="menu-item"><a href="../menu/materias.php" data-scroll>Matérias</a></li>
          <li class="menu-item"><a href="./trocasenha.php" data-scroll>Trocar Senha</a></li>
          <li class="menu-item"><a href="../menu/contato2.php" data-scroll>Contato</a></li>
          <li class="menu-item"><a href="../logout.php" onclick="return confirm('Deseja realmente sair?');">SAIR</a></li>
        </ul>
      </ul>
      </nav>
    </header>
    <script src="testemenu/js/fastclick.js"></script>
    <script src="testemenu/js/scroll.js"></script>
    <script src="testemenu/js/fixed-responsive-nav.js"></script>

    <br><br>

<form id="select" method="POST" action="gabgentext.php?q=1">


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

.conteudoos p {
  font-size: 16px;
  text-align: justify;
}

.conteudaaas p {
  font-size: 16px;
  text-align: justify;
}
@media all and (max-width : 500px) {


.videomat {
  width: 100%;
  height: auto;
background-position: center;
background-size: cover;
background-repeat: no-repeat;
}

.texto
{
    width: 100%;
  height: auto;
background-position: center;
background-size: cover;
background-repeat: no-repeat;
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

sup, sub {
font-size:0.8em;
}

</style>

<br><br><br>
<div class="alert">
<strong><p>Você será redirecionado em <span id="timeLeft"></span> segundos.</p></strong>
</div>

<script>
(function(window, document, undefined){
  'use strict';

  document.addEventListener('DOMContentLoaded', function(event) {

    var time = 120;
    var $timeLeft = document.getElementById('timeLeft');

    $timeLeft.innerHTML = time;



    var itv = setInterval(function(){
      $timeLeft.innerHTML = time--;

      if (time === 0) {
        clearTimeout(itv);
         alert("Seu tempo acabou!");
        location.href = './pratm.php';
      }
    }, 1000);
  });
}(window, document));
</script>
<br><br><br>

<div class="conteudoos">
  <h2>EXERCÍCIOS</h2>
        </div>
        <Br>

        <div style="text-align:left;justify-content:center; margin-left: 20px; margin-right: 20px;" align="center" >
        Enem 2013<br>
<br>
A diva<br>

Vamos ao teatro, Maria José?<br>

Quem me dera,<br>

desmanchei em rosca quinze kilos de farinha,<br>

tou podre. Outro dia a gente vamos.<br>

Falou meio triste, culpada,<br>

e um pouco alegre por recusar com orgulho.<br>

TEATRO! Disse no espelho.<br>

TEATRO! Mais alto, desgrenhada.<br>

TEATRO! E os cacos voaram<br>

sem nenhum aplauso.<br>

Perfeita.<br>
<br>
PRADO, A. Oráculos de maio. São Paulo: Siciliano, 1999.<br>
<br>
Os diferentes gêneros textuais desempenham funções sociais diversas, reconhecidas pelo leitor com base em suas características específicas, bem como na situação comunicativa em que ele é produzido. Assim, o texto A diva
<br><br>
<div style="text-align:left;justify-content:center;" align="center">
  <label class="container">A) narra um fato real vivido por Maria José.
  <input id="questao-A" name="questao" type="radio" autocomplete="off" value="A"  required="required" />
 <span class="checkmark"></span>
  <label for="questao-A">
<br>
 </label>
</label>

<label class="container">B) surpreende o leitor pelo seu efeito poético.
 <input id="questao-B" name="questao" type="radio" autocomplete="off" value="B" required="required" />
  <span class="checkmark"></span>
<label for="questao-B">
<br>
</label>
</label>

<label class="container">C) relata uma experiência teatral profissional.
<input id="questao-C" name="questao" type="radio"  autocomplete="off" value="C"  required="required"/>
  <span class="checkmark"></span>
<label for="questao-C">
<br>
</label>
</label>

<label class="container">D) descreve uma ação típica de uma mulher sonhadora.
<input id="questao-D" name="questao" type="radio" autocomplete="off" value="D"  required="required" />
  <span class="checkmark"></span>

<label for="questao-D">
<br>
</label>
</label>

<label class="container">E) defende um ponto de vista relativo ao exercício teatral.
<input id="questao-E" name="questao" type="radio" autocomplete="off" value="E"  required="required" />
  <span class="checkmark"></span>

<label for="questao-E">

</label></label>
<input  name="gabarito" type="hidden" value="B" />
<br> 
    <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
  
    </form> </div> </div>

<br><Br>

<div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
  Sobre as características dos gêneros textuais, é INCORRETO afirmar que:

  <form id="select" method="post" action="gabgentext.php?q=2">
          <br>  
        <div>
          <label class="container">A) Os gêneros textuais desempenham funções sociais diversas, reconhecidas pelo leitor com base em suas características específicas, bem como na situação comunicativa em que ele é produzido.
  <input id="questao-A" name="questao" type="radio" autocomplete="off" value="A" required="required" />
            <span class="checkmark"></span>
        <label for="questao-A">
        </label></div></label>
<div>
          <label class="container">B) Os gêneros textuais são estruturas relativamente padronizadas que variam de acordo com as várias situações comunicativas.
        <input id="questao-B" name="questao" type="radio" autocomplete="off" value="B" required="required" />
                    <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) Os gêneros textuais são estruturas bem definidas, limitadas, e podem apresentar-se sob a forma de cinco diferentes tipos de texto.
        <input id="questao-C" name="questao" type="radio" autocomplete="off" value="C" required="required" />
         <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
            <label class="container">D) Os gêneros textuais podem ser representados na linguagem verbal e não verbal, em anúncios publicitários, charges, tirinhas e também em reportagens, notícias, e-mails, etc.
        <input id="questao-D" name="questao" type="radio" autocomplete="off" value="D" required="required" />
        <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>
            <label class="container">E) Os gêneros textuais, por adequarem-se às necessidades linguísticas dos falantes de acordo com as mudanças históricas e sociais, são incontáveis, diferentemente do que acontece com os tipos textuais.
        <input id="questao-E" name="questao" type="radio" autocomplete="off" value="E" required="required" />
        <span class="checkmark"></span>
        <label for="questao-E"></label></div></li></label>
        
        <br>
        <input  name="gabarito" type="hidden" value="C" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
  
    </form> </div>

<br><Br>
<div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
  Assinale a sequência correta:<br>
<br>
I. São definidos por propriedades linguísticas como vocabulário, relações lógicas, tempos verbais, construções frasais etc.<br>
<br>
II. Realizações linguísticas concretas definidas por propriedades sociocomunicativas, ou seja, dentro de um contexto cultural e com função comunicativa.<br>
<br>
III. Abrangem um conjunto praticamente ilimitado de características determinadas pelo estilo do autor, conteúdo, composição e função.<br>
<br>
IV. Geralmente variam entre cinco e nove tipos: narração, argumentação, descrição, injunção e exposição.
<br>
  <form id="select" method="post" action="gabgentext.php?q=3">
          <br>  
        <div>
            <label class="container">A) tipo textual, gênero textual, gênero textual, tipo textual.
  <input id="questao-A" name="questao" type="radio" value="A" autocomplete="off" required="required" />
          <span class="checkmark"></span>
        <label for="questao-A"></label></label></div>
<div>
          <label class="container">B) tipo textual, tipo textual, gênero textual, gênero textual.
        <input id="questao-B" name="questao" type="radio" autocomplete="off" value="B" required="required" />
                  <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) tipo textual, gênero textual, gênero textual, gênero textual.
        <input id="questao-C" name="questao" type="radio" value="C" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-C"></label></div>
<div>
            <label class="container">D) gênero textual, tipo textual, tipo textual, tipo textual.
        <input id="questao-D" name="questao" type="radio" autocomplete="off" value="D" required="required" />
                <span class="checkmark"></span>
        <label for="questao-D"></label></div></li>
        <div>
            <label class="container">E) gênero textual, tipo textual, gênero textual, tipo textual.
        <input id="questao-E" name="questao" type="radio" autocomplete="off" value="E" required="required" />
                        <span class="checkmark"></span>
        <label for="questao-E"></label></div></li></label>
        
        <br>
        <input  name="gabarito" type="hidden" value="A" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
  
    </form> </div>

    <br><Br>
<div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
  (ENEM 2010)<Br>

MOSTRE QUE SUA MEMÓRIA É MELHOR DO QUE A DE COMPUTADOR E GUARDE ESTA CONDIÇÃO: 12X SEM JUROS.<Br>
<Br>
Revista Época. N° 424, 03 jul. 2006.<Br>
<Br>
Ao circularem socialmente, os textos realizam-se como práticas de linguagem, assumindo funções específicas, formais e de conteúdo. Considerando o contexto em que circula o texto publicitário, seu objetivo básico é<Br>

  <form id="select" method="post" action="gabgentext.php?q=4">
          <br>  
        <div>
          <label class="container">A) definir regras de comportamento social pautadas no combate ao consumismo exagerado.
  <input id="questao-A" name="questao" type="radio" value="A" autocomplete="off" required="required" />
  <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
          <label class="container">B) influenciar o comportamento do leitor, por meio de apelos que visam à adesão ao consumo.
        <input id="questao-B" name="questao" type="radio" autocomplete="off" value="B" required="required" />
            <span class="checkmark"></span>
        <label for="questao-B"></label></div>
<div>
          <label class="container">C) defender a importância do conhecimento de informática pela população de baixo poder aquisitivo.
        <input id="questao-C" name="questao" type="radio" autocomplete="off" value="C" required="required" />
            <span class="checkmark"></span>
        <label for="questao-C"></label></div>
<div>
          <label class="container">D) facilitar o uso de equipamentos de informática pelas classes sociais economicamente desfavorecidas.
        <input id="questao-D" name="questao" type="radio" autocomplete="off" value="D" required="required" />
            <span class="checkmark"></span>
        <label for="questao-D"></label></div></li>
        <div>
            <label class="container">E) questionar o fato de o homem ser mais inteligente que a máquina, mesmo a mais moderna.
        <input id="questao-E" name="questao" type="radio" autocomplete="off" value="E" required="required" />
            <span class="checkmark"></span>
        <label for="questao-E"></label></div></li>
        
        <br>
        <input  name="gabarito" type="hidden" value="B" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
      
  
    </form> </div>

<script language='javascript' type='text/javascript'>alert('Seja bem-vindo a nossa tela de estudos. Você terá 2 minutos para fazer cada exercício, ou mais caso consiga! Boa sorte!');</script>

<br><br><br><br><br><br>
<div id= "corpo_pagina">
  <font color="white">
      <center>© Todos os direitos autorais ao grupo Focus.</center>
      <h3><center>Contate-nos: projsemduvidas@gmail.com</center></h3>
      <center><h5>Lemos de Castro, 2019.</h5></center>
    </font>
</div>

</body>
</html>
