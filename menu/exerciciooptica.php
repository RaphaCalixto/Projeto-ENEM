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

<form id="select" method="POST" action="gaboptica.php?q=1">


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
        location.href = './optica.php';
      }
    }, 1000);
  });
}(window, doc
</script>

<br><br><br>

<div class="conteudoos">
  <h2>EXERCÍCIOS</h2>
        </div>
        <Br>

        <div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >

        Quando a luz branca atravessa um prisma transparente, ela decompõe-se, tornando evidente o espectro de cores que se unem para formá-la. O fenômeno descrito refere-se à:<br><br>
<div style="text-align:left;justify-content:center;" align="center">

<label class="container">A) Dispersão da luz.
  <input id="questao-A" name="questao" type="radio" value="A" autocomplete="off"  required="required" />
  <span class="checkmark"></span>
  <label for="questao-A">
<br>
 </label></label>

<label class="container">B) Reflexão da luz.

 <input id="questao-B" name="questao" type="radio" value="B" autocomplete="off" required="required" />
   <span class="checkmark"></span>

<label for="questao-B">
<br>
</label></label>

<label class="container">C) Absorção da luz.

<input id="questao-C" name="questao" type="radio" value="C" autocomplete="off"  required="required"/>
   <span class="checkmark"></span>

<label for="questao-C">
<br>
</label></label>

<label class="container">D) Difração da luz.

<input id="questao-D" name="questao" type="radio" value="D" autocomplete="off"  required="required" />
   <span class="checkmark"></span>

<label for="questao-D">
<br>
</label></label>
<label class="container">E) Polarização da luz.


<input id="questao-E" name="questao" type="radio" value="E"  autocomplete="off"  required="required" />
   <span class="checkmark"></span>

<label for="questao-E">
<br>
</label></label>
<input  name="gabarito" type="hidden" value="A" />
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
  (IFSC) Com base nos princípios da óptica geométrica, analise as afirmativas abaixo.
<Br>
I. Na reflexão, o raio incidente e o raio refletido estão contidos no mesmo plano que a reta normal, portanto são congruentes.
<Br>
II. Quando a luz incide numa fronteira separadora de dois meios, pode sofrer reflexão, absorção e refração.
<Br>
III. Ao observarmos uma pessoa através de um espelho plano, também seremos vistos por ela. Este fenômeno é descrito pelo Princípio da Independência dos Raios Luminosos.
<Br>
IV. A faixa de frequência de ondas capaz de sensibilizar o olho humano é denominada de espectro visível.
<Br>
V. Podemos considerar que a “sombra” de uma nuvem projetada sobre o solo é do mesmo tamanho da própria nuvem, devido aos raios solares serem aproximadamente paralelos.
<Br>
É CORRETO afirmar que<br><Br>

  <form id="select" method="post" action="gaboptica.php?q=2">
            <br>
        <div>
          <label class="container">A) apenas II, IV e V são verdadeiras.
  <input id="questao-A" name="questao" type="radio" autocomplete="off" value="A" required="required" />
     <span class="checkmark"></span>
        <label for="questao-A"> </label></div></label>
<div>
          <label class="container">B) apenas II, IV e V são verdadeiras. 
        <input id="questao-B" name="questao" type="radio" autocomplete="off" value="B" required="required" />
        <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) apenas III e V são verdadeiras. 
        <input id="questao-C" name="questao" type="radio" autocomplete="off" value="C" required="required" />
        <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
          <label class="container">D) apenas I, II, III e VI são verdadeiras.
        <input id="questao-D" name="questao" type="radio" autocomplete="off" value="D" required="required" />
        <span class="checkmark"></span>
        <label for="questao-D"></label></div></label>
        <div>
            <label class="container">E) apenas III e IV são verdadeiras.
        <input id="questao-E" name="questao" type="radio" autocomplete="off" value="E" required="required" />
                <span class="checkmark"></span>
        <label for="questao-E"></label></div></label>
        
        <br>
        <input  name="gabarito" type="hidden" value="A" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
    

    </form> </div>

    <br><Br>
<div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
  A luz visível é um tipo de onda eletromagnética. As ondas eletromagnéticas são capazes de propagarem-se no vácuo com uma velocidade de aproximadamente 3.108 m/s. São exemplos de ondas eletromagnéticas:
  <br>




  <form id="select" method="post" action="gaboptica.php?q=3">
          <br>  
        <div>
          <label class="container">A) Luz visível, infravermelho, infrassom
  <input id="questao-A" name="questao" type="radio" value="A" autocomplete="off" required="required" />
  <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
           <label class="container">B) Micro-ondas, ultrassom, radiação gama
        <input id="questao-B" name="questao" type="radio" value="B" autocomplete="off" required="required" />
          <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) Raios X, ondas de rádio, radiação gama
        <input id="questao-C" name="questao" type="radio" value="C" autocomplete="off" required="required" />
                  <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
          <label class="container">D) Raios X, ondas de rádio, radiação beta
        <input id="questao-D" name="questao" type="radio" value="D" autocomplete="off" required="required" />
                          <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>
            <label class="container">E) Raios X, ondas de rádio, radiação alfa
        <input id="questao-E" name="questao" type="radio" value="E" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-E"></label></div></li>
        
        <br>
        <input  name="gabarito" type="hidden" value="C" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
  
    </form> </div>

    <br><Br>
<div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
  A correção de defeitos visuais é feita com base em uma das áreas da Óptica. Para tanto, usam-se sistemas ópticos corretivos, como as lentes delgadas. A área da Óptica que corresponde às correções aplicadas à visão é conhecida como:

  <br><br>

  <form id="select" method="post" action="gaboptica.php?q=4">
            <br>
        <div>
          <label class="container">A) Óptica Quântica
  <input id="questao-A" name="questao" type="radio" value="A" autocomplete="off" required="required" />
  <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
          <label class="container">B) Óptica Ondulatória
        <input id="questao-B" name="questao" type="radio" value="B" autocomplete="off" required="required" />
          <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) Oftalmologia
        <input id="questao-C" name="questao" type="radio" value="C" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
        <label class="container">D) Óptica Geométrica
        <input id="questao-D" name="questao" type="radio" value="D" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>
             <label class="container">E) Optometria
        <input id="questao-E" name="questao" type="radio" value="E" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-E"></label></div></li></label>
        
        <br>
        <input  name="gabarito" type="hidden" value="D" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
  
    </form> </div>
<Br><br>

    <div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
  Ao observar o asfalto em dias quentes podemos perceber a formação de imagens que aparentam poças d’água.
<Br>
  <img src="./imagens/miragem.jpg" class="videomat">
<Br>
Marque a alternativa que apresenta o nome dado a este evento e o fenômeno óptico envolvido em sua ocorrência.

  <br><Br>



  <form id="select" method="post" action="gaboptica.php?q=5">
            <br>
        <div>
          <label class="container">A) Miragens, reflexão da luz
  <input id="questao-A" name="questao" type="radio" value="A" autocomplete="off" required="required" />
  <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
          <label class="container">B) Dispersão, refração da luz
        <input id="questao-B" name="questao" type="radio" value="B" autocomplete="off" required="required" />
          <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
        <label class="container">C) Difração, reflexão da luz
        <input id="questao-C" name="questao" type="radio" value="C" autocomplete="off" required="required" />
          <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
           <label class="container">D) Miragens, refração da luz
        <input id="questao-D" name="questao" type="radio" value="D" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>
          <label class="container">E) Miragens, absorção da luz.
        <input id="questao-E" name="questao" type="radio" value="E" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-E"></label></div></li></label>
        
        <br>
        <input  name="gabarito" type="hidden" value="D" />
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
