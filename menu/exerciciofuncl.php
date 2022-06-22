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

<form id="select" method="POST" action="gabfuncl.php?q=1">


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
        location.href = './funcl.php';
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
        A biosfera, que reúne todos os ambientes onde se desenvolvem os seres vivos, divide-se em unidades menores chamadas ecossistemas, que podem ser uma floresta, um deserto e até um lago. Um ecossistema tem múltiplos mecanismos que regulam o número de organismos dentro dele, controlando sua reprodução, crescimento e migrações.
        DUARTE, M. O guia dos curiosos. São Paulo: Companhia das Letras, 1995.
        <br><br>
Predomina no texto a função da linguagem:
<br><br>
<div style="text-align:left;justify-content:center;" align="center">
  <label class="container">A) emotiva, porque o autor expressa seu sentimento em relação à ecologia.
  <input id="questao-A" name="questao" type="radio" autocomplete="off" value="A"  required="required" />
 <span class="checkmark"></span>
  <label for="questao-A">
<br>
 </label>
</label>

<label class="container">B) fática, porque o texto testa o funcionamento do canal de comunicação.
 <input id="questao-B" name="questao" type="radio" autocomplete="off" value="B" required="required" />
  <span class="checkmark"></span>
<label for="questao-B">
<br>
</label>
</label>

<label class="container">C) poética, porque o texto chama a atenção para os recursos de linguagem.
<input id="questao-C" name="questao" type="radio" autocomplete="off" value="C"  required="required"/>
  <span class="checkmark"></span>
<label for="questao-C">
<br>
</label>
</label>

<label class="container">D) conativa, porque o texto procura orientar comportamentos do leitor.
<input id="questao-D" name="questao" type="radio" autocomplete="off" value="D"  required="required" />
  <span class="checkmark"></span>

<label for="questao-D">
<br>
</label>
</label>

<label class="container">E) referencial, porque o texto trata de noções e informações conceituais.
<input id="questao-E" name="questao" type="radio" autocomplete="off" value="E"  required="required" />
  <span class="checkmark"></span>

<label for="questao-E">

</label></label>
<input  name="gabarito" type="hidden" value="E" />
<br> 
    <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
  
    </form> </div> </div>

<br><Br>

<div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
  (ESPCEX-2011) Quando a intenção do emissor está voltada para a própria mensagem, quer na seleção e combinação das palavras, quer na estrutura da mensagem, com as mensagens carregadas de significados, temos a função de linguagem denominada:

  <form id="select" method="post" action="gabfuncl.php?q=2">
          <br>  
        <div>
          <label class="container">A) fática 
  <input id="questao-A" name="questao" type="radio" autocomplete="off" value="A" required="required" />
            <span class="checkmark"></span>
        <label for="questao-A">
        </label></div></label>
<div>
          <label class="container">B) poética
        <input id="questao-B" name="questao" type="radio" autocomplete="off" value="B" required="required" />
                    <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) emotiva
        <input id="questao-C" name="questao" type="radio" autocomplete="off" value="C" required="required" />
         <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
            <label class="container">D) referencial
        <input id="questao-D" name="questao" type="radio" autocomplete="off" value="D" required="required" />
        <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>
            <label class="container">E) metalinguística
        <input id="questao-E" name="questao" type="radio" autocomplete="off" value="E" required="required" />
        <span class="checkmark"></span>
        <label for="questao-E"></label></div></li></label>
        
        <br>
        <input  name="gabarito" type="hidden" value="B" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
  
    </form> </div>

<br><Br>
<div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
  (ENEM-2012)<br>
  "Desabafo"<br> 
Desculpem-me, mas não dá pra fazer uma cronicazinha divertida hoje. Simplesmente não dá. Não tem como disfarçar: esta é uma típica manhã de segundafeira. A começar pela luz acesa da sala que esqueci ontem à noite. Seis recados para serem respondidos na secretária eletrônica. Recados chatos. Contas para pagar que venceram ontem. Estou nervoso. Estou zangado. <br>
CARNEIRO, J. E. Veja, 11 set. 2002 (fragmento). <br>
Nos textos em geral, é comum a manifestação simultânea de várias funções da linguagem, com o predomínio, entretanto, de uma sobre as outras. No fragmento da crônica Desabafo, a função da linguagem predominante é a emotiva ou expressiva, pois: 

  <form id="select" method="post" action="gabfuncl.php?q=3">
          <br>  
        <div>
            <label class="container">A) O discurso do enunciador tem como foco o próprio código  
  <input id="questao-A" name="questao" type="radio" autocomplete="off" value="A" required="required" />
          <span class="checkmark"></span>
        <label for="questao-A"></label></label></div>
<div>
          <label class="container">B) A atitude do enunciador se sobrepõe àquilo que está sendo dito 
        <input id="questao-B" name="questao" type="radio" autocomplete="off" value="B" required="required" />
                  <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) O interlocutor é o foco do enunciador na construção da mensagem
        <input id="questao-C" name="questao" type="radio" autocomplete="off" value="C" required="required" />
        <span class="checkmark"></span>
        <label for="questao-C"></label></div>
<div>
            <label class="container">D) O referente é o elemento que se sobressai em detrimento dos demais
        <input id="questao-D" name="questao" type="radio" autocomplete="off" value="D" required="required" />
                <span class="checkmark"></span>
        <label for="questao-D"></label></div></li>
        <div>
            <label class="container">E) O enunciador tem como objetivo principal a manutenção da comunicação
        <input id="questao-E" name="questao" type="radio" autocomplete="off" value="E" required="required" />
                        <span class="checkmark"></span>
        <label for="questao-E"></label></div></li></label>
        
        <br>
        <input  name="gabarito" type="hidden" value="B" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
  
    </form> </div>

    <br><Br>
<div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
  Assinale a alternativa que contenha a sequência correta sobre as funções da linguagem, importantes elementos da comunicação:<Br><Br>

1. Ênfase no emissor (lª pessoa) e na expressão direta de suas emoções e atitudes.<br><Br>

2. Evidencia o assunto, o objeto, os fatos, os juízos. É a linguagem da comunicação.<br><Br>

3. Busca mobilizar a atenção do receptor, produzindo um apelo ou uma ordem.<br><Br>

4. Ênfase  no canal para checar sua recepção ou para manter a conexão entre os falantes.<br><Br>

5.  Visa à tradução do código ou à elaboração do discurso, seja ele linguístico ou extralinguístico.<br><Br>

6. Voltada para o processo de estruturação da mensagem e para seus próprios constituintes, tendo em vista produzir um efeito estético.<Br><br>

( ) função metalinguística.<br><Br>

( ) função poética.<br><Br>

( ) função referencial.<br><Br>

( ) função fática.<br><Br>

( ) função conativa.<br><Br>

( ) função emotiva.<br><Br>

  <form id="select" method="post" action="gabfuncl.php?q=4">
          <br>  
        <div>
          <label class="container">A) 1, 2, 4, 3, 6, 5.
  <input id="questao-A" name="questao" type="radio" value="A" autocomplete="off" required="required" />
  <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
          <label class="container">B) 5, 2, 6, 4, 3, 1.
        <input id="questao-B" name="questao" type="radio" autocomplete="off" value="B" required="required" />
            <span class="checkmark"></span>
        <label for="questao-B"></label></div>
<div>
          <label class="container">C) 5, 6, 2, 4, 3, 1.
        <input id="questao-C" name="questao" type="radio" autocomplete="off" value="C" required="required" />
            <span class="checkmark"></span>
        <label for="questao-C"></label></div>
<div>
          <label class="container">D) 6, 5, 2, 4, 3, 1.
        <input id="questao-D" name="questao" type="radio" autocomplete="off" value="D" required="required" />
            <span class="checkmark"></span>
        <label for="questao-D"></label></div></li>
        <div>
            <label class="container">E) 3, 5, 2, 4, 6, 1.
        <input id="questao-E" name="questao" type="radio" autocomplete="off" value="E" required="required" />
            <span class="checkmark"></span>
        <label for="questao-E"></label></div></li>
        
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
