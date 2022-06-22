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
  width: 30%;
  height: auto;
background-position: center;
background-size: cover;
background-repeat: no-repeat;
}

}

</style>

<br><br><br>

<div class="conteudoos">
  <h2>ELETRICIDADE</h2>
        </div>
        <div>
          <div>
            <ul>
              <br>
              <div style="text-align:justify;justify-content:center; margin-left: 20px; margin-right: 20px;" align="center">
          <font face="Anson"><font size="4" color="black">A eletricidade é a área da física que estuda os fenômenos das cargas elétricas.<br> Ela é dividida em: <br>
<b>• Eletrostática:</b> estuda as cargas elétricas em repouso.<br>
      Um corpo está eletrizado quando apresenta excesso ou falta de elétrons.<br>
      Se o corpo apresenta excesso de elétrons, ele está eletrizado com carga negativa. Já, se o corpo apresenta falta de elétrons, ele está eletrizado com carga positiva.<br>
     Para saber a quantidade de carga elétrica, usamos: <br>
Q = + n. e – para corpos eletrizados positivamente<br>
<br>
Q = - n. e – para corpos eletrizados negativamente<br>
<b>Unidade no SI:</b> Coulomb (C)<br>
Onde:<br>
Q: quantidade de carga elétrica<br>
n: número de elétrons<br>
e: carga elétrica elementar ---> 1,6.10<sup>-19</sup> C<br>
     Cargas elétricas de mesmo sinal se repelem, cargas elétricas de sinais opostos se atraem.<br>
<br>
<b>• Eletrodinâmica:</b> Estuda as cargas elétricas em movimento.<br>
Corrente elétrica é o movimento ordenado das cargas elétricas em um condutor metálico, quando este está submetido à ação de um campo elétrico.<br>
Há 2 sentidos da corrente elétrica:<br>
Sentido real: sentido do deslocamento dos elétrons do potencial menor para o maior<br>
Sentido convencional: sentido do deslocamento das cargas positivas do potencial maior para o menor.<br>
 <br>
 <img src="./imagens/correnteeletrica.gif" width="38%" class="exemplor">
 <Br><br>
<b>Intensidade da corrente elétrica-</b> É a divisão entre a carga e a variação do tempo, sendo representada pela seguinte equação matemática:<br>
 <br>
Onde:<br>
I: intensidade da corrente (A)<br>
Q: carga elétrica (C)<br>
Δt: intervalo de tempo (s)<br>

<br>
<b>Tensão elétrica-</b> Também chamada de diferença de potencial (ddp), é a força decorrente da movimentação dos elétrons em determinado circuito.<br>
<br>
U= R.I<br>
Onde:<br>
U= Tensão elétrica (V)<br>
R = Resistência (Ω)<br>
i= Intensidade da corrente (A)<br>
<br>
<b>Energia Elétrica-</b> É produzida a partir do potencial elétrico de dois pontos de um condutor.  Cálculo:<br>
E<sub>el</sub> = P . ∆t<br>
<br>
Onde:<br>
E<sub>el</sub>: energia elétrica (kWh)<br>
P: potência (kW)<br>
∆t: variação do tempo (h)<br>

<br>
<b>• Eletromagnetismo:</b> Estuda a relação da eletricidade com a capacidade de atrair e reprimir polos.<br>

<br>
Fonte: <a href="https://brasilescola.uol.com.br/fisica/principio-eletrostatica.htm" target="_blank">https://brasilescola.uol.com.br/fisica/principio-eletrostatica.htm</a>


</div>
</font>




<br><Br>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/BP0lo1zroXM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" class="videomat" allowfullscreen></iframe> </iframe> </div> </div>

        
      <br><br><br><br>
    </font>
  </font>
</div>
</ul>

</div>
          <button class="button button1" onclick="window.location.href='./exercicioeletricidade.php'"><div style="text-decoration: none;"><font color="white">Exercicios</div>
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
