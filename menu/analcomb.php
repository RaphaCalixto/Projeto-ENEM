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
    <title>Análise Combinatória</title>
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
  width: 50%;
  height: auto;
background-position: center;
background-size: cover;
background-repeat: no-repeat;
}

}

</style>

<br><br><br>

<div class="conteudoos">
  <h2>ANÁLISE COMBINATÓRIA</h2>
        </div>
        <div>
          <div>
            <ul>
              <br>
              <div style="text-align:justify;justify-content:center; margin-left: 20px; margin-right: 20px;" align="center">
          <font face="Anson"><font size="4" color="black">Análise combinatória é um estudo realizado na matemática e na lógica, responsável pela análise das possibilidades e das combinações. Observe alguns exemplos de exercícios que são resolvidos utilizando análise combinatória.<br>
<br>
Se quiser saber quantos números de quatro algarismos são formados com os algarismos 1, 2, 3, 4, 5, 6, 7 e 9, é preciso aplicar as propriedades da análise combinatória.<br>
<br>
Um homem possui cinco camisas, quatro calças, três paletós e dois pares de sapatos. De quantos modos diferentes ele pode se vestir? Para saber essas combinações é necessário utilizar as propriedades da análise combinatória.<br>
<br>
Para efetuar os cálculos desses problemas, devemos estudar algumas propriedades da análise combinatória:<br>

- Princípio fundamental da contagem<br>
- Fatorial<br>
- Arranjos simples<br>
- Permutação simples<br>
- Combinação<br>
- Permutação com elementos repetidos<br>
Confira a seguir uma definição resumida de cada tópico estudo pela análise combinatória.<br>
<br>
<b>Princípio fundamental da contagem</b><br>
Determina o número total de possibilidade de um evento ocorrer, pelo produto de m x n. Sendo n e m resultados distintos de um evento experimental.<br>
Exemplo: Jeniffer precisa comprar uma saia, a loja em que está possui 3 modelos de saia diferente nas cores: preto, rosa, azul e amarelo. Quantas opções de escolha Jeniffer possuí.<br>
Para solucionar essa questão utilizamos o principio fundamental da contagem.<br>
m = 3 (Modelos diferentes de saia), n = 4 (Cores que a saia possui)<br>
m x n = 3 x 4 = 12<br>
Jeniffer possui 12 possibilidades de escolha.<br>
<br>
<b>Fatorial</b><br>
O fatorial de um número qualquer, e representado pelo produto:<br>
n! = n . (n - 1) . (n - 2) . (n - 3) . ... . 1!<br>
Exemplo: Calcule 4!<br>
n! = n . (n - 1) . (n - 2) . (n - 3) . ... . 1!<br>
4! = 4 . (4 – 1) . (4 – 2) . (4 – 3)<br>
4! = 4 . 3. 2 . 1<br>
4! = 24<br>
<br>Permutação simples</b><br>
Na permutação os elementos que compõem o agrupamento mudam de ordem, ou seja, de posição. Determinamos a quantidade possível de permutação dos elementos de um conjunto, com a seguinte expressão:<br>
Pn = n!<br>
Pn = n . (n-1) . (n-2) . (n-3).....1!<br>
Exemplo: Em uma eleição para representante de sala de aula, 3 alunos candidataram-se: Vanessa, Caio e Flávia. Quais são os possíveis resultados dessa eleição?<br>
Vanessa (V), Caio (C), Flávia (F)<br>
Os possíveis resultados dessa eleição podem ser dados com uma permutação simples, acompanhe:<br>
n = 3 (Quantidade de candidatos concorrendo a representante)<br>
Pn = n!<br>
Pn = 3 . 2 . 1!<br>
Pn = 6<br>
Para a eleição de representante, temos 6 possibilidades de resultado, em relação a posição dos candidatos, ou seja, 1º, 2º e 3º lugar. Veja a seguir os possíveis resultados dessa eleição.<br>
Resultado 1	Resultado 2	Resultado 3	Resultado 4	Resultado 5	Resultado 6<br>
VCF	VFC	CVF	CFV	FCV	FVC<br>
<br>
<b>Permutação com repetição</b><br>
<br>
Nessa permutação alguns elementos que compõem o evento experimental são repetidos, quando isso ocorrer devemos aplicar a seguinte fórmula:
Pn(n1,n2,n3…nk)=n!n1!⋅n2!⋅n3!…nk!<br>
•	Pn(n1,n2,n3…nk) = permutação com repetição<br>
•	n! = total de elemetos do evento<br>
•	n1!⋅n2!⋅n3!…nk! = Elementos repetidos do evento<br>
Exemplo: Quantos anagramas são possíveis formar com a palavra CASA.<br>
A palavra CASA possui: 4 letras (n) e duas vogais que se repetem (n1).<br>
•	n! = 4!<br>
•	n1! = 2!<br>
Pn(n1)=n!n1!<br>
Pn(n1)=4!2!<br>
Pn(n1)=4⋅3⋅2⋅1!2⋅1!<br>
Pn(n1)=242=12<br>
Anagramas da palavra CASA sem repetição<br>
CASA	ACSA	ASCA	ASAC	SCAA	CSAA<br>
AASC	AACS	CAAS	SAAC	SACA	ACAS<br>
<b>Arranjo simples</b><br>
<br>
No arranjo simples a localização de cada elemento do conjunto forma diferentes agrupamentos, devemos levar em consideração, a ordem de posição do elemento e sua natureza, além disso, devemos saber que ao mudar os elementos de posição isso causa diferenciação entre os agrupamentos.<br>
Para saber a quantidade de arranjos possíveis em p agrupamento com n elementos, devemos utilizar a fórmula a seguir:<br>
An,p=n!(n−p)!<br>
•	A = Arranjo<br>
•	n = elementos<br>
•	p = Agrupamentos<br>
No arranjo a quantidade de agrupamento p, sempre deve ser menor que n, ou seja:<br>
p≤n<br>
Exemplo: Flávia, Maria, Gustavo e Pedro estão participando de uma competição em que há premiação para os três primeiros colocados (1º, 2º e 3º). Quais são as possibilidades de premiação?<br>
•	Quantidade de participantes da competição: n = 4<br>
•	Quantidade de pessoas em cada agrupamento (premiação): p = 3<br>
An,p=n!(n−p)!<br>
A4,3=4!(4−3)!<br>
A4,3=4⋅3⋅2⋅1!1!<br>
A4,3=241=24<br>
Existem 24 possibilidades de premiação.<br>

<br>
<b>Combinação simples</b><br>
<br>
Na combinação simples, em um agrupamento mudamos somente a ordem dos elementos distintos. Para que isso seja feito podemos recorrer à utilização da fórmula:<br>
Cn,p=n!p!⋅(n−p)!<br>
•	C = Combinação<br>
•	n = Elementos.<br>
•	p = Agrupamento<br>
Sendo sempre: p≤n<br>
Exemplo: De quantos modos diferentes posso separar 10 bolinhas de cores distintas, colocando 2 bolinhas em cada saquinhos<br>
•	Total de bolinhas: n = 1<br>
•	Quantidade de bolinhas por saquinho: p = 2<br>
Cn,p=n!p!⋅(n−p)!<br>
C10,2=10!2!⋅(10−2)!<br>
C10,2=36288002⋅(8)!<br>
C10,2=36288002⋅(40320)<br>
C10,2=362880080640=45<br>
Com 10 bolinhas distintas colocando duas em cada saquinho, é possível fazer 45 combinações.<br><br>


<img src="./imagens/analcomb.jpg" width="38%" class="exemplor">
<br>
Fonte: <a href="https://brasilescola.uol.com.br/matematica/analise-combinatoria.htm" target="_blank">https://brasilescola.uol.com.br/matematica/analise-combinatoria.htm</a>

</div>
</font>




<br><Br>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/AytTPFOKXdg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" class="videomat" allowfullscreen></iframe> </iframe> </div> </div>

        
      <br><br><br><br>
    </font>
  </font>
</div>
</ul>

</div>
          <button class="button button1" onclick="window.location.href='./exercicioanalcomb.php'"><div style="text-decoration: none;"><font color="white">Exercicios</div>
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
