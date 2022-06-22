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
    <title>Gêneros Textuais</title>
    <link rel="stylesheet" type="text/css" href="estrutura/estrutura.css" />
    <link rel="shortcut icon" href="./imagens/favicon.ico" />
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
@media all and (max-width : 1200px) {


.videopt {
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

.exemplor {
  width: 100%;
}

}

@media all and (max-width : 1900px) {

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

@media all and (min-width: 800px) and (max-width : 1900px){

.exemplor {

width:40%;
height: auto;
background-position: center;
background-size: cover;
background-repeat: no-repeat;

}

}

</style>

<br><br><br>

<div class="conteudoos">
  <h2>GÊNEROS TEXTUAIS</h2>
        </div>
        <div>
          <div>
            <ul>
              <br>
              <div style="text-align:justify;justify-content:center; margin-left: 20px;"  align="center">
          <font face="Anson"><font size="4" color="black">
Os gêneros textuais são classificados conforme as características comuns que os textos apresentam em relação à linguagem e ao conteúdo.<br>
<b>Texto Narrativo</b><br>
Os textos narrativos apresentam ações de personagens no tempo e no espaço. A estrutura da narração é dividida em: apresentação, desenvolvimento, clímax e desfecho.<br>
Alguns exemplos de gêneros textuais narrativos:<br>
Romance<br>
Novela<br>
Contos de Fada<br>
<br>

<b>Texto Descritivo</b><br>
Os textos descritivos se ocupam de relatar e expor determinada pessoa, objeto, lugar, acontecimento. Dessa forma, são textos repletos de adjetivos, os quais descrevem ou apresentam imagens a partir das percepções sensoriais do locutor (emissor).<br>
São exemplos de gêneros textuais descritivos:<br>
Diário<br>
Relatos (viagens, históricos, etc.)<br>
Biografia e autobiografia<br>
Notícia<br>

<br>
<b>Texto Dissertativo-Argumentativo</b><br>
Os textos dissertativos são aqueles encarregados de expor um tema ou assunto por meio de argumentações. São marcados pela defesa de um ponto de vista, ao mesmo tempo que tentam persuadir o leitor. Sua estrutura textual é dividida em três partes: tese (apresentação), antítese (desenvolvimento), nova tese (conclusão).<br>
Exemplos de gêneros textuais dissertativos:<br>
Editorial Jornalístico<br>
Carta de opinião<br>
Resenha<br>
Artigo<br>
Ensaio<br>
Monografia, dissertação de mestrado e tese de doutorado<br>


<br>
<b>Texto Expositivo</b><br>
Os textos expositivos possuem a função de expor determinada ideia, por meio de recursos como: definição, conceituação, informação, descrição e comparação.<br>
Alguns exemplos de gêneros textuais expositivos:<br>
Seminários<br>
Palestras<br>
Conferências<br>
Entrevistas<br>
Trabalhos acadêmicos<br>
Enciclopédia<br>
Verbetes de dicionários<br>

<br>
<b>Texto Injuntivo</b><br>
O texto injuntivo, também chamado de texto instrucional, é aquele que indica uma ordem, de modo que o locutor (emissor) objetiva orientar e persuadir o interlocutor (receptor). Por isso, apresentam, na maioria dos casos, verbos no imperativo.<br>
Alguns exemplos de gêneros textuais injuntivos:<br>
Propaganda<br>
Receita culinária<br>
Bula de remédio e etc...<br>

<br><br>
<img src="./imagens/gentext.jpg" width="40%" class="exemplor"> 
<br><br>
Fonte: <a href="https://www.todamateria.com.br/generos-textuais/" target="_blank">https://www.todamateria.com.br/generos-textuais/</a><br>

          </div>
          <br>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Ucjv4LT8CSg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" class="videopt" allowfullscreen> </iframe> </div> </div>

        
      <br><br><br><br>
                 </div>
</font></font>
</div>
</div>
</ul>


          <button class="button button1" onclick="window.location.href='./exerciciogentext.php'"><div style="text-decoration: none;"><font color="white">Exercicios</div>
            </font></button>

           </div>
</font></font>
</div>
</div>
</ul>


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
