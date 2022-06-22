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

<form id="select" method="POST" action="gabprogeoadm.php?q=1">


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
        location.href = './progeo.php';
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
        (UE – PA)
Um carro, cujo preço à vista é R$ 24 000,00, pode ser adquirido dando-se uma entrada e o restante em 5 parcelas que se encontram em progressão geométrica. Um cliente que optou por esse plano, ao pagar a entrada, foi informado que a segunda parcela seria de R$ 4 000,00 e a quarta parcela de R$ 1 000,00. Quanto esse cliente pagou de entrada na aquisição desse carro?
<br><br>
<div style="text-align:left;justify-content:center;" align="center">

  <label class="container">A) R$ 15 500,00
  <input id="questao-A" name="questao" type="radio" value="A" autocomplete="off"  required="required" />
   <span class="checkmark"></span>
  <label for="questao-A">
<br>
 </label></label>

 <label class="container">B) R$ 8 500,00
 <input id="questao-B" name="questao" type="radio" value="B" autocomplete="off" required="required" />
   <span class="checkmark"></span>
<label for="questao-B">
<br>
</label></label>

<label class="container">C) R$ 24 000,00
<input id="questao-C" name="questao" type="radio" value="C" autocomplete="off"  required="required"/>
   <span class="checkmark"></span>
<label for="questao-C">
</label>
<br>
</label>

<label class="container">D) R$ 24 000,00
<input id="questao-D" name="questao" type="radio" value="D" autocomplete="off"  required="required" />
<span class="checkmark"></span>
<label for="questao-D">

<br>
</label></label>

<label class="container">E) R$ 8000
<input id="questao-E" name="questao" type="radio" value="E" autocomplete="off"  required="required" />
<span class="checkmark"></span>
<label for="questao-E">

<br>
</label></label>
<input  name="gabarito" type="hidden" value="B" />
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
  Determine o décimo termo de uma progressão geométrica cujo primeiro termo é 2 e a razão é 3.

  <form id="select" method="post" action="gabprogeoadm.php?q=2">
            <br>
        <div>
          <label class="container">A) 10 
  <input id="questao-A" name="questao" type="radio" value="A" autocomplete="off" required="required" />
  <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
          <label class="container">B) 29
        <input id="questao-B" name="questao" type="radio" value="B" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) 30
        <input id="questao-C" name="questao" type="radio" value="C" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
           <label class="container">D) 39366
        <input id="questao-D" name="questao" type="radio" value="D" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>
          <label class="container">E) 130000
        <input id="questao-E" name="questao" type="radio" value="E" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-E"></label></div></li></label>
        
        <br>
        <input  name="gabarito" type="hidden" value="D" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
    

    </form> </div>

    <br><Br>
<div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
  A sequência seguinte é uma progressão geométrica, observe: (2, 6, 18, 54...). Determine o 8º termo dessa progressão.



  <form id="select" method="post" action="gabprogeoadm.php?q=3">
          <br>  
        <div>
          <label class="container">A) 4890 
  <input id="questao-A" name="questao" type="radio" value="A" autocomplete="off" required="required" />
  <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
          <label class="container">B) 5000
        <input id="questao-B" name="questao" type="radio" value="B" autocomplete="off" required="required" />
          <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) 2187
        <input id="questao-C" name="questao" type="radio" value="C" autocomplete="off" required="required" />
          <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
        <label class="container">D) 3000
        <input id="questao-D" name="questao" type="radio" value="D" autocomplete="off" required="required" />
          <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>
          <label class="container">E) 4374
        <input id="questao-E" name="questao" type="radio" value="E" autocomplete="off" required="required" />
          <span class="checkmark"></span>
        <label for="questao-E"></label></div></li></label>
        
        <br>
        <input  name="gabarito" type="hidden" value="E" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
  
    </form> </div>

    <br><Br>
<div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
  Considerando a PA de razão 2 e primeiro termo igual a 2, e a PG que possui mesma razão e mesmo primeiro termo, qual a diferença entre o décimo termo da PG e o décimo termo da PA?



  <form id="select" method="post" action="gabprogeoadm.php?q=4">
            <br>
        <div>
          <label class="container">A) 20
  <input id="questao-A" name="questao" type="radio" value="A" autocomplete="off" required="required" />
  <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
        <label class="container">B) 1028
        <input id="questao-B" name="questao" type="radio" value="B" autocomplete="off" required="required" />
          <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) 1208
        <input id="questao-C" name="questao" type="radio" value="C" autocomplete="off" required="required" />
           <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
        <label class="container">D) 1228
        <input id="questao-D" name="questao" type="radio" value="D" autocomplete="off" required="required" />
            <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>
            <label class="container">E) 1004
        <input id="questao-E" name="questao" type="radio" value="E" autocomplete="off" required="required" />
            <span class="checkmark"></span>
        <label for="questao-E"></label></div></li></label>
        
        <br>
        <input  name="gabarito" type="hidden" value="E" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
  
    </form> </div>
<Br><br>

    <div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
  Qual é o décimo quinto termo da PG (1, 2, 4, 8, …)?<br>



  <form id="select" method="post" action="gabprogeoadm.php?q=5">
            <br>
        <div>
        <label class="container">A) 10000
        <input id="questao-A" name="questao" type="radio" value="A" autocomplete="off" required="required" />
            <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
        <label class="container">B) 12584
        <input id="questao-B" name="questao" type="radio" value="B" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) 16384
        <input id="questao-C" name="questao" type="radio" value="C" autocomplete="off" required="required" />
            <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
           <label class="container">D) 20384
        <input id="questao-D" name="questao" type="radio" value="D" autocomplete="off" required="required" />
             <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>

            <label class="container">E) 22004
        <input id="questao-E" name="questao" type="radio" value="E" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-E"></label></div></li></label>
        
        <br>
        <input  name="gabarito" type="hidden" value="C" />
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
