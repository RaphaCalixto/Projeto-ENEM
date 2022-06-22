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
  width: 55%;
  height: auto;
background-position: center;
background-size: cover;
background-repeat: no-repeat;
}

}

</style>

<br><br><br>

<div class="conteudoos">
  <h2>CINEMÁTICA</h2>
        </div>
        <div>
          <div>
            <ul>
              <br>
              <div style="text-align:justify;justify-content:center; margin-left: 20px; margin-right: 20px;" align="center">
          <font face="Anson"><font size="4" color="black">A cinemática estuda o movimento dos corpos, não se preocupando com a causa desse movimento. Os principais movimentos estudados são os lineares e os circulares.
Ela indica a velocidade, o deslocamento e a aceleração em cada instante.<br>  Um exemplo disso na prática são os veículos. Com a cinemática, calculamos a velocidade que um carro está em certo momento, sua aceleração média e o quanto esse carro percorreu (deslocamento).<br>
Existem  duas divisões na cinemática: <br>
• Cinemática Escalar- movimentos que acontecem sem necessidade de informar sentido e direção.<br>
<br>
Trajetória<br>
É um conjunto de posições sucessivas ocupadas por um corpo no decorrer do tempo. Observe: <br>
<br>
Deslocamento<br>
Para calcular o deslocamento de um carro, dele parte de um ponto “S” (posição inicial)  e depois de um determinado tempo, chega ao ponto “S0” (posição final). A sua variação (S) é dada da seguinte maneira:<br>
      ΔS = S – S0<br>
<br>
<b>Velocidade escalar média</b><br>
Esse elemento indica a variação média do deslocamento em um certo intervalo de tempo (Δt). Temos que:  <br>
vm = ΔS/Δt<br>
Pelo SI, as unidades são:<br>
vm: metro por segundo (m/s);<br>
ΔS: metro (m);<br>
Δt: segundo (s).<br>
<br>
    <b>Aceleração escalar média</b><br>
Está relacionada à variação média da velocidade em um período de tempo.  Se um carro possui uma aceleração escalar média de 5 m/s², a cada segundo, sua velocidade aumenta em 5 m/s. Calculamos da seguinte forma:<br>
am = Δv/Δt<br>
Pelo SI, as unidades são:<br>
am: metro por segundo ao quadrado (m/s²);<br>
Δv: metro por segundo (m/s);<br>
Δt: segundo (s).<br>
<br>
    <b>Movimento Uniforme (UM)</b><br>
Acontece quando a velocidade escalar (v) é constante e diferente de zero. Sendo assim, não há aceleração.<br>
Uma das fórmulas muito utilizadas para esse tipo de movimento é a equação horária do espaço:<br>
<br>
S = S0 + v . t<br>
Pelo SI, as unidades são:<br>
S e S0: metro (m);<br>
v: metro por segundo (m/s);<br>
t: segundo (s).<br>
<br>
     <b>Movimento Uniformemente Variado (MUV)</b><br>
Acontece quando a aceleração é constante e diferente de zero. Agora, diferente do MU, há a aceleração que faz com que as variações de velocidade escalar (Δv) sejam iguais em intervalos de tempo (Δt) iguais.<br>
Temos então, a seguinte fórmula para a função horária da velocidade:<br>
<br>
v = v0 + a . t<br>
Pelo SI, as unidades são:<br>
v e v0: metro por segundo (m/s);<br>
a: metro por segundo ao quadrado (m/s²);<br>
t: segundo (s).<br>
<br>
Já, para conseguir calcular o deslocamento, utilizamos a função horária do espaço:<br>
S = S0 + v0 . t + (a . t²)/2<br>
Pelo SI, as unidades são:<br>
S e S0: metro (m);<br>
v0: metro por segundo (m/s);<br>
t: segundo (s);<br>
a: metro por segundo ao quadrado (m/s²).<br>
<br>
        <b>Equação de Torricelli</b><br>
Ainda falando sobre MUV, quando o problema ou exercício não indica o tempo (t) é possível encontrar a velocidade final (v), a velocidade inicial (v0), o deslocamento (ΔS) ou a aceleração (a) por meio da fórmula de Torricelli:<br>
<br>
v² = v0² + 2 . a . ΔS<br>
Pelo SI, as unidades são:<br>
v e v0: metro por segundo (m/s);<br>
a: metro por segundo ao quadrado (m/s²);<br>
ΔS: metro (m).<br>
<br>
• Cinemática Vetorial-  utilizam-se vetores para informar a direção e o sentido. Eles orientam o movimento. São os mesmos conceitos da cinemática escalar, mas podem ter diferença em certos cálculos pois incluem o deslocamento vetorial.<br>
                                               

<img src="../imagens/formulascin.jpg" width="38%" class="exemplor">
<br>
<br>
Fonte: <a href="https://mundoeducacao.bol.uol.com.br/fisica/cinetica-escalar.htm" target="_blank">https://mundoeducacao.bol.uol.com.br/fisica/cinetica-escalar.htm</a>

</div>
</font>




<br><Br>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/ckRyZMjRvfM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" class="videomat" allowfullscreen></iframe> </iframe> </div> </div>

        
      <br><br><br><br>
    </font>
  </font>
</div>
</ul>

</div>
          <button class="button button1" onclick="window.location.href='./exerciciocin.php'"><div style="text-decoration: none;"><font color="white">Exercicios</div>
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
