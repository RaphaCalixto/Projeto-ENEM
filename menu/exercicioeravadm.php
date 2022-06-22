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
    <link rel="stylesheet" href="./redire.css">
    <link rel="stylesheet" href="../testemenu/css/styles.css">
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

<form id="select" method="POST" action="gaberavadm.php?q=1">


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
        location.href = './erav.php';
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

(PUC-RS) “Façamos a revolução antes que o povo a faça.” A frase, atribuída ao governador de Minas Gerais, Antônio Carlos de Andrada, deixa entrever a ideologia política da Revolução de 1930, promovida pelos interesses <br><br>

<div style="text-align:left;justify-content:center;" align="center">

<label class="container">A) da burguesia cafeicultora de São Paulo, com vistas à valorização do café.
  <input id="questao-A" name="questao" type="radio" autocomplete="off" value="A"  required="required" />
  <span class="checkmark"></span>
  <label for="questao-A">
<br>
 </label></label>

<label class="container">B) do operariado, com o objetivo de aprofundar a industrialização.
 <input id="questao-B" name="questao" type="radio" autocomplete="off" value="B" required="required" />
   <span class="checkmark"></span>

<label for="questao-B">
<br>
</label></label>

<label class="container">C) dos partidos de direita fascistas, no intuito de estabelecer um Estado forte.

<input id="questao-C" name="questao" type="radio" autocomplete="off" value="C"  required="required"/>
   <span class="checkmark"></span>

<label for="questao-C">
<br>
</label></label>

<label class="container">D) das oligarquias dissidentes, aliadas ao tenentismo pela reforma do Estado.

<input id="questao-D" name="questao" type="radio" autocomplete="off" value="D"  required="required" />
   <span class="checkmark"></span>

<label for="questao-D">
<br>
</label></label>
<label class="container">E) da burguesia industrial, na busca de uma política de livre iniciativa.


<input id="questao-E" name="questao" type="radio" autocomplete="off" value="E"  required="required" />
   <span class="checkmark"></span>

<label for="questao-E">
<br>
</label></label>
<input  name="gabarito" type="hidden" value="D" />
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
 (PUC-RS) Em março de 1931, o Decreto nº 19.770 criava, no Brasil, o Ministério do Trabalho, Indústria e Comércio. Considerando-se o contexto histórico, pode-se afirmar que esse ato do Poder Executivo tinha como um dos seus objetivos <br><Br>

  <form id="select" method="post" action="gaberavadm.php?q=2">
            <br>
        <div>
          <label class="container">A) promover a expansão do setor primário.
  <input id="questao-A" name="questao" type="radio" autocomplete="off" value="A" required="required" />
     <span class="checkmark"></span>
        <label for="questao-A"> </label></div></label>
<div>
          <label class="container">B) desregulamentar o sistema de contratação e de impostos.
        <input id="questao-B" name="questao" type="radio" autocomplete="off" value="B" required="required" />
        <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) concentrar a renda nacional nas camadas médias urbanas.
        <input id="questao-C" name="questao" type="radio" autocomplete="off" value="C" required="required" />
        <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
          <label class="container">D) acabar com a organização autônoma do movimento operário.
        <input id="questao-D" name="questao" type="radio" autocomplete="off" value="D" required="required" />
        <span class="checkmark"></span>
        <label for="questao-D"></label></div></label>
        <div>
            <label class="container">E) intervir nas relações de trabalho no campo.
        <input id="questao-E" name="questao" type="radio" autocomplete="off" value="E" required="required" />
                <span class="checkmark"></span>
        <label for="questao-E"></label></div></label>
        
        <br>
        <input  name="gabarito" type="hidden" value="D" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
    

    </form> </div>

    <br><Br>
<div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
  (Enem/2017) Nos primeiros anos do governo Vargas, as organizações operárias sob controle das correntes de esquerda tentaram se opor ao seu enquadramento pelo Estado. Mas a tentativa fracassou. Além do governo, a própria base dessas organizações pressionou pela legalização. Vários benefícios, como as férias e a possibilidade de postular direitos perante às Juntas de Conciliação e Julgamento, dependiam da condição de ser membro de sindicato reconhecido pelo governo.<br>
<br>
FAUSTO, B. História concisa do Brasil. São Paulo: Edusp; Imprensa Oficial do Estado, 2002 (adaptado).<br>
<br>
No contexto histórico retratado pelo texto, a relação entre governo e movimento sindical foi caracterizada
  <br>



  <form id="select" method="post" action="gaberavadm.php?q=3">
          <br>  
        <div>
          <label class="container">A) pelo reconhecimento de diferentes ideologias políticas.
  <input id="questao-A" name="questao" type="radio"  autocomplete="off" value="A" required="required" />
  <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
           <label class="container">B) por um diálogo democraticamente constituído.
        <input id="questao-B" name="questao" type="radio" autocomplete="off" value="B" required="required" />
          <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) pelas benesses sociais do getulismo.
        <input id="questao-C" name="questao" type="radio" autocomplete="off" value="C" required="required" />
                  <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
          <label class="container">D) pela vinculação de direitos trabalhistas à tutela do Estado
        <input id="questao-D" name="questao" type="radio" autocomplete="off" value="D" required="required" />
                          <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>
            <label class="container">E) por uma legislação construída consensualmente..

        <input id="questao-E" name="questao" type="radio" autocomplete="off" value="E" required="required" />
        <span class="checkmark"></span>
        <label for="questao-E"></label></div></li>
        
        <br>
        <input  name="gabarito" type="hidden" value="D" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
  
    </form> </div>

    <br><Br>
<div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
   (Enem/2017) Estão aí, como se sabe, dois candidatos à presidência, os senhores Eduardo Gomes e Eurico Dutra, e um terceiro, o senhor Getúlio Vargas, que deve ser candidato de algum grupo político oculto, mas é também o candidato popular. Porque há dois “queremos”: o “queremos” dos que querem ver se continuam nas posições e o “queremos” popular… Afinal, o que é que o senhor Getúlio Vargas é? É fascista? É comunista? É ateu? É cristão? Quer sair? Quer ficar? O povo, entretanto, parece que gosta dele por isso mesmo, porque ele é “à moda da casa”.<br>
<br>
A Democracia. 16 set. 1945. apud GOMES. A.C.; D’ARAÚJO, M. C. Getulismo e trabalhismo. São Paulo: Ática. 1989.<br>
<br>
O movimento político mencionado no texto caracterizou-se por

  <br><br>

  <form id="select" method="post" action="gaberavadm.php?q=4">
            <br>
        <div>
          <label class="container">A) demandar a confirmação dos direitos trabalhistas.
  <input id="questao-A" name="questao" type="radio" autocomplete="off" value="A" required="required" />
  <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
          <label class="container">B) apoiar a permanência da ditadura estadonovista.
        <input id="questao-B" name="questao" type="radio" autocomplete="off" value="B" required="required" />
          <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) resgatar a representatividade dos sindicatos sob controle social.
        <input id="questao-C" name="questao" type="radio" autocomplete="off" value="C" required="required" />
        <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
        <label class="container">D) reivindicar a transição constitucional sob influência do governante.
        <input id="questao-D" name="questao" type="radio" autocomplete="off" value="D" required="required" />
        <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>
             <label class="container">E) reclamar a participação das agremiações partidárias.
        <input id="questao-E" name="questao" type="radio" autocomplete="off" value="E" required="required" />
        <span class="checkmark"></span>
        <label for="questao-E"></label></div></li></label>
        
        <br>
        <input  name="gabarito" type="hidden" value="D" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
  
    </form> </div>
<Br><br>

    <div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
  (PUC/RS) “Façamos a revolução antes que o povo a faça.” A frase, atribuída ao governador de Minas Gerais, Antônio Carlos de Andrada, deixa entrever a ideologia política da Revolução de 1930, promovida pelos interesses

  <br><Br>



  <form id="select" method="post" action="gaberavadm.php?q=5">
            <br>
        <div>
          <label class="container">A) da burguesia cafeicultora de São Paulo, com vistas à valorização do café.
  <input id="questao-A" name="questao" type="radio" autocomplete="off" value="A" required="required" />
  <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
          <label class="container">B) do operariado, com o objetivo de aprofundar a industrialização.
        <input id="questao-B" name="questao" type="radio" autocomplete="off" value="B" required="required" />
          <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
        <label class="container">C) dos partidos de direita fascistas, no intuito de estabelecer um Estado forte.
        <input id="questao-C" name="questao" type="radio" autocomplete="off" value="C" required="required" />
          <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
           <label class="container">D) das oligarquias dissidentes, aliadas ao tenentismo pela reforma do Estado.
        <input id="questao-D" name="questao" type="radio" autocomplete="off" value="D" required="required" />
        <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>
          <label class="container">E) da burguesia industrial, na busca de uma política de livre iniciativa.
        <input id="questao-E" name="questao" type="radio" autocomplete="off" value="E" required="required" />
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
