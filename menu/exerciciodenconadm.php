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

<form id="select" method="POST" action="gabdenconadm.php?q=1">


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
        location.href = './dencon.php';      }
    }, 1000);
  });
}(window, document));
</script>

<br><br><br>

<div class="conteudoos">
  <h2>EXERCÍCIOS</h2>
        </div>
        <Br>

        <div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
        (Enem 2005)
O termo (ou expressão) destacado que está empregado em seu sentido próprio, denotativo, ocorre em
<br><br>
<div style="text-align:left;justify-content:center;" align="center">
  <label class="container">A) “(....)
É de laço e de nó
De gibeira o jiló
Dessa vida, cumprida a sol (....)”
  <input id="questao-A" name="questao" type="radio" autocomplete="off" value="A"  required="required" />
 <span class="checkmark"></span>
  <label for="questao-A">
<br>
 </label>
</label>

<label class="container">B) “Protegendo os inocentes
é que Deus, sábio demais,
põe cenários diferentes
nas impressões digitais.”
 <input id="questao-B" name="questao" type="radio" autocomplete="off" value="B" required="required" />
  <span class="checkmark"></span>
<label for="questao-B">
<br>
</label>
</label>

<label class="container">C) “O dicionário-padrão da língua e os dicionários unilíngues são os tipos mais comuns de dicionários. Em nossos dias, eles se tornaram um objeto de consumo obrigatório para as nações civilizadas e desenvolvidas.”
<input id="questao-C" name="questao" type="radio" autocomplete="off" value="C"  required="required"/>
  <span class="checkmark"></span>
<label for="questao-C">
<br>
</label>
</label>

<label class="container">D) "Ás vezes eu tenho a impressão...  de que a bateria dele não acaba!"
<input id="questao-D" name="questao" type="radio" autocomplete="off" value="D"  required="required" />
  <span class="checkmark"></span>

<label for="questao-D">
<br>
</label>
</label>

<label class="container">E) Humorismo é a arte de fazer cócegas no raciocínio dos outros. Há duas espécies de humorismo: o trágico e o cômico. O trágico é o que não consegue fazer rir; o cômico é o que é verdadeiramente trágico para se fazer.”
<input id="questao-E" name="questao" type="radio" autocomplete="off" value="E"  required="required" />
  <span class="checkmark"></span>

<label for="questao-E">

</label></label>
<input  name="gabarito" type="hidden" value="C" />
<br> 
    <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
  
    </form> </div> </div>

<br><Br>

<div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
  Sobre a conotação e a denotação, podemos afirmar, exceto:

  <form id="select" method="post" action="gabdenconadm.php?q=2">
          <br>  
        <div>
          <label class="container">A) A conotação é utilizada principalmente na linguagem poética e na literatura, mas pode ser encontrada em gêneros textuais do cotidiano, como letras de músicas, anúncios publicitários, entre outros. 
  <input id="questao-A" name="questao" type="radio" autocomplete="off" value="A" required="required" />
            <span class="checkmark"></span>
        <label for="questao-A">
        </label></div></label>
<div>
          <label class="container">B) Uma palavra ou expressão é usada no sentido denotativo para representar diferentes significados dependendo do contexto da enunciação.
        <input id="questao-B" name="questao" type="radio" autocomplete="off" value="B" required="required" />
                    <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) Os textos não literários devem preferir a denotação, pois essa tem como finalidade informar o receptor da mensagem de maneira clara e objetiva, livre de ambiguidades e metáforas.
        <input id="questao-C" name="questao" type="radio" autocomplete="off" value="C" required="required" />
         <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
            <label class="container">D) A conotação e a denotação são as variações de significado que ocorrem no signo linguístico, que, por sua vez, é composto de um significante (letras e sons) e um significado (conceito, ideia).
        <input id="questao-D" name="questao" type="radio"  autocomplete="off" value="D" required="required" />
        <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>
            <label class="container">E) A conotação é uma variação linguística por diacrônica, ou seja, varia de acordo com o tempo.
        <input id="questao-E" name="questao" type="radio" autocomplete="off" value="E" required="required" />
        <span class="checkmark"></span>
        <label for="questao-E"></label></div></li></label>
        
        <br>
        <input  name="gabarito" type="hidden" value="B" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
  
    </form> </div>

<br><Br>
<div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
  (Enem 2003)<br>
    <img src="./imagens/mafalda.jpg" class="videomat" width="55%">
<br><br>
  O humor presente na tirinha decorre principalmente do fato de a personagem Mafalda 


  <form id="select" method="post" action="gabdenconadm.php?q=3">
          <br>  
        <div>
            <label class="container">A) atribuir, no primeiro quadrinho, poder ilimitado ao dedo indicador.  
  <input id="questao-A" name="questao" type="radio" value="A" autocomplete="off" required="required" />
          <span class="checkmark"></span>
        <label for="questao-A"></label></label></div>
<div>
          <label class="container">B) considerar seu dedo indicador tão importante quanto o dos patrões.
        <input id="questao-B" name="questao" type="radio" autocomplete="off" value="B" required="required" />
                  <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) atribuir, no primeiro e no último quadrinhos, um mesmo sentido ao vocábulo “indicador”.
        <input id="questao-C" name="questao" type="radio" autocomplete="off" value="C" required="required" />
        <span class="checkmark"></span>
        <label for="questao-C"></label></div>
<div>
            <label class="container">D) usar corretamente a expressão “indicador de desemprego”, mesmo sendo criança.
        <input id="questao-D" name="questao" type="radio" autocomplete="off" value="D" required="required" />
                <span class="checkmark"></span>
        <label for="questao-D"></label></div></li>
        <div>
            <label class="container">E) atribuir, no último quadrinho, fama exagerada ao dedo indicador dos patrões.
        <input id="questao-E" name="questao" type="radio" autocomplete="off" value="E" required="required" />
                        <span class="checkmark"></span>
        <label for="questao-E"></label></div></li></label>
        
        <br>
        <input  name="gabarito" type="hidden" value="C" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
  
    </form> </div>

    <br><Br>
<div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >

    <img src="./imagens/denc.jpg" class="videomat" width="50%">
<br><br>
  Analisando as falas das personagens, assinale a alternativa que contenha as expressões utilizadas em seu sentido conotativo:

  <form id="select" method="post" action="gabdenconadm.php?q=4">
          <br>  
        <div>
          <label class="container">A) “Você vai comer asfalto” e “estou morto”.
  <input id="questao-A" name="questao" type="radio" value="A"  autocomplete="off" required="required" />
  <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
          <label class="container">B) “No quinto período, seu babaca” e “você vai comer asfalto”.
        <input id="questao-B" name="questao" type="radio" autocomplete="off" value="B" required="required" />
            <span class="checkmark"></span>
        <label for="questao-B"></label></div>
<div>
          <label class="container">C) “Ameaça terrorista” e “aula de educação física”.
        <input id="questao-C" name="questao" type="radio" autocomplete="off" value="C" required="required" />
            <span class="checkmark"></span>
        <label for="questao-C"></label></div>
<div>
          <label class="container">D) “Ameaça terrorista” e “estou morto”.
        <input id="questao-D" name="questao" type="radio" autocomplete="off" value="D" required="required" />
            <span class="checkmark"></span>
        <label for="questao-D"></label></div></li>
        <div>
            <label class="container">E) “Você vai comer asfalto” e “Ameaça terrorista”.
        <input id="questao-E" name="questao" type="radio" autocomplete="off" value="E" required="required" />
            <span class="checkmark"></span>
        <label for="questao-E"></label></div></li>
        
        <br>
        <input  name="gabarito" type="hidden" value="A" />
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
