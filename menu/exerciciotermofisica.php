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

<form id="select" method="POST" action="gabtermofisica.php?q=1">


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
        location.href = './termofisica.php';
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

        <div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >

        Em um experimento foram utilizadas duas garrafas PET, uma pintada de branco e a outra de preto, acopladas cada uma a um termômetro. No ponto médio da distância entre as garrafas, foi mantida acesa, durante alguns minutos, uma lâmpada incandescente. Em seguida a lâmpada foi desligada. Durante o experimento, foram monitoradas as temperaturas das garrafas: a) enquanto a lâmpada permaneceu acesa e b) após a lâmpada ser desligada e atingirem equilíbrio térmico com o ambiente.<br><br>
          <img src="./imagens/questaotermo.jpg" class="videomat" width="30%"><br><br>
<div style="text-align:left;justify-content:center;" align="center">

<label class="container">A) Igual no aquecimento e igual no resfriamento.
  <input id="questao-A" name="questao" type="radio" value="A" autocomplete="off"  required="required" />
  <span class="checkmark"></span>
  <label for="questao-A">
<br>
 </label></label>

<label class="container">B) Maior no aquecimento e igual no resfriamento.

 <input id="questao-B" name="questao" type="radio" value="B" autocomplete="off" required="required" />
   <span class="checkmark"></span>

<label for="questao-B">
<br>
</label></label>

<label class="container">C) Menor no aquecimento e igual no resfriamento.

<input id="questao-C" name="questao" type="radio" value="C" autocomplete="off"  required="required"/>
   <span class="checkmark"></span>

<label for="questao-C">
<br>
</label></label>

<label class="container">D) maior no aquecimento e menor no resfriamento.

<input id="questao-D" name="questao" type="radio" value="D"  autocomplete="off" required="required" />
   <span class="checkmark"></span>

<label for="questao-D">
<br>
</label></label>
<label class="container">E) Maior no aquecimento e maior no resfriamento.

<input id="questao-E" name="questao" type="radio" value="E"  required="required" />
   <span class="checkmark"></span>

<label for="questao-E">
<br>
</label></label>
<input  name="gabarito" type="hidden" value="E" />
<br>
    <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
        </p>
           </div>
</font></font>
</div>
</div>
</ul>
</form>
<br><Br>
<div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
  Para fundir 400 g de determinada substância, 5000 cal de calor latente foram transmitidas para ela. Determine o calor latente de fusão dessa substância.<br><Br>

  <form id="select" method="post" action="gabtermofisica.php?q=2">
            <br>
        <div>
          <label class="container">A) 15000 cal/g
  <input id="questao-A" name="questao" type="radio" value="A" autocomplete="off" required="required" />
     <span class="checkmark"></span>
        <label for="questao-A"> </label></div></label>
<div>
          <label class="container">B) 2000 cal/g
        <input id="questao-B" name="questao" type="radio" value="B" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) 200.000 cal/g 
        <input id="questao-C" name="questao" type="radio" value="C" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
          <label class="container">D) 12,5 cal/g
        <input id="questao-D" name="questao" type="radio" value="D" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-D"></label></div></label>
        <div>
            <label class="container">E) 12.500 cal/g
        <input id="questao-E" name="questao" type="radio" value="E" autocomplete="off" required="required" />
                <span class="checkmark"></span>
        <label for="questao-E"></label></div></label>
        
        <br>
        <input  name="gabarito" type="hidden" value="D" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
    

    </form> </div>

    <br><Br>
<div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
  Determine qual deve ser a quantidade de calor sensível, em calorias, necessária para se variar em 50 ºC a temperatura de um corpo de 500 g de calor específico igual a 0,7 cal/gºC.
  <br>



  <form id="select" method="post" action="gabtermofisica.php?q=3">
          <br>  
        <div>
          <label class="container">A) 175.000 cal
  <input id="questao-A" name="questao" type="radio" value="A" autocomplete="off" required="required" />
  <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
           <label class="container">B) 15.000 cal
        <input id="questao-B" name="questao" type="radio" value="B" autocomplete="off" required="required" />
          <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) 1500 cal
        <input id="questao-C" name="questao" type="radio" value="C" autocomplete="off" required="required" />
                  <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
          <label class="container">D) 12.500 cal
        <input id="questao-D" name="questao" type="radio" value="D" autocomplete="off" required="required" />
                          <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>
            <label class="container">E) 17.500 cal
        <input id="questao-E" name="questao" type="radio" value="E" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-E"></label></div></li>
        
        <br>
        <input  name="gabarito" type="hidden" value="E" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
  
    </form> </div>

    <br><Br>
<div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
  Determinado corpo recebe 2500 cal de uma fonte de calor e tem sua temperatura variada de 25 ºC para 75 ºC. Determine a capacidade térmica desse corpo.

  <br><br>

  <form id="select" method="post" action="gabtermofisica.php?q=4">
            <br>
        <div>
          <label class="container">A) 45 cal/ºC
  <input id="questao-A" name="questao" type="radio" value="A" autocomplete="off" required="required" />
  <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
          <label class="container">B) 20 cal/ºC
        <input id="questao-B" name="questao" type="radio" value="B" autocomplete="off" required="required" />
          <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) 30 cal/ºC
        <input id="questao-C" name="questao" type="radio" value="C" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
        <label class="container">D) 50 cal/ºC
        <input id="questao-D" name="questao" type="radio" value="D" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>
        <label class="container">E) 22,5 cal/ºC
        <input id="questao-E" name="questao" type="radio" value="E" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-E"></label></div></li></label>
        
        <br>
        <input  name="gabarito" type="hidden" value="D" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
  
    </form> </div>
<Br><br>

    <div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
  O Brasil é reconhecidamente um país de contrastes. Entre eles, podemos apontar a variação de temperatura das capitais brasileiras. Palmas, por exemplo, atingiu, em 1º de julho de 1998, a temperatura de 13 ºC e, em 19 de setembro de 2013, a temperatura de 42 ºC (com sensação térmica de 50 ºC). Na escala Kelvin, a variação da temperatura na capital do Tocantins, entre os dois registros realizados, corresponde a:

  <br><Br>



  <form id="select" method="post" action="gabtermofisica.php?q=5">
            <br>
        <div>
          <label class="container">A) 13 K 
  <input id="questao-A" name="questao" type="radio" value="A" autocomplete="off" required="required" />
  <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
          <label class="container">B) 29 K
        <input id="questao-B" name="questao" type="radio" value="B" autocomplete="off" required="required" />
          <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
        <label class="container">C) 42 K
        <input id="questao-C" name="questao" type="radio" value="C" autocomplete="off" required="required" />
          <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
           <label class="container">D) 50 K
        <input id="questao-D" name="questao" type="radio" value="D" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>
          <label class="container">E) 30 K
        <input id="questao-E" name="questao" type="radio" value="E" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-E"></label></div></li></label>
        
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
