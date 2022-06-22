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

<form id="select" method="POST" action="gabeletricidade.php?q=1">


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
        location.href = './eletricidade.php';
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

        Em uma residência onde moram quatro pessoas há um chuveiro de potência 6 kW. Sabendo que cada morador toma dois banhos por dia de aproximadamente 10 min cada e que o chuveiro sempre permanece na posição inverno, determine a energia consumida pelo equipamento em kWh ao fim de 1 mês.<br><br>
<div style="text-align:left;justify-content:center;" align="center">

<label class="container">A) 640
  <input id="questao-A" name="questao" type="radio"  autocomplete="off" value="A"  required="required" />
  <span class="checkmark"></span>
  <label for="questao-A">
<br>
 </label></label>

<label class="container">B) 280

 <input id="questao-B" name="questao" type="radio"  autocomplete="off" value="B" required="required" />
   <span class="checkmark"></span>

<label for="questao-B">
<br>
</label></label>

<label class="container">C) 100

<input id="questao-C" name="questao" type="radio" autocomplete="off" value="C"  required="required"/>
   <span class="checkmark"></span>

<label for="questao-C">
<br>
</label></label>

<label class="container">D) 120

<input id="questao-D" name="questao" type="radio" autocomplete="off" value="D"  required="required" />
   <span class="checkmark"></span>

<label for="questao-D">
<br>
</label></label>
<label class="container">E) 240


<input id="questao-E" name="questao" type="radio" autocomplete="off" value="E"  required="required" />
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
  (FUVEST) O arranjo experimental representado na figura é formado por uma fonte de tensão F, um amperímetro A, um voltímetro V, três resistores, R1, R2 e R3, de resistências iguais, e fios de ligação. <br>
  <img src="./imagens/circuito.jpg" class="videomat" width="30%"><br>
  Quando o amperímetro mede uma corrente de 2 A, e o voltímetro, uma tensão de 6 V, a potência dissipada em R2 é igual a<br><Br>

  <form id="select" method="post" action="gabeletricidade.php?q=2">
            <br>
        <div>
          <label class="container">A) 4W
  <input id="questao-A" name="questao" type="radio" autocomplete="off" value="A" required="required" />
     <span class="checkmark"></span>
        <label for="questao-A"> </label></div></label>
<div>
          <label class="container">B) 6W
        <input id="questao-B" name="questao" type="radio" autocomplete="off" value="B" required="required" />
        <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) 12W
        <input id="questao-C" name="questao" type="radio" autocomplete="off" value="C" required="required" />
        <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
          <label class="container">D) 18W
        <input id="questao-D" name="questao" type="radio" autocomplete="off" value="D" required="required" />
        <span class="checkmark"></span>
        <label for="questao-D"></label></div></label>
        <div>
            <label class="container">E) 24W
        <input id="questao-E" name="questao" type="radio" autocomplete="off" value="E" required="required" />
                <span class="checkmark"></span>
        <label for="questao-E"></label></div></label>
        
        <br>
        <input  name="gabarito" type="hidden" value="A" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
    

    </form> </div>

    <br><Br>
<div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
 (UFU) Comumente se ouve falar dos perigos da alta voltagem em dispositivos elétricos. Todavia, uma alta voltagem pode não significar uma grande quantidade de energia se
  <br>


  <form id="select" method="post" action="gabeletricidade.php?q=3">
          <br>  
        <div>
          <label class="container">A) O potencial elétrico envolvido for constante.
  <input id="questao-A" name="questao" type="radio" value="A" autocomplete="off" required="required" />
  <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
           <label class="container">B) A quantidade de carga envolvida for baixa.
        <input id="questao-B" name="questao" type="radio"  autocomplete="off" value="B" required="required" />
          <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) O campo elétrico envolvido for uniforme.
        <input id="questao-C" name="questao" type="radio" autocomplete="off" value="C" required="required" />
                  <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
          <label class="container">D) A força elétrica envolvida for baixa.
        <input id="questao-D" name="questao" type="radio" autocomplete="off" value="D" required="required" />
                          <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>
            <label class="container">E) A força elétrica envolvida for constante.
        <input id="questao-E" name="questao" type="radio" autocomplete="off" value="E" required="required" />
        <span class="checkmark"></span>
        <label for="questao-E"></label></div></li>
        
        <br>
        <input  name="gabarito" type="hidden" value="B" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
  
    </form> </div>

    <br><Br>
<div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
  Em uma residência onde moram quatro pessoas há um chuveiro de potência 6 kW. Sabendo que cada morador toma dois banhos por dia de aproximadamente 10 min cada e que o chuveiro sempre permanece na posição inverno, determine a energia consumida pelo equipamento em kWh ao fim de 1 mês.

  <br><br>

  <form id="select" method="post" action="gabeletricidade.php?q=4">
            <br>
        <div>
          <label class="container">A) 640
  <input id="questao-A" name="questao" type="radio" autocomplete="off" value="A" required="required" />
  <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
          <label class="container">B) 280
        <input id="questao-B" name="questao" type="radio" autocomplete="off" value="B" required="required" />
          <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) 100
        <input id="questao-C" name="questao" type="radio" autocomplete="off" value="C" required="required" />
        <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
        <label class="container">D) 120
        <input id="questao-D" name="questao" type="radio" autocomplete="off" value="D" required="required" />
        <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>
             <label class="container">E) 240
        <input id="questao-E" name="questao" type="radio" autocomplete="off" value="E" required="required" />
        <span class="checkmark"></span>
        <label for="questao-E"></label></div></li></label>
        
        <br>
        <input  name="gabarito" type="hidden" value="E" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
  
    </form> </div>
<Br><br>

    <div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
  O potencial elétrico de uma carga puntual é de 100 V/m. Um ponto distante dessa carga em 0,25 m apresenta potencial elétrico igual a:

  <br><Br>



  <form id="select" method="post" action="gabeletricidade.php?q=5">
            <br>
        <div>
          <label class="container">A) 2,5 V
  <input id="questao-A" name="questao" type="radio" value="A"  autocomplete="off" required="required" />
  <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
          <label class="container">B) 10 V
        <input id="questao-B" name="questao" type="radio" autocomplete="off" value="B" required="required" />
          <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
        <label class="container">C) 100 V
        <input id="questao-C" name="questao" type="radio" autocomplete="off" value="C" required="required" />
          <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
           <label class="container">D) 400 V
        <input id="questao-D" name="questao" type="radio" autocomplete="off" value="D" required="required" />
        <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>
          <label class="container">E) 25 V
        <input id="questao-E" name="questao" type="radio" autocomplete="off" value="E" required="required" />
        <span class="checkmark"></span>
        <label for="questao-E"></label></div></li></label>
        
        <br>
        <input  name="gabarito" type="hidden" value="E" />
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
