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

<form id="select" method="POST" action="gabbracol.php?q=1">


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
        location.href = './bracol.php';
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

(Fuvest)

A sociedade colonial brasileira "herdou concepções clássicas e medievais de organização e hierarquia, mas acrescentou-lhe sistemas de graduação que se originaram da diferenciação das ocupações, raça, cor e condição social. (...) as distinções essenciais entre fidalgos e plebeus tenderam a nivelar-se, pois o mar de indígenas que cercava os colonizadores portugueses tornava todo europeu, de fato, um gentil-homem em potencial. A disponibilidade de índios como escravos ou trabalhadores possibilitava aos imigrantes concretizar seus sonhos de nobreza. (...) Com índios, podia desfrutar de uma vida verdadeiramente nobre. O gentio transformou-se em um substituto do campesinato, um novo estado, que permitiu uma reorganização de categorias tradicionais. Contudo, o fato de serem aborígines e, mais tarde, os africanos, diferenças étnicas, religiosa e fenotipicamente dos europeus, criou oportunidades para novas distinções e hierarquias baseadas na cultura e na cor." (STUART B. Schwartz, Segredos internos.) A partir do texto pode-se concluir que: <br><br>

<div style="text-align:left;justify-content:center;" align="center">

<label class="container">A) a diferenciação clássica e medieval entre clero, nobreza e campesinato, existente na Europa, foi transferida para o Brasil por intermédio de Portugal e se constituiu no elemento fundamental da sociedade brasileira colonial.
  <input id="questao-A" name="questao" type="radio" value="A"  autocomplete="off"  required="required" />
  <span class="checkmark"></span>
  <label for="questao-A">
<br>
 </label></label>

<label class="container">B) a presença de índios e negros na sociedade brasileira levou ao surgimento de instituições como a escravidão, completamente desconhecida da sociedade europeia nos séculos XV e XVI.
 <input id="questao-B" name="questao" type="radio" value="B" autocomplete="off" required="required" />
   <span class="checkmark"></span>

<label for="questao-B">
<br>
</label></label>

<label class="container">C) os índios do Brasil, por serem em pequena quantidade e terem sido facilmente dominados, não tiveram nenhum tipo de influência sobre a constituição da sociedade colonial.

<input id="questao-C" name="questao" type="radio" value="C" autocomplete="off"  required="required"/>
   <span class="checkmark"></span>

<label for="questao-C">
<br>
</label></label>

<label class="container">D) a diferenciação de raças, culturas e condição social entre brancos e índios, brancos e negros tendeu a diluir a distinção clássica e medieval entre fidalgos e plebeus europeus na sociedade.

<input id="questao-D" name="questao" type="radio" value="D" autocomplete="off"  required="required" />
   <span class="checkmark"></span>

<label for="questao-D">
<br>
</label></label>
<label class="container">E) a existência de uma realidade diferente no Brasil, como a escravidão em larga escala de negros, não alterou em nenhum aspecto as concepções medievais dos portugueses durante os séculos XVI e XVII. 


<input id="questao-E" name="questao" type="radio" value="E" autocomplete="off"  required="required" />
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
(Unisa-SP)

Durante a maior parte do período colonial a participação nas câmaras das vilas era uma prerrogativa dos chamados "homens bons", excluindo-se desse privilégio os outros integrantes da sociedade. A expressão "homem bom" dizia respeito a: <br><Br>

  <form id="select" method="post" action="gabbracol.php?q=2">
            <br>
        <div>
          <label class="container">A) homens que recebiam a concessão da Coroa portuguesa para explorar minas de ouro e de diamantes;
  <input id="questao-A" name="questao" type="radio" value="A" autocomplete="off" required="required" />
     <span class="checkmark"></span>
        <label for="questao-A"> </label></div></label>
<div>
          <label class="container">B) senhores de engenho e proprietários de escravos;
        <input id="questao-B" name="questao" type="radio" autocomplete="off" value="B" required="required" />
        <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) funcionários nomeados pela Coroa portuguesa para exercerem altos cargos administrativos na colônia;
        <input id="questao-C" name="questao" type="radio" autocomplete="off" value="C" required="required" />
        <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
          <label class="container">D) homens considerados de bom caráter, independentemente do cargo ou da função que exerciam na colônia.
        <input id="questao-D" name="questao" type="radio" autocomplete="off" value="D" required="required" />
        <span class="checkmark"></span>
        <label for="questao-D"></label></div></label>
        <div>
            <label class="container">E) homem que tinha como nacionalidade portuguesa, vindo de um sangue bom.
        <input id="questao-E" name="questao" type="radio" autocomplete="off" value="E" required="required" />
                <span class="checkmark"></span>
        <label for="questao-E"></label></div></label>
        
        <br>
        <input  name="gabarito" type="hidden" value="D" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
    

    </form> </div>

    <br><Br>
<div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
No Brasil colônia, a pecuária teve um papel decisivo na
<br><Br>


  <form id="select" method="post" action="gabbracol.php?q=3">
          <br>  
        <div>
          <label class="container">A) ocupação das áreas litorâneas.
  <input id="questao-A" name="questao" type="radio" value="A" autocomplete="off" required="required" />
  <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
           <label class="container">B) expulsão do assalariado do campo.
        <input id="questao-B" name="questao" type="radio" autocomplete="off" value="B" required="required" />
          <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) formação e exploração dos minifúndios.
        <input id="questao-C" name="questao" type="radio" autocomplete="off" value="C" required="required" />
                  <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
          <label class="container">D) fixação do escravo na agricultura.

        <input id="questao-D" name="questao" type="radio" autocomplete="off" value="D" required="required" />
                          <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>
            <label class="container">E) expansão para o interior.

        <input id="questao-E" name="questao" type="radio" autocomplete="off" value="E" required="required" />
        <span class="checkmark"></span>
        <label for="questao-E"></label></div></li>
        
        <br>
        <input  name="gabarito" type="hidden" value="E" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
  
    </form> </div>

    <br><Br>
<div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
   (UEL-PR) "Como não se tratava de regiões aptas para a produção de gêneros tropicais de grande valor comercial, como o açúcar ou outros, foi-se obrigado para conseguir povoadores (...) a recorrer às camadas pobres ou médias da população portuguesa e conceder grandes vantagens aos colonos que aceitavam irem-se estabelecer lá. O custo do transporte será fornecido pelo Estado, a instalação dos colonos é cercada de toda a sorte de providências destinadas a facilitar e garantir a subsistência dos povoadores; as terras a serem ocupadas são previamente demarcadas em pequenas parcelas, (...) fornecem-se gratuitamente ou a longo prazo auxílios vários (instrumentos de trabalho, sementes, animais, etc)".

(Prado Júnior, C. História econômica do Brasil. 27 ed. S. Paulo: Brasiliense, 1982. p. 95-6)

Com base no texto, é possível afirmar que o autor se refere:

  <br>

  <form id="select" method="post" action="gabbracol.php?q=4">
            <br>
        <div>
          <label class="container">A) à colonização do sertão nordestino através da pecuária.
  <input id="questao-A" name="questao" type="radio" value="A" autocomplete="off" required="required" />
  <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
          <label class="container">B) à ocupação da Amazônia através das drogas do sertão.
        <input id="questao-B" name="questao" type="radio" autocomplete="off" value="B" required="required" />
          <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) à expansão para o interior paulista pelas entradas e bandeiras.
        <input id="questao-C" name="questao" type="radio" autocomplete="off" value="C" required="required" />
        <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
        <label class="container">D) à colonização do Sul através da pecuária.
        <input id="questao-D" name="questao" type="radio" autocomplete="off" value="D" required="required" />
        <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>
             <label class="container">E) ao povoamento das Capitanias Hereditárias.
        <input id="questao-E" name="questao" type="radio" autocomplete="off" value="E" required="required" />
        <span class="checkmark"></span>
        <label for="questao-E"></label></div></li></label>
        
        <br>
        <input  name="gabarito" type="hidden" value="D" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
  
    </form> </div>
<Br><br>

    <div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
  (Fuvest-SP) Os fatores que levaram ao desenvolvimento e à ampliação das atividades econômicas periféricas da colônia, tais como, a pecuária, o tabaco, as drogas do sertão e mesmo o pau-brasil, em detrimento da lavoura de cana-de-açúcar, após a expulsão dos holandeses, em 1654, foram:

  <br>



  <form id="select" method="post" action="gabbracol.php?q=5">
            <br>
        <div>
          <label class="container">A) a criação de um mercado interno fomentado pelo descobrimento das minas de ouro no final do século XVI e sua ampliação para as cidades litorâneas da colônia.
  <input id="questao-A" name="questao" type="radio" autocomplete="off" value="A" required="required" />
  <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
          <label class="container">B) a inversão significativa da utilização da mão de obra escrava pela mão de obra livre na região das minas, criando, assim, um mercado consumidor expressivo.
        <input id="questao-B" name="questao" type="radio" autocomplete="off" value="B" required="required" />
          <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
        <label class="container">C) estagnação econômica do Centro-Oeste, em função do renascimento agrícola no Nordeste, ao longo do século XVII.
        <input id="questao-C" name="questao" type="radio" autocomplete="off" value="C" required="required" />
          <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
           <label class="container">D) o acompanhamento destas atividades, primeiro como complemento da atividade açucareira e, posteriormente, como núcleos abastecedores da atividade mineradora e seus desdobramentos.
        <input id="questao-D" name="questao" type="radio" autocomplete="off" value="D" required="required" />
        <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>
          <label class="container">E)todas as alternativas anteriores estão corretas.

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
