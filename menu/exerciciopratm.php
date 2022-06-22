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

<form id="select" method="POST" action="gabpratm.php?q=1">


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

      localStorage.setItem('tempo', time);
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

        <div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
        (Puc – RS) Tales, um aluno do Curso de Matemática, depois de terminar o semestre com êxito, resolveu viajar para a Europa. O portão de Brandeburgo, em Berlim, possui cinco entradas, cada uma com 11 metros de comprimento. Tales passou uma vez pela primeira porta, duas vezes pela segunda e assim sucessivamente, até passar cinco vezes pela quinta. Então ele percorreu ____ metros.
<br><br>
<div style="text-align:left;justify-content:center;" align="center">

  <label class="container">A) 55
  <input id="questao-A" name="questao" type="radio" value="A" autocomplete="off"  required="required" />
   <span class="checkmark"></span>
  <label for="questao-A">
<br>
 </label></label>

 <label class="container">B) 66
 <input id="questao-B" name="questao" type="radio" value="B" autocomplete="off" required="required" />
   <span class="checkmark"></span>
<label for="questao-B">
<br>
</label></label>

<label class="container">C) 165
<input id="questao-C" name="questao" type="radio" value="C"  autocomplete="off"  required="required"/>
   <span class="checkmark"></span>
<label for="questao-C">
</label>
<br>
</label>

<label class="container">D) 275
<input id="questao-D" name="questao" type="radio" value="D" autocomplete="off"  required="required" />
<span class="checkmark"></span>
<label for="questao-D">

<br>
</label></label>

<label class="container">E) 330
<input id="questao-E" name="questao" type="radio" value="E" autocomplete="off"  required="required" />
<span class="checkmark"></span>
<label for="questao-E">

<br>
</label></label>
<input  name="gabarito" type="hidden" value="C" />
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
  Um ciclista percorre 40 km na primeira hora; 34 km na segunda hora, e assim por diante, formando uma progressão aritmética. Quantos quilômetros percorrerá em 6 horas? 

  <form id="select" method="post" action="gabpratm.php?q=2">
            <br>
        <div>
          <label class="container">A) 180 
  <input id="questao-A" name="questao" type="radio" value="A" autocomplete="off" required="required" />
  <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
          <label class="container">B) 150
        <input id="questao-B" name="questao" type="radio" value="B" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) 220
        <input id="questao-C" name="questao" type="radio" value="C" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
           <label class="container">D) 140
        <input id="questao-D" name="questao" type="radio" value="D" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>
          <label class="container">E) 110
        <input id="questao-E" name="questao" type="radio" value="E" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-E"></label></div></li></label>
        
        <br>
        <input  name="gabarito" type="hidden" value="B" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
    

    </form> </div>

    <br><Br>
<div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
  Quantos meios aritméticos devemos inserir entre 8 e 89 de modo que a sequência obtida tenha razão 3?



  <form id="select" method="post" action="gabpratm.php?q=3">
          <br>  
        <div>
          <label class="container">A) 26 
  <input id="questao-A" name="questao" type="radio" value="A" autocomplete="off" required="required" />
  <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
          <label class="container">B) 16
        <input id="questao-B" name="questao" type="radio" value="B" autocomplete="off" required="required" />
          <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) 44
        <input id="questao-C" name="questao" type="radio" value="C" autocomplete="off" required="required" />
          <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
        <label class="container">D) 68
        <input id="questao-D" name="questao" type="radio" value="D" autocomplete="off" required="required" />
          <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>
          <label class="container">E) 51
        <input id="questao-E" name="questao" type="radio" value="E" autocomplete="off" required="required" />
          <span class="checkmark"></span>
        <label for="questao-E"></label></div></li></label>
        
        <br>
        <input  name="gabarito" type="hidden" value="A" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
  
    </form> </div>

    <br><Br>
<div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
  Um técnico recebeu a tarefa de organizar todos os documentos de um departamento em apenas uma semana. Se ele começou no domingo organizando 15, na segunda-feira 23 e assim por diante até terminar, quantos documentos ele organizou no total?



  <form id="select" method="post" action="gabpratm.php?q=4">
            <br>
        <div>
          <label class="container">A) 32 
  <input id="questao-A" name="questao" type="radio" value="A" autocomplete="off" required="required" />
  <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
        <label class="container">B) 220
        <input id="questao-B" name="questao" type="radio" value="B" autocomplete="off" required="required" />
          <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) 237
        <input id="questao-C" name="questao" type="radio" value="C" autocomplete="off" required="required" />
           <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
        <label class="container">D) 63
        <input id="questao-D" name="questao" type="radio" value="D" autocomplete="off" required="required" />
            <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>
            <label class="container">E) 273
        <input id="questao-E" name="questao" type="radio" value="E" autocomplete="off" required="required" />
            <span class="checkmark"></span>
        <label for="questao-E"></label></div></li></label>
        
        <br>
        <input  name="gabarito" type="hidden" value="E" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
  
    </form> </div>
<Br><br>

    <div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
  (ENEM-2012) Jogar baralho é uma atividade que estimula o raciocínio. Um jogo tradicional é a Paciência, que utiliza 52 cartas. Inicialmente são formadas sete colunas com as cartas. A primeira coluna tem uma carta, a segunda tem duas cartas, a terceira tem três cartas, a quarta tem quatro cartas, e assim sucessivamente até a sétima coluna, a qual tem sete cartas, e o que sobra forma o monte, que são as cartas não utilizadas nas colunas. A quantidade de cartas que forma o monte é:<br>



  <form id="select" method="post" action="gabpratm.php?q=5">
            <br>
        <div>
        <label class="container">A) 21 
        <input id="questao-A" name="questao" type="radio" value="A" autocomplete="off" required="required" />
            <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
        <label class="container">B) 24
        <input id="questao-B" name="questao" type="radio" value="B" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) 26
        <input id="questao-C" name="questao" type="radio" value="C" autocomplete="off" required="required" />
            <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
           <label class="container">D) 28
        <input id="questao-D" name="questao" type="radio" value="D" autocomplete="off" required="required" />
             <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>

            <label class="container">E) 31
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
