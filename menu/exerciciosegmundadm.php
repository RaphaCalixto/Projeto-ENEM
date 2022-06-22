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

<form id="select" method="POST" action="gabsegmundadm.php?q=1">


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
        location.href = './segmund.php';
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

        <div style="text-align:justify;justify-content:center; margin-left: 20px; margin-right: 20px; " align="center" >

(Fundação Lusíadas – SP) Realizar o “Anchluss” era um velho sonho dos nazistas. E isso começou a ser conseguido por Hitler em março de 1938. A expressão entre aspas e a data são suficientes para elucidar o sonho nazista de: <br><br>

<div style="text-align:justify;justify-content:center;" align="center">

<label class="container">A) ocupação da região do Reno, desmilitarizada pelo Tratado de Versalhes.
  <input id="questao-A" name="questao" type="radio" value="A" autocomplete="off"  required="required" />
  <span class="checkmark"></span>
  <label for="questao-A">
<br>
 </label></label>

<label class="container">B) anexação do corredor polonês, restabelecendo a relação com a Prússia.
 <input id="questao-B" name="questao" type="radio" value="B" autocomplete="off" required="required" />
   <span class="checkmark"></span>

<label for="questao-B">
<br>
</label></label>

<label class="container">C) repúdio total às imposições do Tratado de Versalhes.

<input id="questao-C" name="questao" type="radio" value="C" autocomplete="off"  required="required"/>
   <span class="checkmark"></span>

<label for="questao-C">
<br>
</label></label>

<label class="container">D) ascensão de Hitler ao poder.

<input id="questao-D" name="questao" type="radio" value="D" autocomplete="off"  required="required" />
   <span class="checkmark"></span>

<label for="questao-D">
<br>
</label></label>
<label class="container">E) marchar sobre a Áustria, a sua anexação e a concretização da ideia do pangermanismo (reunificação das etnias alemãs).


<input id="questao-E" name="questao" type="radio" value="E" autocomplete="off"  required="required" />
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
<div style="text-align:justify;justify-content:center; margin-left: 20px; margin-right: 20px;" align="center" >
(Fac. Med. Ribeirão Preto-SP) A Segunda Grande Guerra (1939-1945), a partir de 7 de dezembro de 1941, adquire um caráter mundial quando os:<br><Br>

  <form id="select" method="post" action="gabsegmundadm.php?q=2">
            <br>
        <div>
          <label class="container">A) russos tomam a iniciativa de anexar o território dos Estados bálticos.
  <input id="questao-A" name="questao" type="radio" value="A" autocomplete="off" required="required" />
     <span class="checkmark"></span>
        <label for="questao-A"> </label></div></label>
<div>
          <label class="container">B) alemães invadem a região mediterrânica da Ásia.
        <input id="questao-B" name="questao" type="radio" value="B" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) japoneses atacam a base americana de Pearl Habor.
        <input id="questao-C" name="questao" type="radio" value="C" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
          <label class="container">D) franceses, por determinação de Petain, ocupam o sudeste da Ásia.
        <input id="questao-D" name="questao" type="radio" value="D" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-D"></label></div></label>
        <div>
            <label class="container">E) chineses cedem a maior parte do seu território às tropas do Eixo.
        <input id="questao-E" name="questao" type="radio" value="E" autocomplete="off" required="required" />
                <span class="checkmark"></span>
        <label for="questao-E"></label></div></label>
        
        <br>
        <input  name="gabarito" type="hidden" value="C" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
    

    </form> </div>

    <br><Br>
<div style="text-align:justify;justify-content:center; margin-left: 20px; margin-right: 20px;" align="center" >
A II Guerra Mundial foi o maior conflito armado da história da humanidade, caracterizada pelo desenvolvimento da indústria bélica, ao ponto de se produzir a bomba atômica e toda a mortandade decorrente. Sobre o conflito, é incorreto afirmar que:
<br><Br>


  <form id="select" method="post" action="gabsegmundadm.php?q=3">
          <br>  
        <div>
          <label class="container">A) Os Estados Unidos entraram na guerra após o ataque japonês a Pearl Habor.
  <input id="questao-A" name="questao" type="radio" value="A" autocomplete="off" required="required" />
  <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
           <label class="container">B) O Eixo era formado pela Alemanha, Itália e Japão.
        <input id="questao-B" name="questao" type="radio" value="B" autocomplete="off" required="required" />
          <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) A guerra iniciou-se após a invasão da Alemanha no território soviético.
        <input id="questao-C" name="questao" type="radio" value="C" autocomplete="off" required="required" />
                  <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
          <label class="container">D) O evento final da II Guerra Mundial foram as bombas atômicas de Hiroshima e Nagasaki.

        <input id="questao-D" name="questao" type="radio" value="D" autocomplete="off" required="required" />
                          <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>
            <label class="container">E) Em 1940, os alemães conseguiram ocupar Paris.

        <input id="questao-E" name="questao" type="radio" value="E" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-E"></label></div></li>
        
        <br>
        <input  name="gabarito" type="hidden" value="C" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
  
    </form> </div>

    
<Br><br>

    <div style="text-align:justify;justify-content:center; margin-left: 20px; margin-right: 20px;" align="center" >
  O rompimento pelos nazistas do Pacto Germano-Soviético firmado entre a Alemanha e a União das Repúblicas Socialistas Soviéticas (URSS), no ano de 1939, fez com que a União Soviética entrasse na Segunda Guerra em 1943. O que foi o Pacto Germano-Soviético?

  <br>



  <form id="select" method="post" action="gabsegmundadm.php?q=5">
            <br>
        <div>
          <label class="container">A) Política de acordos efetivada por Hitler e Churchill.
  <input id="questao-A" name="questao" type="radio" value="A" autocomplete="off" required="required" />
  <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
          <label class="container">B) Efetivação do Pacto anti-Komintern entre Alemanha, URSS e Japão.
        <input id="questao-B" name="questao" type="radio" value="B" autocomplete="off" required="required" />
          <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
        <label class="container">C) Política de acordos entre Hitler e Stálin de não agressão e neutralidade entre Alemanha e União Soviética por dez anos.
        <input id="questao-C" name="questao" type="radio" value="C" autocomplete="off" required="required" />
          <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
           <label class="container">D) Pacto que assegurava à Alemanha o direito de incorporar territórios poloneses com a permissão da França e da Inglaterra.
        <input id="questao-D" name="questao" type="radio" value="D" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>
          <label class="container">E) Política de não agressão entre Alemanha, Inglaterra, Japão e França.

        <input id="questao-E" name="questao" type="radio" value="E" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-E"></label></div></li></label>
        
        <br>
        <input  name="gabarito" type="hidden" value="C" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
  
    </form> </div>

<Br><br>

    <div style="text-align:justify;justify-content:center; margin-left: 20px; margin-right: 20px;" align="center" >
  Os Estados Unidos entraram fundamentalmente na Segunda Guerra Mundial no ano de 1941. Quais foram os principais fatores que causaram a entrada dos Estados Unidos na guerra?

  <br>



  <form id="select" method="post" action="gabsegmundadm.php?q=5">
            <br>
        <div>
          <label class="container">A) A ocupação nazista da Rússia em 1941.
  <input id="questao-A" name="questao" type="radio" value="A" autocomplete="off" required="required" />
  <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
          <label class="container">B) O confronto dos Estados Unidos com a marinha japonesa na Batalha de Midway no ano de 1942.
        <input id="questao-B" name="questao" type="radio" value="B" autocomplete="off" required="required" />
          <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
        <label class="container">C) A incorporação dos territórios poloneses pela Alemanha perdidos pelos alemães durante o Tratado de Versalhes em 1919.
        <input id="questao-C" name="questao" type="radio" value="C" autocomplete="off" required="required" />
          <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
           <label class="container">D) A derrota russa pelos alemães no ano de 1942 na Batalha de Stalingrado.
        <input id="questao-D" name="questao" type="radio" value="D" autocomplete="off" required="required" />
        <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>
          <label class="container">E) Os acordos de solidariedade com a Inglaterra na chamada Carta do Atlântico e os ataques japoneses à base de Pearl Harbor.



        <input id="questao-E" name="questao" type="radio" value="E" autocomplete="off" required="required" />
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
