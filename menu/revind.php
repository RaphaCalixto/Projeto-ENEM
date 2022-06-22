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
    <title>Revolução Industrial</title>
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
  <h2>REVOLUÇÃO INDUSTRIAL</h2>
        </div>

        <div>
          <div>
            <ul>
              <br>
              <div style="text-align:justify;justify-content:center; margin-left: 20px; margin-right: 20px;" align="center">
          <font face="Anson"><font size="4" color="black">
            
            As máquinas foram inventadas, com o propósito de poupar o tempo do trabalho humano. Uma delas era a máquina a vapor que foi construída na Inglaterra durante o século XVIII. Graças a essas máquinas, a produção de mercadorias ficou maior e os lucros também cresceram. Vários empresários; então, começaram a investir nas indústrias.
            Com tanto avanço, as fábricas começaram a se espalhar pela Inglaterra trazendo várias mudanças. Esse período é chamado pelos historiadores de Revolução Industrial e ela começou na Inglaterra.
            <br><br>
            Os ingleses davam muita importância ao comércio (quanto mais comércio havia, maior era a concorrência).<br>
<br>
Quando se existe comércio, existe concorrência e para acabar com ela, era preciso baixar os preços. Logo, a burguesia inglesa começou a aperfeiçoar suas máquinas e a investir nas indústrias.<br>
<br>
Vários camponeses foram trabalhar nas fábricas e formaram uma nova classe social: o proletariado.<br>
<br>
O desenvolvimento industrial arruinou os artesãos, pois os produtos eram confeccionados com mais rapidez nas fábricas. A valorização da ciência, a liberdade individual e a crença no progresso incentivaram o homem a inventar máquinas.<br>
<br>
O governo inglês dava muita importância à educação e aos estudos científicos e isso também favoreceu as descobertas tecnológicas.<br>
<br>
Milhares de trabalhadores das indústrias inglesas.<br>
Milhares de trabalhadores das indústrias inglesas.<br>
<br>
Graças à Marinha Inglesa (que era a maior do mundo e estava em quase todos os continentes) a Inglaterra podia vender seus produtos em quase todos os lugares do planeta.<br>
<br>
No século XIX a Revolução Industrial chegou até a França e com o desenvolvimento das ferrovias cresceu ainda mais.<br>
<br>
Em 1850, chegou até a Alemanha e só no final do século XIX; na Itália e na Rússia, já nos EUA, o desenvolvimento industrial só se deu na segunda metade do século XIX.<br>
<br>
No Japão, só nas últimas décadas do século XIX, quando o Estado se ligou à burguesia (o governo emprestava dinheiro para os empresários que quisessem ampliar seus negócios, além de montar e vender indústrias para as famílias ricas), é que a industrialização começou a crescer. O Estado japonês esforçava-se ao máximo para incentivar o desenvolvimento capitalista e industrial.<br>
<br>
Adam Smith (pensador escocês) escreveu em 1776 o livro “A Riqueza das Nações”, nessa obra (que é considerada a obra fundadora da ciência econômica), Smith afirma que o individualismo é bom para toda a sociedade.<br>
<br>
Para ele, o Estado deveria interferir o mínimo possível na economia. Adam Smith também considerava que as atividades que envolvem o trabalho humano são importantes e que a indústria amplia a divisão do trabalho aumentando a produtividade, ou seja, cada um deve se especializar em uma só tarefa para que o trabalho renda mais.<br>
<br>
A Revolução Industrial trouxe riqueza para os burgueses; porém, os trabalhadores viviam na miséria.<br>
<br>
Muitas mulheres e crianças faziam o trabalho pesado e ganhavam muito pouco, a jornada de trabalho variava de 14 a 16 horas diárias para as mulheres, e de 10 a 12 horas por dia para as crianças.<br>
<br>
Enquanto os burgueses se reuniam em grandes festas para comemorar os lucros, os trabalhadores chegavam à conclusão que teriam que começar a lutar pelos seus direitos.<br>
<br>
O chamado Ludismo foi uma das primeiras formas de luta dos trabalhadores. O movimento ludita era formado por grupos de trabalhadores que invadiam as fábricas e quebravam as máquinas.<br>
<br>
Os ludistas conseguiram algumas vitórias, por exemplo, alguns patrões não reduziram os salários com medo de uma rebelião.<br>
<br>
Além do ludismo , surgiram outras organizações operárias, além dos sindicatos e das greves.<br>
<br>
Em 1830, formou-se na Inglaterra o movimento cartista. Os cartistas redigiram um documento chamado “Carta do Povo” e o enviaram ao parlamento inglês. A principal reivindicação era o direito do voto para todos os homens (sufrágio universal masculino), mas somente em 1867 esse direito foi conquistado.<br>
<br>
Thomas Malthus foi um economista inglês que afirmava que o crescimento da população era culpa dos pobres que tinham muitos filhos e não tinham como alimentá-los. Para ele, as catástrofes naturais e as causadas pelos homens tinham o papel de reduzir a população, equilibrando, assim, a quantidade de pessoas e a de comida.<br>
<br>
Além disso, Malthus criticava a distribuição de renda. O seu raciocínio era muito simples: os responsáveis pelo desenvolvimento cultural eram os ricos e cobrar impostos deles para ajudar os pobres era errado, afinal de contas era a classe rica que patrocinava a cultura.<br>
<br>
O Parlamento inglês (que aparentemente pensava como Malthus) adotou, em 1834, uma lei que abolia qualquer tipo de ajuda do governo aos pobres. A desculpa usada foi a que ajudando os pobres, a preguiça seria estimulada. O desamparo serviria como um estímulo para que eles procurassem emprego.<br>
<br>
A revolução Industrial mudou a vida da humanidade.<br>
<br>
A vida nas cidades se tornou mais importante que a vida no campo e isso trouxe muitas consequências: nas cidades os habitantes e trabalhadores moravam em condições precárias e conviviam diariamente com a falta de higiene, isso sem contar com o constante medo do desemprego e da miséria.<br>
<br>
Por um outro lado, a Revolução Industrial estimulou os pesquisadores, engenheiros e inventores a aperfeiçoar a indústria. Isso fez com que surgisse novas tecnologias: locomotivas a vapor, barcos a vapor, telégrafo e a fotografia.
<br><br>
<img src="./imagens/revind.jpg" width="38%" class="exemplor">

<Br>
Fonte: <a href="https://www.infoescola.com/historia/revolucao-industrial/" target="_blank">https://www.infoescola.com/historia/revolucao-industrial/</a>

</div>
</font>




<br><Br>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/eDDGqU9OgAc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" class="videomat" allowfullscreen></iframe> </iframe> </div> </div>

        
      <br><br><br><br>
    </font>
  </font>
</div>
</ul>

</div>
          <button class="button button1" onclick="window.location.href='./exerciciorevind.php'"><div style="text-decoration: none;"><font color="white">Exercicios</div>
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
