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
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="estrutura/estrutura.css" />
    <link rel="stylesheet" type="text/css" href="../rodape/rodape.css" />
                    <link rel="stylesheet" type="text/css" href="./botaoconteudos.css" />
     <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Cherry+Swash'>
      <link rel="stylesheet" href="icones/icones.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
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

.exemplor {
  width: 100%;
}
}

.esquerda ul {
  list-style: none;
  padding: 1em 3em;
}

.esquerda ul li {
  display: inline-block;
}

.esquerda ul li a {
  text-decoration: none;
  color: #000;
  font-weight: 500;
  padding: 8px 16px;
  transition: all .2s ease;
}

.esquerda a:hover {
    text-decoration: none;
  border: none;
  color: rgba(30, 41, 255, .9);
}

@media all and (min-width : 768px) and (max-width : 1900px) {

.exemplor {
  width: 35%;
  height: auto;
background-position: center;
background-size: cover;
background-repeat: no-repeat;
}

.exemplor2 {
  width: 20%;
  height: auto;
background-position: center;
background-size: cover;
background-repeat: no-repeat;
}

}

</style>

<br><br><br>

<div class="conteudoos">
  <h2>TERMOFÍSICA</h2>
        </div>
        <div>
          <div>
            <ul>
              <br>
              <div style="text-align:justify;justify-content:center; margin-left: 20px; margin-right: 20px;" align="center">
          <font face="Anson"><font size="4" color="black">Termologia ou TermoFísica é o estudo dos fenômenos relacionados ao calor e temperatura.
Temperatura- é a medida do grau de agitação das partículas que constituem um corpo. No sistema internacional de unidades (SI), a unidade utilizada para a medida da temperatura é o Kelvin (K). Mas há também, outras escalas, como Celsius e Fahrenheit.<Br>
        <Br>                                 
Celsius: 0ºC - 100ºC  <Br>
Kelvin: 273K – 373K<Br>
Fahrenheit: 32°F – 212°F<Br>
É possível converter uma escala para outra usando a seguinte fórmula: <Br>
<Br>
<img src="./imagens/termofisica.jpg" width="38%" class="exemplor">
 <Br> <Br>                 

<b>Calorimetria<Br></B>
Calor- é a energia térmica transferida entre corpos que se encontram em temperaturas diferentes, sendo, portanto, uma forma de energia. <Br>
Energia Térmica é o somatório das energias de agitação das partículas de um corpo. Depende da temperatura e do número de partículas.<Br>
Existem apenas duas formas de calor: <Br>
Calor Sensível- é o calor que, recebido ou cedido por um corpo, provoca nele uma variação de temperatura. Seu cálculo:<Br>
<img src="./imagens/termofisica2.png" width="38%" class="exemplor2">
 <Br>
Onde:<Br>
Q = quantidade de calor sensível (cal ou J).<Br>
c = calor específico da substância que constitui o corpo (cal/g°C ou J/kg°C).<Br>
m = massa do corpo (g ou kg).<Br>
Δθ = variação de temperatura (°C).<Br>
<Br>
<b>Calor Latente-</b> Energia térmica que se transforma em energia potencial de agregação, mudando o estado físico.<Br>
 <Br>
Onde:<Br>
Q = quantidade de calor sensível (cal ou J).<Br>
m = massa do corpo (g ou kg).<Br>
L = calor latente (cal/g).<Br>
<Br>
<b>Capacidade Térmica - </b> Quantidade de calor que um corpo precisa receber ou ceder para que sua temperatura varie uma unidade. Cálculo: 
C = Q/Δθ ou C = m . c<Br>

Onde:<Br>
C: capacidade térmica (cal/°C ou J/K)<Br>
Q: quantidade de calor (cal ou J)<Br>
Δθ: variação de temperatura (°C ou K)<Br>
m: massa (g ou Kg)<Br>
c: calor específico (cal/g°C ou J/Kg.K)<Br>
<Br>

<br>
Fonte: <a href="https://brasilescola.uol.com.br/fisica/termologia.htm" target="_blank">https://brasilescola.uol.com.br/fisica/termologia.htm</a>


</div>
</font>




<br><Br>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/LjfNyZS0p44" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" class="videomat" allowfullscreen></iframe> </iframe> </div> </div>

        
      <br><br><br><br>
    </font>
  </font>
</div>
</ul>

</div>
          <button class="button button1" onclick="window.location.href='./exerciciotermofisica.php'"><div style="text-decoration: none;"><font color="white">Exercicios</div>
            </font></button>

           </div>
</div>
</div>
</ul>
</div>

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
