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
  width: 45%;
  height: auto;
background-position: center;
background-size: cover;
background-repeat: no-repeat;
}

}

</style>



<br><br><br>

<div class="conteudoos">
  <h2>ENERGIA</h2>
        </div>
        <div>
          <div>
            <ul>
              <br>
              <div style="text-align:justify;justify-content:center; margin-left: 20px; margin-right: 20px;" align="center">
                
          <font face="Anson"><font size="4" color="black">Na física, energia é capacidade de um sistema  para realizar o trabalho, ou seja, está associada à capacidade de produção de ação e pode aparecer de muitas formas diferentes, como movimento de corpos, calor, eletricidade etc.<br><Br>
            <img src="./imagens/formaenergia.jpg" width="38%" class="exemplor">
            <br>
<b>• Formas mais comuns de energia:</b><br>
<b>Energia Mecânica</b> - está relacionada com duas formas diferentes: Cinética e Potencial.<br>
<b>Energia cinética -</b> é a energia do movimento. Quanto maior a velocidade, maior será a energia cinética. A equação que define matematicamente a energia cinética é:<br>
<br>
E<sub>c</sub> = m.v<sup>2</sup>/2
<br>         

Onde: <br>
E<sub>c</sub>: energia cinética<br>
m: massa<br>
v: velocidade<br>
<br>
<b>Energia potencial</b> - É um tipo de energia que o corpo armazena, quando está a uma certa distância de um referencial de atração gravitacional ou associado a uma mola.<br>
Energia . Potencial . Gravitacional <br>
Epg = m.g.h <br>
Onde:<br>
<br>
Epg: energia potencial gravitacional <br>
     m: massa  <br>                                                                                                                         g:gravidade   <br>                                                                                                                    h:altura<br>
     <br>
     <br>
<b>Energia Potencial  Elástica (EPE)<br></b>
E<sub>pe</sub> = k.x<sup>2</sup> / 2 <br>
    <br>       
Onde:<br>
<b>E<sub>pe</sub>: energia potencial elástica</b>  <br>                                                                                                
k:constante <br>
x: deformação <br>                        
<br>
<b>Energia Térmica -</b> é a energia relacionada com o grau de movimentação das partículas subatômicas. A manifestação do calor só ocorrerá caso exista diferença de temperatura entre dois corpos. <br>
<br>

<b>Energia Elétrica -</b> é a energia produzida a partir das cargas elétricas das partículas subatômicas. As cargas ao se deslocarem geram corrente elétrica, criando o que chamamos de eletricidade.<br>
  <br>                                         
<b>Energia Luminosa -</b> A luz é a energia radiante que se manifesta através da luz visível, ou seja, da luz que conseguimos perceber com o sentido da visão.<br>
<br>

<img src="./imagens/ene.jpg" width="38%" class="exemplor">
<br>
Fonte: <a href="https://brasilescola.uol.com.br/o-que-e/fisica/o-que-e-energia.htm" target="_blank">https://brasilescola.uol.com.br/o-que-e/fisica/o-que-e-energia.htm</a>

</div>
</font>




<br><Br>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/r_ZmEbu2u7E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" class="videomat" allowfullscreen></iframe> </iframe> </div> </div>

        
      <br><br><br><br>
    </font>
  </font>
</div>
</ul>

</div>
          <button class="button button1" onclick="window.location.href='./exercicioenergia.php'"><div style="text-decoration: none;"><font color="white">Exercicios</div>
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
