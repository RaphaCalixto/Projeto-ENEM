7<!DOCTYPE html>
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

<form id="select" method="POST" action="gabregimeadm.php?q=1">


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
        location.href = './regime.php';
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

(FUVEST-SP/2002) “Na presidência da República, em regime que atribui ampla autoridade e poder pessoal ao chefe de governo, o Sr. João Goulart constituir-se-á, sem dúvida alguma, no mais evidente incentivo a todos aqueles que desejam ver o país mergulhado no caos, na anarquia, na luta civil.” (Manifesto dos ministros militares à Nação, em 29 de agosto de 1961).
<br><br>
<div style="text-align:left;justify-content:center;" align="center">

<label class="container">A) estavam excluídos de qualquer poder no regime de democracia presidencial.
  <input id="questao-A" name="questao" type="radio" value="A"  required="required" />
  <span class="checkmark"></span>
  <label for="questao-A">
<br>
 </label></label>

<label class="container">B) eram favoráveis à manutenção do regime democrático e parlamentarista.

 <input id="questao-B" name="questao" type="radio" value="B" required="required" />
   <span class="checkmark"></span>

<label for="questao-B">
<br>
</label></label>

<label class="container">C) justificavam uma possibilidade de intervenção armada em regime democrático.

<input id="questao-C" name="questao" type="radio" value="C"  required="required"/>
   <span class="checkmark"></span>

<label for="questao-C">
<br>
</label></label>

<label class="container">D) apoiavam a interferência externa nas questões de política interna do país.

<input id="questao-D" name="questao" type="radio" value="D"  required="required" />
   <span class="checkmark"></span>

<label for="questao-D">
<br>
</label></label>
<label class="container">E) eram contrários ao regime socialista implantado pelo presidente em exercício.


<input id="questao-E" name="questao" type="radio" value="E"  required="required" />
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
(Mack-SP/2004) A “Marcha da Família com Deus pela Liberdade”, em março de 1964, na cidade de São Paulo, foi:<br>

  <form id="select" method="post" action="gabregimeadm.php?q=2">
            <br>
        <div>
          <label class="container">A) uma demonstração de forças conservadoras de direita contra o que chamavam de esquerdismo e comunismo do governo João Goulart.
  <input id="questao-A" name="questao" type="radio" value="A" required="required" />
     <span class="checkmark"></span>
        <label for="questao-A"> </label></div></label>
<div>
          <label class="container">B) uma manifestação de apoio das famílias de trabalhadores brasileiros ao governo do presidente Goulart.
        <input id="questao-B" name="questao" type="radio" value="B" required="required" />
        <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) uma resposta das massas populares, apoiando as Reformas de Base, após o Comício na Central do Brasil (RJ/março de 1964).
        <input id="questao-C" name="questao" type="radio" value="C" required="required" />
        <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
          <label class="container">D) uma demonstração de repúdio das classes trabalhadoras a uma possível intervenção militar, com apoio norte-americano, ao governo de Goulart.
        <input id="questao-D" name="questao" type="radio" value="D" required="required" />
        <span class="checkmark"></span>
        <label for="questao-D"></label></div></label>
        <div>
            <label class="container">E) uma manifestação, de setores conservadores da sociedade brasileira, de revolta contra a tentativa de se derrubar o governo constitucional.
        <input id="questao-E" name="questao" type="radio" value="E" required="required" />
                <span class="checkmark"></span>
        <label for="questao-E"></label></div></label>
        
        <br>
        <input  name="gabarito" type="hidden" value="A" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
    

    </form> </div>

    <br><Br>
<div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
Em relação ao Golpe Militar de 1964 no Brasil, pode-se dizer:  <br>
I- Foi fruto de uma conspiração civil-militar alarmada com os rumos nacionalistas do governo João Goulart.  <br>

II- Foi a forma encontrada pelos comandos militares para garantir a posse do novo presidente.  <br>

III- Representou a repulsa de setores da sociedade brasileira à tentativa de João Goulart de aumentar a presença do capital estrangeiro no país.  <br>

IV- Evitou a tentativa do Partido Comunista Brasileiro, de sindicatos de trabalhadores e de setores do Partido Trabalhista Brasileiro de exigir do presidente, a implementação imediata das “reformas de base”.  <br>
  <br>
Estão corretas as frases:
  <br>



  <form id="select" method="post" action="gabregimeadm.php?q=3">
          <br>  
        <div>
          <label class="container">A) III e IV.
  <input id="questao-A" name="questao" type="radio" value="A" required="required" />
  <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
           <label class="container">B) III e V
        <input id="questao-B" name="questao" type="radio" value="B" required="required" />
          <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) I, II e III.
        <input id="questao-C" name="questao" type="radio" value="C" required="required" />
                  <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
          <label class="container">D) I, IV.
        <input id="questao-D" name="questao" type="radio" value="D" required="required" />
                          <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>
            <label class="container">E) II, III e IV.
        <input id="questao-E" name="questao" type="radio" value="E" required="required" />
        <span class="checkmark"></span>
        <label for="questao-E"></label></div></li>
        
        <br>
        <input  name="gabarito" type="hidden" value="D" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
  
    </form> </div>

    <br><Br>
<div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
(Enem/2018) São Paulo, 10 de janeiro de 1979.<br>
<br>
Exmo. Sr. Presidente Ernesto Geisel.<br>
<br>
Considerando as instruções dadas por V. S. de que sejam negados os passaportes aos senhores Francisco Julião, Miguel Arraes, Leonel Brizola, Luis Prestes, Paulo Schilling, Gregório Bezerra, Márcio Moreira Alves e Paulo Freire.<br>
<br>
Considerando que, desde que nasci, me identifico plenamente com a pele, a cor dos cabelos, a cultura, o sorriso, as aspirações, a história e o sangue destes oito senhores.<br>
<br>
Considerando tudo isto, por imperativo de minha consciência, venho por meio desta devolver o passaporte que, negado a eles, me foi concedido pelos órgãos competentes de seu governo.<br>
<br>
Carta do cartunista Henrique de Souza Filho, conhecido como Henfil. In.: HENFIL. Cartas da mãe. Rio de Janeiro: Codecri, 1981 (adaptado).<br>
<br>
No referido contexto histórico, a manifestação do cartunista Henfil expressava uma crítica ao(à):
  <br>

  <form id="select" method="post" action="gabregimeadm.php?q=4">
            <br>
        <div>
          <label class="container">A) censura moral das produções culturais.
  <input id="questao-A" name="questao" type="radio" value="A" required="required" />
  <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
          <label class="container">B) limite do processo de distensão política.
        <input id="questao-B" name="questao" type="radio" value="B" required="required" />
          <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) interferência militar de países estrangeiros.
        <input id="questao-C" name="questao" type="radio" value="C" required="required" />
        <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
        <label class="container">D) representação social das agremiações partidárias.
        <input id="questao-D" name="questao" type="radio" value="D" required="required" />
        <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>
             <label class="container">E) impedimento de eleição das assembleias estaduais.
        <input id="questao-E" name="questao" type="radio" value="E" required="required" />
        <span class="checkmark"></span>
        <label for="questao-E"></label></div></li></label>
        
        <br>
        <input  name="gabarito" type="hidden" value="B" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
  
    </form> </div>
<Br><br>

    <div style="text-align:left;justify-content:center; margin-left: 20px;" align="center" >
(Enem/2016) A Operação Condor está diretamente vinculada às experiências históricas das ditaduras civil-militares que se disseminaram pelo Cone Sul entre as décadas de 1960 e 1980. Depois do Brasil (e do Paraguai de Stroessner), foi a vez da Argentina (1966), Bolívia (1966 e 1971), Uruguai e Chile (1973) e Argentina (novamente, em 1976). Em todos os casos se instalaram ditaduras civil-militares (em menor ou maior medida) com base na Doutrina de Segurança Nacional e tendo como principais características um anticomunismo militante, a identificação do inimigo interno, a imposição do papel político das Forças Armadas e a definição de fronteiras ideológicas.<Br>
<Br>
PADRÓS, E. S. et al. Ditadura de Segurança Nacional no Rio Grande do Sul (1964-1985):<Br>
<Br>
história e memória. Porto Alegre: Corag, 2009 (adaptado).<Br>
<Br>
Levando-se em conta o contexto em que foi criada, a referida operação tinha como objetivo coordenar a
  <br>



  <form id="select" method="post" action="gabregimeadm.php?q=5">
            <br>
        <div>
          <label class="container">A) modificação de limites territoriais.
  <input id="questao-A" name="questao" type="radio" value="A" required="required" />
  <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
          <label class="container">B) sobrevivência de oficiais exilados.
        <input id="questao-B" name="questao" type="radio" value="B" required="required" />
          <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
        <label class="container">C) interferência de potências mundiais.
        <input id="questao-C" name="questao" type="radio" value="C" required="required" />
          <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
           <label class="container">D) repressão de ativistas oposicionistas.
        <input id="questao-D" name="questao" type="radio" value="D" required="required" />
        <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>
          <label class="container">E) implantação de governos nacionalistas.
        <input id="questao-E" name="questao" type="radio" value="E" required="required" />
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
