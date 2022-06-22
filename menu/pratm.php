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
    <title>Progressão Aritmética</title>
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
          <li class="menu-item active"><a href="../index2.php" data-scroll>Inicio</a></li>
          <li class="menu-item"><a href="./enem.php" data-scroll>ENEM</a></li>
          <li class="menu-item"><a href="../menu/materias.php" data-scroll>Matérias</a></li>
          <li class="menu-item"><a href="./trocasenha.php" data-scroll>Trocar Senha</a></li>
          <li class="menu-item"><a href="../menu/contato2.php" data-scroll>Contato</a></li>
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
              <div style="text-align:justify;justify-content:center; margin-left: 20px;" align="center">
          <font face="Anson"><font size="4" color="black">Progressão aritmética é um tipo de seqüência numérica que a partir do segundo elemento cada termo (elemento) é a soma do seu antecessor por uma constante. (5,7,9,11,13,15,17) essa seqüência é uma Progressão aritmética, pois os seus elementos são formados pela soma do seu antecessor com a constante 2.<br>
a<sub>1</sub> = 5<br>
a<sub>2</sub> = 5 + 2 = 7<br>
a<sub>3</sub> = 7 + 2 = 9<br>
a<sub>4</sub> = 9 + 2 = 11<br>
a<sub>5</sub> = 11 + 2 = 13<br>
a<sub>6</sub> = 13 + 2 = 15<br>
a<sub>7</sub> = 15 + 2 = 17<br>

Essa constante é chamada de razão e representada por r. Dependendo do valor de r a progressão aritmética pode ser crescente, constante ou decrescente.<br>

P.A crescente: r > 0, então os elementos estarão em ordem crescente.<br>

P.A constante: r = 0, então os elementos serão todos iguais.<br>

P.A decrescente: r < 0, então os elementos estarão em ordem decrescente.<br><br>

Termo Geral de uma P.A:<br><br>

Considere uma P.A finita qualquer (a<sub>1</sub>, a<sub>2</sub>, a<sub>3</sub>, a<sub>4</sub>, ... , a<sub>n</sub>) de razão igual a r, sabemos que:<br>

a<sub>2</sub> – a<sub>1</sub> = r → a<sub>2</sub> = a<sub>1</sub> + r
a<sub>3</sub> – a<sub>2</sub> = r → a<sub>3</sub> – a<sub>1</sub> – r = r → a<sub>3</sub> = a<sub>1</sub> + 2<sub>r</sub>
a<sub>4</sub> – a<sub>3</sub> = r → a<sub>4</sub> – a<sub>1</sub> – 2<sub>r</sub> = r → a<sub>4</sub> = a<sub>1</sub> + 3<sub>r</sub>
…<br>

a n = a<sub>1</sub> + (n – 1) . r<br>

Portanto o termo geral de uma P.A é calculado utilizando a seguinte fórmula:<br>

a <sub>n</sub> = a<sub>1</sub> + (n – 1) . r <br><br>

<img src="../imagens/termopa2.gif" class="videomat" width="20%"> <br><br><br>
<img src="../imagens/termopa3.jpg" class="videomat" width="30%">
<br><br>
Fonte: <a href="https://mundoeducacao.bol.uol.com.br/matematica/progressao-aritmetica.htm" target="_blank">https://mundoeducacao.bol.uol.com.br/matematica/progressao-aritmetica.htm</a>
</div>
</font>
<br><br>

<br>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/XeIohrmZtbA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" class="videomat" allowfullscreen ></iframe> </iframe> </div> </div>

        
      <br><br><br><br>
    </font>
  </font>
</div>
</ul>

</div>
          <button class="button button1" onclick="window.location.href='./exerciciopratm.php'"><div style="text-decoration: none;"><font color="white">Exercicios</div>
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
