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
    <title>Funções da Linguagem</title>
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
          <font face="Anson"><font size="4" color="black">As funções da linguagem são formas de utilização da linguagem segundo a intenção do falante. Elas são classificadas em seis tipos: função referencial, função emotiva, função poética, função fática, função conativa, e metalinguística. Cada uma desempenha um papel relacionado com os elementos presentes na comunicação: emissor, receptor,mensagem, código, canal e contexto. Assim, elas determinam o objetivo dos atos comunicativos. Embora haja uma função que predomine, vários tipos de linguagem podem estar presentes num mesmo texto. <br><br>
            <font size="5"><b>Função Referencial ou Denotativa:</b><br></font>
Também chamada de função informativa, a função referencial tem como objetivo principal informar, referenciar algo.

Voltada para o contexto da comunicação, esse tipo de texto é escrito na terceira pessoa (singular ou plural) enfatizando seu caráter impessoal.

Como exemplos de linguagem referencial podemos citar os materiais didáticos, textos jornalísticos e científicos. Todos eles, por meio de uma linguagem denotativa, informam a respeito de algo, sem envolver aspectos subjetivos ou emotivos à linguagem.<br>

<font size="4"><b>Exemplo de uma notícia:</b><br></font>
Na passada terça-feira, dia 22 de setembro de 2015, o real teve a maior desvalorização da sua história. Nesse dia foi preciso desembolsar R$ 4,0538 para comprar um dólar. Recorde-se que o Real foi lançado há mais de 20 anos, mais precisamente em julho de 1994.
<br><Br><br>

<img src="../imagens/referencial3.jpg" width="38%" class="exemplor">
<br><br>

<font size="5"><b>Função Emotiva ou Expressiva:</b><br></font>
Também chamada de função expressiva, na função emotiva o emissor tem como objetivo principal transmitir suas emoções, sentimentos e subjetividades por meio da própria opinião.<Br>

Esse tipo de texto, escrito em primeira pessoa, está voltado para o emissor, uma vez que possui um caráter pessoal.<br>

Como exemplos podemos destacar: os textos poéticos, as cartas, os diários. Todos eles são marcados pelo uso de sinais de pontuação, por exemplo, reticências, ponto de exclamação, etc.<br>

<font size="4"><b>Exemplo: <Br></B></font>
Meus amores, tenho tantas saudades de vocês … Mas não se preocupem, em breve a mamãe chega e vamos aproveitar o tempo perdido bem juntinhos. Sim, consegui adiantar a viagem em uma semana!!! Isso quer dizer que tenho muito trabalho hoje e amanhã.... Quando chegar, quero encontrar essa casa em ordem, combinado?!?<Br>
<br><br>
<img src="../imagens/emotiva.jpg" width="38%" class="exemplor"> 

<br><br><br>

<font size="5"><b>Função Poética</b><br></font>
A função poética é característica das obras literárias que possui como marca a utilização do sentido conotativo das palavras.<Br>

Nessa função, o emissor preocupa-se de que maneira a mensagem será transmitida por meio da escolha das palavras, das expressões, das figuras de linguagem. Por isso, aqui o principal elemento comunicativo é a mensagem.<Br>

Note que esse tipo de função não pertence somente aos textos literários. Também encontramos a função poética na publicidade ou nas expressões cotidianas em que há o uso frequente de metáforas (provérbios, anedotas, trocadilhos, músicas).<Br>

<font size="4"><b>Exemplo: <Br></b></font>
Apesar de não ter frequentado a escola, dizia que a avó era um poço de sabedoria. Falava de tudo e sobre tudo e tinha sempre um provérbio debaixo da manga.
<br><br>

<img src="../imagens/poetica.jpg" width="34%" class="exemplor"> 

<br><Br><br>

<font size="5"><b>Função Fática<Br></b></font>
A função fática tem como objetivo estabelecer ou interromper a comunicação de modo que o mais importante é a relação entre o emissor e o receptor da mensagem. Aqui, o foco reside no canal de comunicação.<Br>

Esse tipo de função é muito utilizada nos diálogos, por exemplo, nas expressões de cumprimento, saudações, discursos ao telefone, etc.<Br>

<font size="4"><b>Exemplo de uma conversa telefônica:<Br></b></font>
— Consultório do Dr. João, bom dia!<Br>
— Bom dia! Precisava marcar uma consulta para o próximo mês, se possível.<Br>
— Hum, o Dr. tem vagas apenas para a segunda semana. Entre os dias 7 e 11, qual a sua preferência?<Br>
— Dia 8 está ótimo.<Br>
<br><br>

<img src="../imagens/fatica.jpg" width="36%" class="exemplor"> 
<br><br><br>

<font size="5"><b>Função Conativa ou Apelativa<Br></b></font>
Também chamada de apelativa, a função conativa é caracterizada por uma linguagem persuasiva que tem o intuito de convencer o leitor. Por isso, o grande foco é no receptor da mensagem.<Br>

Essa função é muito utilizada nas propagandas, publicidades e discursos políticos, a fim de influenciar o receptor por meio da mensagem transmitida.<Br>

Esse tipo de texto costuma se apresentar na segunda ou na terceira pessoa com a presença de verbos no imperativo e o uso do vocativo.<Br>

<font size="4"><b>Exemplos:<Br></b></font>
Vote em mim!<Br>
Entre. Não vai se arrepender!<Br>
É só até amanhã. Não perca!<Br>
<br><Br>
<img src="../imagens/conativa.jpg" width="36%" class="exemplor"> 
<br><br><br>

<font size="5"><b>Função Metalinguística <Br></b></font>
A função metalinguística é caracterizada pelo uso da metalinguagem, ou seja, a linguagem que refere-se à ela mesma. Dessa forma, o emissor explica um código utilizando o próprio código.<Br>

Um texto que descreva sobre a linguagem textual ou um documentário cinematográfico que fala sobre a linguagem do cinema são alguns exemplos. <Br>
Nessa categoria, os textos metalinguísticos que merecem destaque são as gramáticas e os dicionários. <Br>

<font size="4"><b>Exemplo: <Br></B></font>
Escrever é uma forma de expressão gráfica. Isto define o que é escrita, bem como exemplifica a função metalinguística. <Br>
<br><br>
<img src="../imagens/metalinguistica.jpg" width="40%" class="exemplor"> 
<br><br>
Fonte: <a href="https://www.todamateria.com.br/funcoes-da-linguagem/" target="_blank">https://www.todamateria.com.br/funcoes-da-linguagem/</a>
<br>

          </div>
          <br>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/5JrCUWnqHBk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" class="videopt" allowfullscreen> </iframe> </div> </div>

        
      <br><br><br><br>
                 </div>
</font></font>
</div>
</div>
</ul>


          <button class="button button1" onclick="window.location.href='./exerciciofuncl.php'"><div style="text-decoration: none;"><font color="white">Exercicios</div>
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
