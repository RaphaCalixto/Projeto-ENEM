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
    <title>Era Vargas</title>
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
  width: 40%;
  height: auto;
background-position: center;
background-size: cover;
background-repeat: no-repeat;
}

}

</style>


  <style type="text/css">
#box{
    /*definimos a largura do box*/
    width:300px;
    /* definimos a altura do box */
    height:300px;
    /* definimos a cor de fundo do box */
    background-color:#666;
    /* definimos o quão arredondado irá ficar nosso box */
    border-radius: 10px;
    opacity : 0.2;
    
    }
</style>
<br><br><br>

<div class="conteudoos">
  <h2>ERA VARGAS</h2>
        </div>

        <div>
          <div>
            <ul>
              <br>
              <div style="text-align:justify;justify-content:center; margin-left: 20px; margin-right: 20px;" align="center">
          <font face="Anson"><font size="4" color="black">
            
            Foi um período da historia brasileira em que Getulio Dornelles Vargas esteve a frente do governo brasileiro.<br>
<br>
    • Revolução de 30<br>
    • marca o fim da republica velha <br>
    • derruba Washington Luís <br>
    • impede que Júlio Prestes assuma o poder <br>
    • 1ª fase: governo provisório (1930-1934)<br>
    • Nova constituição <br>
    • Fechamento do congresso <br>
    • Destituição de todos os governadores dos 
estados<br>
    • Nomeação de interventores no lugar desses governadores<br>
    • Centralização do poder, dando mais protagonismo ao poder executivo <br>
    • 2ª fase: governo constitucional (1934-1937)<br>
    • Vargas é eleito presidente da republica pela Assembleia Nacional Constituinte em 1934<br>
    • Aumento do poder presidencialista <br>
    • inicio da formação de um governo ditatorial<br>
    • aprovação do estado de sitio em 1935<br>
    • perseguição a grupos políticos oposicionistas<br>
    • 3ª fase: Estado Novo (1937-1945)<br>
    • governo autoritário e centralizador<br>
    • suspensão do congresso <br>
    • criação de diversas medidas visando o desenvolvimento industrial do brasil<br>
- novo valor cambial: o cruzeiro.<br>
- Concepção da Companhia Siderúrgica Nacional (CSN), a Vale do Rio Doce 
- implementação da CLT (Consolidação das Leis do Trabalho) em 1943, garantindo vários direitos aos trabalhadores.<br>
- Criação da Justiça do Trabalho, da carteira de trabalho, salário mínimo, descanso semanal remunerado, jornada de trabalho de oito horas e regulamentação do trabalho feminino de menores de idade.<br>
- Surgimento do Conselho Nacional do Petróleo (CNP), o qual, mais adiante, virá a ser a Petrobras, no ano de 1953.<br>
- Concretização da Companhia Hidrelétrica do São Francisco e da Fábrica Nacional de Motores (FNM).<br>
<br>
    <b>• Segunda guerra mundial<br></b>
- criação da força expedicionária brasileira<br>
-envio de cerca de 25 mil homens e mulheres à Europa para lutarem contra as forças do eixo<br>
    • Em 29 de outubro de 1945 Vargas é deposto, dando fim a uma dinastia que durava 15 anos<br>
            
<img src="./imagens/vargas.jpeg" width="38%" class="exemplor">


</div>
</font>




<br><Br>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/ZcTDWBqUju8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" class="videomat" allowfullscreen></iframe> </iframe> </div> </div>

        
      <br><br><br><br>
    </font>
  </font>
</div>
</ul>

</div>
          <button class="button button1" onclick="window.location.href='./exercicioerav.php'"><div style="text-decoration: none;"><font color="white">Exercicios</div>
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
