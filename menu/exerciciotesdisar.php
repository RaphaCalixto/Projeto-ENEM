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

<form id="select" method="POST" action="gabtesdisar.php?q=1">


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
        location.href = './tesdisar.php';
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

        (MACKENZIE) "É comum, no Brasil, a prática de tortura contra presos. A tortura é imoral e constitui crime. <br>
<br>
Embora não exista ainda nas leis penais a definição do 'crime de tortura', torturar um preso ou detido é abuso de autoridade somado à agressão e lesões corporais, podendo qualificar-se como homicídio, quando a vítima da tortura vem a morrer. Como tem sido denunciado com grande frequência, policiais incompetentes, incapazes de realizar uma investigação séria, usam a tortura para obrigar o preso a confessar um crime. Além de ser um procedimento covarde, que ofende a dignidade humana, essa prática é legalmente condenada. A confissão obtida mediante tortura não tem valor legal e o torturador comete crime, ficando sujeito a severas punições." (Dalmo de Abreu Dallan)<br>
<br>
Pode-se afirmar que esse trecho é uma dissertação:<br>
<div style="text-align:left;justify-content:center;" align="center">

<label class="container">A) que apresenta, em todos os períodos, personagens individualizadas, movimentando-se num espaço e num tempo terríveis, denunciados pelo narrador, bem como a predominância de orações subordinadas, que expressam sequência dos acontecimentos;
  <input id="questao-A" name="questao" type="radio" value="A" autocomplete="off"  required="required" />
  <span class="checkmark"></span>
  <label for="questao-A">
<br>
 </label></label>

<label class="container">B) que apresenta, em todos os períodos, substantivos abstratos, que representam as ideias discutidas, bem como a predominância de orações subordinadas, que expressam o encadeamento lógico da denúncia;

 <input id="questao-B" name="questao" type="radio" value="B" autocomplete="off" required="required" />
   <span class="checkmark"></span>

<label for="questao-B">
<br>
</label></label>

<label class="container">C) que apresenta uma organização temporal em função do pretérito, jogando os acontecimentos 
denunciados para longe do momento em que fala, bem como a predominância de orações subordinadas, que expressam o prolongamento das ideias repudiadas;

<input id="questao-C" name="questao" type="radio" value="C" autocomplete="off"  required="required"/>
   <span class="checkmark"></span>

<label for="questao-C">
<br>
</label></label>

<label class="container">D) que consegue fazer uma denúncia contundente, usando, entre outros recursos, a ênfase, por meio da repetição de um substantivo abstrato em todos os períodos, bem como a predominância de orações coordenadas sindéticas, que expressam o prolongamento das ideias repudiadas;

<input id="questao-D" name="questao" type="radio" value="D" autocomplete="off"  required="required" />
   <span class="checkmark"></span>

<label for="questao-D">
<br>
</label></label>
<label class="container">E) que consegue construir um protesto persuasivo com uma linguagem conotativa, construída sobre 
metáforas e metonímias esparsas, bem como com a predominância de orações subordinadas, próprias de uma linguagem formal, natural para esse contexto. 


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
 Sobre as características do texto dissertativo, podemos afirmar que:
<Br>

  <form id="select" method="post" action="gabtesdisar.php?q=2">
            <br>
        <div>
          <label class="container">A) Suas principais características são contar uma história ou narrar algum acontecimento, verídico ou não.
  <input id="questao-A" name="questao" type="radio" value="A" autocomplete="off" required="required" />
     <span class="checkmark"></span>
        <label for="questao-A"> </label></div></label>
<div>
          <label class="container">B) Apresentar informações sobre um objeto ou fato específico, enumerando suas características através de uma linguagem clara e objetiva.
        <input id="questao-B" name="questao" type="radio" value="B" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) Têm por finalidade instruir o leitor/interlocutor, por isso o predomínio dos verbos no infinitivo. 
        <input id="questao-C" name="questao" type="radio" value="C" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
          <label class="container">D) Texto da opinião, no qual as ideias são desenvolvidas com a intenção de convencer o leitor.
        <input id="questao-D" name="questao" type="radio" value="D" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-D"></label></div></label>
        <div>
            <label class="container">E) Tem como principal característica o uso do modo imperativo nas palavras.
        <input id="questao-E" name="questao" type="radio" value="E" autocomplete="off" required="required" />
                <span class="checkmark"></span>
        <label for="questao-E"></label></div></label>
        
        <br>
        <input  name="gabarito" type="hidden" value="D" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
    

    </form> </div>

    <br><Br>
<div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
  Classifique os fragmentos a seguir de acordo com o tipo textual que representam:
<br>
I. “Viajou meu amigo Pedro. Fui levá-lo ao Galeão, onde esperamos três horas o seu quadrimotor. Durante esse tempo, não faltou assunto para nos entretermos, embora não falássemos da vã e numerosa matéria atual. Sempre tivemos muito assunto, e não deixamos de explorá-lo a fundo. Embora Pedro seja extremamente parco de palavras, e, a bem dizer, não se digne de pronunciar nenhuma. Quando muito, emite sílabas; o mais é conversa de gestos e expressões pelos quais se faz entender admiravelmente. É o seu sistema. […]”. (No aeroporto – Carlos Drummond de Andrade)<br>
<br>
II. “Peneire a farinha em um bowl e faça um buraco no meio. Junte os ovos, o leite e a manteiga e misture. Se necessário, peneire a mistura. Deixe descansar na geladeira por pelo menos ½ hora (ideal 1 hora). Em uma frigideira antiaderente, derreta um pouco de manteiga (o suficiente para cobrir o fundo da panela) em fogo médio, escorra o excesso de manteiga. [...]”.<br>
<br>
III. “[...] Se o fenômeno cultural do futebol tem inegável dimensão política, é crucial distinguir as esferas. Do contrário, num contexto de efervescência social, o inocente gesto de apoiar a seleção, nos estádios ou fora deles, acabaria sujeito a reprimendas. Nada mais infeliz do que censurar a felicidade alheia. É de resto um despropósito torcer contra o Brasil. Os únicos que têm a ganhar com nossa derrota são os adversários, pois aos brasileiros restará apenas a tristeza. [...]”.<br>
<br>
IV. Eu não tinha este rosto de hoje, <br>
<br>
assim calmo, assim triste, assim magro, <br>
<br>
nem estes olhos tão vazios,<br>
<br>
 nem o lábio amargo.<br>
<br>
Eu não tinha estas mãos sem força, <br>
<br>
tão paradas e frias e mortas; <br>
<br>
eu não tinha este coração que nem se mostra. <br>
<br>
Eu não dei por esta mudança, <br>
<br>
tão simples, tão certa, tão fácil: <br>
<br>
Em que espelho ficou perdida <br>
<br>
a minha face?<br>
<br>
(Retrato – Cecília Meireles)<br>
<br>
V. ”[...] Ainda segundo a Prefeitura, 40% dos ingressos vendidos para os jogos de São Paulo das primeira e segunda fases do mundial foram vendidos para estrangeiros, 8% para turistas brasileiros e 52% para paulistanos. Para a abertura, 22% das entradas foram vendidas para turistas, sendo que 9,9% para croatas, adversários do Brasil no jogo desta quinta-feira (12). [...]”.<br>
  <br>




  <form id="select" method="post" action="gabtesdisar.php?q=3">
          <br>  
        <div>
          <label class="container">A) expositivo – descritivo – narrativo – injuntivo – dissertativo-argumentativo
  <input id="questao-A" name="questao" type="radio" value="A" autocomplete="off" required="required" />
  <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
           <label class="container">B) injuntivo – expositivo – narrativo – dissertativo-argumentativo – descritivo
        <input id="questao-B" name="questao" type="radio" value="B" autocomplete="off" required="required" />
          <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) narrativo – injuntivo – dissertativo-argumentativo – descritivo – expositivo
        <input id="questao-C" name="questao" type="radio" value="C" autocomplete="off" required="required" />
                  <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
          <label class="container">D) narrativo – expositivo – dissertativo-argumentativo – injuntivo – descritivo
        <input id="questao-D" name="questao" type="radio" value="D" autocomplete="off" required="required" />
                          <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>
            <label class="container">E) expositivo –  narrativo – injutivo – descritivo – dissertativo-argumentativo
        <input id="questao-E" name="questao" type="radio" value="E" autocomplete="off" required="required" />
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
