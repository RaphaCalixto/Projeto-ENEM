<!DOCTYPE html>
<html lang="pt-br">

<head>

<?php
session_start();
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true) and (!isset ($_SESSION['adm']) == true) )
{
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  unset($_SESSION['adm']);

  header('location:../visitante/login.php');
  }
?>
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
    <title>Função do 2º grau</title>
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
          <li class="menu-item active"><a href="../index2adm.php" data-scroll>Inicio</a></li>
          <li class="menu-item"><a href="./enemadm.php" data-scroll>ENEM</a></li>
          <li class="menu-item"><a href="../menu/materiasadm.php" data-scroll>Matérias</a></li>
          <li class="menu-item"><a href="./trocasenhaadm.php" data-scroll>Trocar Senha</a></li>
          <li class="menu-item"><a href="../menu/contato2adm.php" data-scroll>Contato</a></li>
          <li class="menu-item"><a href="./cadastradosadm.php" data-scroll>Cadastrados</a></li>
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

<br><br><br>

<div class="conteudoos">
  <h2>FUNÇÃO DO 2º GRAU</h2>
        </div>
        <div>
          <div>
            <ul>
              <br>
              <div style="text-align:justify;justify-content:center; margin-left: 20px; margin-right: 20px;" align="center">
          <font face="Anson"><font size="4" color="black">Uma função é uma regra que liga cada elemento de um conjunto A a um único elemento de um conjunto B, respectivamente conhecidos como domínio e contradomínio da função. Para que a função seja chamada função do segundo grau, é necessário que sua regra (ou lei de formação) possa ser escrita na seguinte forma:<br>


f(x) = ax2 + bx + c<br>
ou<br>
y = ax2 + bx + c<br>

<br>
Além disso, a, b e c devem pertencer ao conjunto dos números reais e a ≠ 0. Dessa forma, são exemplos de função do segundo grau:<br>
a) f(x) = x2 + x – 6<br>
b) f(x) = – x2<br>

<br>

<b>Raízes da função do segundo grau</b><br>
<br>

As raízes de uma função são os valores assumidos por x quando f(x) = 0. Assim, para encontrá-las, basta substituir f(x) ou y por zero na função e resolver a equação resultante. Para resolver equações do segundo grau, podemos usar fórmula de Bháskara, método de completar quadrados ou qualquer outro método. Lembre-se: como a função é do segundo grau, ela deve ter até duas raízes reais distintas.
Exemplo – As raízes da função f(x) = x2 + x – 6 podem ser calculadas da seguinte forma:<br>
f(x) = x2 + x – 6<br>
0 = x2 + x – 6<br>
a = 1, b = 1 e c = – 6<br>
∆ = b2 – 4•a•c<br>
∆ = 12 – 4•1•(– 6)<br>
∆ = 1 + 24<br>
∆ = 25<br>
x = – b ± √∆/2a<br>
      
x = – 1 ± √25/2<br>
      
x = – 1 ± 5/2<br>
      
x’ = – 1 + 5/2 = 4 = 2/2<br>
             
x” = – 1 – 5/2 = – 6 = – 3/2<br>
            

Logo, as raízes da função f(x) = x2 + x – 6 são os pontos de coordenadas A = (2, 0) e B = (– 3, 0).<br>
<br>
<b>Vértice da função – Ponto máximo ou mínimo</b><br>
<br>
O vértice é o ponto no qual a função do segundo grau atinge seu valor máximo ou mínimo. Suas coordenadas V = (xv, yv) são dadas pelas fórmulas a seguir:<br>
xv = – b/2a<br>
e<br>
yv = – ∆/4a<br>
        <br>
No mesmo exemplo citado anteriormente, o vértice da função f(x) = x2 + x – 6 é obtido por:<br>
xv = – b/2a<br>
       <br>
xv = – 1/2.1<br>
        
xv = – 1/2
       <br>
xv = – 0,5<br>
e<br>
yv = – ∆/4a<br>
       <br>

yv = – 25/4.1<br>
        
yv = – 25/4
       <br>
yv = – 6,25<br>
Assim, as coordenadas do vértice dessa função são V = (– 0,5; – 6,25).<br>
A coordenada yv também pode ser obtida substituindo o valor de xv na própria função.<br>
<br>

<b>Gráfico da função do segundo grau</b><br>
<br>
O gráfico de uma função do segundo grau sempre será uma parábola. Existem alguns macetes envolvendo essa figura que podem ser usados para facilitar a construção do gráfico. Para exemplificar esses macetes, também usaremos a função f(x) = x2 + x – 6.<br>
1 – O sinal do coeficiente a está ligado à concavidade da parábola. Se a > 0 a concavidade da figura será voltada para cima, se a < 0 a concavidade da figura será voltada para baixo.<br>
Assim, no exemplo, como a = 1, que é maior que zero, a concavidade da parábola que representa a função f(x) = x2 + x – 6 será voltada para cima.<br>
2 – O coeficiente c é uma das coordenadas do ponto de encontro da parábola com o eixo y. Em outras palavras, a parábola sempre se encontra com o eixo y no ponto C = (0, c).<br>
No exemplo, o ponto C = (0, – 6). Então, a parábola passa por esse ponto.<br>

<br>



3 – Assim como no estudo dos sinais da equação do segundo grau, nas funções do segundo grau, o sinal do determinante aponta o número de raízes da função:<br>
Se ∆ > 0 a função tem duas raízes reais distintas.<br>
Se ∆ = 0 a função tem duas raízes reais iguais.<br>
Se ∆ < 0 a função não tem raízes reais.<br>
Dados esses macetes, será preciso encontrar três pontos pertencentes a uma função do segundo grau para construir o gráfico. Em seguida, basta marcar esses três pontos no plano cartesiano e desenhar a parábola que passa por eles. A saber, os tres pontos sao:
• O vértice e as raízes da função, se ela possuir raízes reais;<br>

• O vértice e dois outros pontos quaisquer, se a função não possuir raízes 
reais. Nesse caso, um ponto deve estar à esquerda e outro à direita do vértice da função no plano cartesiano.
Observe que um desses pontos pode ser C = (0, c), exceto no caso em que esse ponto for o próprio vértice.<br>


<img src="./imagens/func2grau.png" width="38%" class="exemplor">
<br>
Fonte: <a href="https://brasilescola.uol.com.br/o-que-e/matematica/o-que-e-funcao-segundo-grau.htm" target="_blank">https://brasilescola.uol.com.br/o-que-e/matematica/o-que-e-funcao-segundo-grau.htm</a>


</div>
</font>




<br><Br>
       <iframe width="560" height="315" src="https://www.youtube.com/embed/BtC-JXHA4QU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" class="videomat" allowfullscreen></iframe> </iframe> </div> </div>

        
      <br><br><br><br>
    </font>
  </font>
</div>
</ul>

</div>
          <button class="button button1" onclick="window.location.href='./exerciciofunc2grauadm.php'"><div style="text-decoration: none;"><font color="white">Exercicios</div>
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
