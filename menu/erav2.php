<!DOCTYPE html>
<html lang="pt-br">

<head>

<?php
session_start();
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true) and (!isset ($_SESSION['nor']) == true) and (!isset ($_SESSION['adm']) == true))
{
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  unset($_SESSION['nome']);
  unset($_SESSION['nor']);
  unset($_SESSION['adm']);
  header('location:visitante/login.php');
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
          <li class="menu-item"><a href="../menu/contato2.php" data-scroll>Contato</a></li>
          <li class="menu-item"><a href="../logout.php">SAIR</a></li>
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
    background-color:#81DAF5;
    /* definimos o quão arredondado irá ficar nosso box */
    border-radius: 30px 40px;
    
    
    }

#boxx{
    /*definimos a largura do box*/
    width:100%;
    /* definimos a altura do box */
    height:100%;
    /* definimos a cor de fundo do box */
    background-color:#E6E6E6;
    /* definimos o quão arredondado irá ficar nosso box */
    border-radius: 10px;

    
    }

</style>
<br><br><br>

<div class="conteudoos">
  <h2>REGIME MILITAR</h2>
        </div>

        <div>
          <div>
            <ul>
              <br>
              <div style="margin-left:75%; position: absolute;"><font color="black"><div id="box"> <!-- pode ser margin left 1020 tb -->
              <div style="">ASSUNTOS DE HISTÓRIA</div>
              <div style=" float:left; margin-left: 15px; "><br><BR>• Regime Militar</div>
              <div style="margin-left:1030px; position: absolute;"><br><BR><br>• Era Vargas</div>
              <div style="margin-left:1030px; position: absolute;"><br><BR><br><br>• Brasil Colônia</div>
              <div style="margin-left:1030px; position: absolute;"><br><BR><br><br><br>• Revolução Industrial</div>
              <div style="margin-left:1030px; position: absolute;"><br><BR><br><br><br><br>• Segunda Guerra Mundial</div>
            </div></div>
              <div style="text-align:justify;justify-content:center; margin-left: 20px; margin-right: 400px;" align="center">
          <font face="Anson"><font size="4" color="black">
            <div id="boxx" >
                <br><p>Getúlio Vargas ocupou a presidência do país, em um primeiro momento, por quinze anos: de 1930 a 1945. Depois retornou ao mesmo posto em 1951, governando por mais três anos, em um contexto bem diverso, e saindo apenas de forma não convencional, ou seja, suicidando-se. O termo “Era Vargas” é empregado justamente para enfatizar essa longa temporada dele no poder. Vargas cresceu na presidência em 1930, em um contexto de saturação do modelo político que vigorava até aquele momento, a chamada “República Velha”, onde a rotatividade do poder era disputada por líderes dos estados de São Paulo e Minas Gerais.
            As principais características do início da atuação de Vargas como presidente foram: 1) a centralização do poder político e o consequente enfraquecimento das oligarquias regionais, especialmente a paulista; 2) a modernização econômica, sobretudo após a Crise de 1929, que exigiu uma aceleração na política de substituição de importações, isto é, a produção de maquinário industrial em solo brasileiro, que resultou no desenvolvimento dos setores de siderurgia e metalurgia; 3) o enfrentamento da insatisfação de São Paulo, que exigia uma Assembleia Constituinte – já que Vargas governava “provisoriamente” como apoio do Exército e havia dissolvido o Poder Legislativo.
            O “Estado Novo” – a fase explicitamente ditatorial de Getúlio Vargas – foi instituído no dia 10 de novembro de 1937. A Constituição de 1934 foi revogada, e o país viu-se privado de eleições e de liberdade de expressão, além de submetido ao controle de caráter fascista fortemente inspirado nos líderes autoritários europeus da mesma época, Mussolini e Hitler. No entanto, um dos destaques do período do “Estado Novo” foi a criação das leis trabalhistas através da CLT (Consolidação das Leis do Trabalho), aprovada em 1º de maio de 1943.<Br><br>
            </div>
            <br><br>
<img src="./imagens/Ditadura.jpg" width="38%" class="exemplor">


</div>
</font>




<br><Br>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/EixLrbwyo60" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"  class="videomat" allowfullscreen></iframe> </iframe> </div> </div>

        
      <br><br><br><br>
    </font>
  </font>
</div>
</ul>

</div>
          <button class="button button1" onclick="window.location.href='./exercicioregime.php'"><div style="text-decoration: none;"><font color="white">Exercicios</div>
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
