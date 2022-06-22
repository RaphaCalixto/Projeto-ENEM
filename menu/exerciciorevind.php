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

<form id="select" method="POST" action="gabrevind.php?q=1">


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
        location.href = './revind.php';
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

(Unesp) "A superioridade da indústria inglesa, em 1840, não era desafiada por qualquer futuro imaginável. E esta superioridade só teria a ganhar se as matérias-primas e os gêneros alimentícios fossem baratos. Isto não era ilusão: a nação estava tão satisfeita com o que considerava um resultado de sua política que as críticas foram quase silenciadas até a depressão da década de 80." (Joseph A. Schumpeter, "HISTÓRIA DA ANÁLISE ECONÔMICA")

Desta exposição conclui-se por que razão a Inglaterra adotou decididamente, a partir de 1840, o: <br><br>

<div style="text-align:left;justify-content:center;" align="center">

<label class="container">A) isolacionismo em sua política externa.
  <input id="questao-A" name="questao" type="radio" autocomplete="off" value="A"  required="required" />
  <span class="checkmark"></span>
  <label for="questao-A">
<br>
 </label></label>

<label class="container">B) intervencionismo estatal na economia.
 <input id="questao-B" name="questao" type="radio" autocomplete="off" value="B" required="required" />
   <span class="checkmark"></span>

<label for="questao-B">
<br>
</label></label>

<label class="container">C) capitalismo monopolista contrário à concorrência.

<input id="questao-C" name="questao" type="radio" autocomplete="off" value="C"  required="required"/>
   <span class="checkmark"></span>

<label for="questao-C">
<br>
</label></label>

<label class="container">D) agressivo militarismo nas conquistas de colônias ultramarinas.

<input id="questao-D" name="questao" type="radio" autocomplete="off" value="D"  required="required" />
   <span class="checkmark"></span>

<label for="questao-D">
<br>
</label></label>
<label class="container">E) livre-comércio no relacionamento entre as nações.


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
(Uel) Um fator que contribuiu decisivamente para o processo de industrialização na Inglaterra do século XVIII foi:<br><Br>

  <form id="select" method="post" action="gabrevind.php?q=2">
            <br>
        <div>
          <label class="container">A) a acumulação de capital resultante da exploração colonial praticada pela Inglaterra através do comércio.
  <input id="questao-A" name="questao" type="radio" autocomplete="off" value="A" required="required" />
     <span class="checkmark"></span>
        <label for="questao-A"> </label></div></label>
<div>
          <label class="container">B) a concorrência tecnológica entre ingleses e americanos, que estimulou o desenvolvimento econômico.
        <input id="questao-B" name="questao" type="radio" autocomplete="off" value="B" required="required" />
        <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) a expulsão das tropas napoleônicas do território inglês, que uniu os interesses nacionais em torno de um esforço de desenvolvimento.
        <input id="questao-C" name="questao" type="radio" autocomplete="off" value="C" required="required" />
        <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
          <label class="container">D) o movimento ludista na Inglaterra com a destruição das máquinas consideradas obsoletas, ao incentivar a invenção de novas máquinas.
        <input id="questao-D" name="questao" type="radio" autocomplete="off" value="D" required="required" />
        <span class="checkmark"></span>
        <label for="questao-D"></label></div></label>
        <div>
            <label class="container">E) a abertura de mercados na Alemanha e na França para a Inglaterra, por meio de um acordo comercial conhecido por Pacto de Berlim.
        <input id="questao-E" name="questao" type="radio" autocomplete="off" value="E" required="required" />
                <span class="checkmark"></span>
        <label for="questao-E"></label></div></label>
        
        <br>
        <input  name="gabarito" type="hidden" value="A" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
    

    </form> </div>

    <br><Br>
<div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
Leia o texto e, a seguir, aponte a alternativa que se adeque à sua interpretação:
<Br>
“A máquina a vapor, tornando possível o uso da energia em todos os artifícios mecânicos, em quantidades maiores do que qualquer outra coisa conseguiria realizar no passado, foi a chave para tudo o que ocorreu em seguida, sob o nome de Revolução Industrial. A face do mundo mudou mais drasticamente (e mais rapidamente) do que em qualquer outra época desde a invenção da agricultura, cerca de 10 mil anos antes.” (ASIMOV, I. Cronologia das Ciências e das Descobertas. Rio de Janeiro: Civilização Brasileira, 1993, p. 395).
<br><Br>


  <form id="select" method="post" action="gabrevind.php?q=3">
          <br>  
        <div>
          <label class="container">A) O autor acentua o caráter prejudicial da máquina a vapor para a agricultura.
  <input id="questao-A" name="questao" type="radio"  autocomplete="off" value="A" required="required" />
  <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
           <label class="container">B) Segundo o texto, a máquia a vapor foi decisiva para o advento da Revolução Industrial, já que este foi o primeiro dispositivo tecnológico que realizou uma transformação profunda no âmbito da produção.
        <input id="questao-B" name="questao" type="radio"  autocomplete="off" value="B" required="required" />
          <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) O autor aponta o caráter negativo da mudança drástica e rápida que a Revolução Industrial provocou no mundo contemporâneo.
        <input id="questao-C" name="questao" type="radio"  autocomplete="off" value="C" required="required" />
                  <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
          <label class="container">D) Segundo o texto, a máquina a vapor era eficiente porque funcionava à base de eletricidade.

        <input id="questao-D" name="questao" type="radio"  autocomplete="off" value="D" required="required" />
                          <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>
            <label class="container">E) O texto indica que a agricultura, durante 10.000 anos, impediu que a indústria se desenvolvesse.

        <input id="questao-E" name="questao" type="radio"  autocomplete="off" value="E" required="required" />
        <span class="checkmark"></span>
        <label for="questao-E"></label></div></li>
        
        <br>
        <input  name="gabarito" type="hidden" value="B" />
      <button class="button button2" name="Responder" type="submit"  autocomplete="off" value="Responder" required />Responder</button>
      
  
    </form> </div>

    
<Br><br>

    <div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
  Leia o texto a seguir:

“O fato marcante da Revolução Industrial foi o de ela ter iniciado uma era de produção em massa para atender às necessidades das massas. Os assalariados já não são mais pessoas trabalhando exaustivamente para proporcionar o bem-estar de outras pessoas; são eles mesmos os maiores consumidores dos produtos que as fábricas produzem. A grande empresa depende do consumo de massa. Em um livre mercado, não há uma só grande empresa que não atenda aos desejos das massas. A própria essência da atividade empresarial capitalista é a de prover para o homem comum. Na qualidade de consumidor, o homem comum é o soberano que, ao comprar ou ao se abster de comprar, decide os rumos da atividade empresarial.” (MISES, L. Von. Fatos e mitos sobre a Revolução Industrial.)

De acordo com o economista austríaco, L. Von Mises, a importância das massas de trabalhadores assalariados para a consolidação da Revolução Industrial consiste:

  <br>



  <form id="select" method="post" action="gabrevind.php?q=5">
            <br>
        <div>
          <label class="container">A) no fato de terem sido explorados pelos industriais capitalistas que compravam sua força de trabalho e não pagavam o que era proporcional a essa força.
  <input id="questao-A" name="questao" type="radio" autocomplete="off" value="A" required="required" />
  <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
          <label class="container">B) no caráter defensivo dos sindicatos que essas massas de trabalhadores formaram nesta época.
        <input id="questao-B" name="questao" type="radio" autocomplete="off" value="B" required="required" />
          <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
        <label class="container">C) no caráter inexpressivo do consumo dos trabalhadores, já que a indústria não precisava, na Inglaterra do século XIX, de seu mercado consumidor interno.
        <input id="questao-C" name="questao" type="radio" autocomplete="off" value="C" required="required" />
          <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
           <label class="container">D) no fato de ser a própria massa de trabalhadores, que também era o contingente populacional dos grandes centros urbanos, a massa de consumidores que demandavam os produtos industrializados.
        <input id="questao-D" name="questao" type="radio" autocomplete="off" value="D" required="required" />
        <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>
          <label class="container">E) no fato de o homem comum, apontado no texto, ter ser tornado soberano e instituído um regime político anarquista após a Revolução Industrial.

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
