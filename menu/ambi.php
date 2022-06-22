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
    <title>Ambiguidade</title>
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
  <h2>FUNÇÕES DA LINGUAGEM</h2>
        </div>
        <div>
          <div>
            <ul>
              <br>
              <div style="text-align:justify;justify-content:center; margin-left: 20px; margin-right: 20px;"  align="center">
          <font face="Anson"><font size="4" color="black">A ambiguidade pode apresentar a sensação de indecisão, hesitação, imprecisão, incerteza e indeterminação.
            Um enunciado pode apresentar mais de um sentido, trazendo, dessa forma, diversas interpretações. A duplicidade de leitura pode ser usada intencionalmente pelo enunciador, todavia uma leitura atenta elimina grande parte dos problemas de ambiguidade no texto.<br>
<br>
Exemplo:     Não sei se gosto do frio ou do calor. Não sei se vou ou fico.<br>
<br>
Na teoria, ambiguidade é a indeterminação de sentido que certas palavras ou expressões apresentam, o que dificulta a compreensão do enunciado. Pode ser:<br><br>
<b>Estrutural –</b> pela posição de determinada palavra ou expressão em um enunciado. Por exemplo: “O computador tornou-se um aliado do homem, mas esse nem sempre realiza todas as suas tarefas.” (as palavras "esse" e "suas" podem referir-se tanto a "computador" quanto a "homem"). Nesse caso, a interpretação ambígua é feita pelo emprego de palavras que não permitem ao leitor a identificação correta do seu referente no texto.<br><br>

<b>Lexical –</b> Quando a palavra assume duas formas diferentes, como é o caso da polissemia ou da homonímia.
A polissemia é a pluralidade significativa de um mesmo significante, ou seja, a capacidade que o próprio vocábulo possui de ter várias significações, somente definidas dentro de uma determinada situação. Por exemplo:<br>
“No meio do caminho tinha uma pedra” (Carlos Drummond de Andrade)<br>
PEDRA = fragmento mineral ou problema, contratempo.<br>

<br><br>
<img src="./imagens/ambi.jpg" width="40%" class="exemplor"> 
<br><br>
Fonte: <a href="http://infotechinnovatis.blogspot.com/2017/04/significado-de-ambiguidade.html" target="_blank">http://infotechinnovatis.blogspot.com/2017/04/significado-de-ambiguidade.html</a><br>

          </div>
          <br>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/E4gFA4q-zzA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"  class="videopt" allowfullscreen> </iframe> </div> </div>

        
      <br><br><br><br>
                 </div>
</font></font>
</div>
</div>
</ul>


          <button class="button button1" onclick="window.location.href='./exercicioambi.php'"><div style="text-decoration: none;"><font color="white">Exercicios</div>
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
