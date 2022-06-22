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
    <title>Progressão Geométrica</title>
    <link rel="stylesheet" type="text/css" href="estrutura/estrutura.css" />
    <link rel="stylesheet" type="text/css" href="../rodape/rodape.css" />
    <link rel="shortcut icon" href="./imagens/favicon.ico" />
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
          <li class="menu-item active"><a href="../index2adm.php" data-scroll>Inicio</a></li>
          <li class="menu-item"><a href="./enemadm.php" data-scroll>ENEM</a></li>
          <li class="menu-item"><a href="../menu/materiasadm.php" data-scroll>Matérias</a></li>
          <li class="menu-item"><a href="./trocasenhaadm.php" data-scroll>Trocar Senha</a></li>
          <li class="menu-item"><a href="../menu/contato2adm.php" data-scroll>Contato</a></li>
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


</style>

<br><br><br>

<div class="conteudoos">
  <h2>PROGRESSÃO ARITMÉTICA</h2>
        </div>
        <div>
          <div>
            <ul>
              <br>
              <div style="text-align:justify;justify-content:center; margin-left: 20px; margin-right: 20px;" align="center">
          <font face="Anson"><font size="4" color="black">Uma progressão geométrica (PG) é uma sequência numerica onde cada termo é igual ao produto de seu antecessor com uma constante, chamada razão da PG. Em outras palavras, a diferença entre dois termos quaisquer e consecutivos de uma PG é uma constante.<br>
Exemplo de progressão geométrica:<br>
(1, 3, 9, 27, 81, …)<br>
<br>
Cada termo dessa PG, exceto o primeiro, é resultado de um produto  de seu antecessor por 3, pois 3 = 3•1, 9 = 3•3 e assim por diante.
A razão de uma PG é representada pela letra “q”. E seus elementos são representados por uma letra minúscula seguida de um número que indica a posição do número. Por exemplo, na PG acima, o termo a1 é o primeiro termo e é igual a 1. O termo a4 é o quarto termo e é igual a 27. Dessa forma, é costume indicar o enésimo termo de uma PG por an.<br>
Fazendo uso da definição de PG, podemos escrever o enésimo termo como um produto de seu antecessor an – 1 pela razão. Assim, a definição das progressões geométricas também pode ser dada da seguinte maneira:<br>
 <br>
<b>Soma dos termos infinitos da progressão</b><br>
<b>Termo geral da PG</b><br>
O termo geral de uma PG é uma expressão que pode ser usada para encontrar um termo qualquer de uma progressão geométrica. Esse termo também é expresso por an e a expressão/fórmula utilizada para determiná-lo é:<br>

 
Onde:<br>
n é o índice do termo que queremos determinar, ou seja, está ligado à posição desse termo na PG;<br>
a1 é o primeiro termo da progressão geométrica e q é sua razão. <br>
Por exemplo, para determinar o décimo termo da PG (1, 2, 4, 8, 16, …), podemos fazer: <br>
a<sup>n</sup> = a<sup>1</sup>•q<sub>n</sub> – 1<br>
a<sup>10</sup> = 1•2<sup>10</sup> – 1<br>
Pois a1 = 1, q = 2 e n = 10. Prosseguindo nos cálculos:<br>
a10 = 1•29<br>
a10 = 29<br>
a10 = 512<br>
<b>Soma dos termos de uma PG</b><br>
Existem duas possibilidades para o cálculo da soma dos termos de uma PG. Ela pode ser finita ou o problema pode exigir a soma de uma quantidade finita de termos de uma PG infinita. Em ambos os casos, usamos a fórmula:<br>
 Sn = a1 . (q<sup>n</sup> - 1 ) / q-1<br>
Se for necessário encontrar soma do infinitos termos, a fórmula a ser utilizada é:<br>
Sn = a1 / q-1<br>
 
Por fim, é possível encontrar o produto dos termos de uma PG finita. A fórmula usada para esse cálculo é:<br>
Pn = a<sup>n</sup><sub>1</sub> . q<sup>n(n-1)/2</sup>
 


 <br><br><br>
<img src="./imagens/progeo.jpeg" class="videomat" width="40%">
<br>
Fonte: <a href="https://brasilescola.uol.com.br/matematica/progressao-geometrica.htm" target="_blank">https://brasilescola.uol.com.br/matematica/progressao-geometrica.htm</a>
</div>
</font>
<br><br>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/hK4wKwCn1a0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" class="videomat" allowfullscreen ></iframe> </iframe> </div> </div>

        
      <br><br><br><br>
    </font>
  </font>
</div>
</ul>

</div>
          <button class="button button1" onclick="window.location.href='./exercicioprogeoadm.php'"><div style="text-decoration: none;"><font color="white">Exercicios</div>
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
