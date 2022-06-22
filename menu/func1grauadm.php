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
    <title>Função do 1º Grau</title>
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
  <h2>FUNÇÃO DO 1º GRAU</h2>
        </div>
        <div>
          <div>
            <ul>
              <br>
              <div style="text-align:justify;justify-content:center; margin-left: 20px; margin-right: 20px;" align="center">
          <font face="Anson"><font size="4" color="black">O estudo das funções é importante, uma vez que elas podem ser aplicadas em diferentes circunstâncias: nas engenharias, no cálculo estatístico de animais em extinção, etc.<br>
O significado de função é intrínseco à matemática, permanecendo o mesmo para qualquer tipo de função, seja ela do 1° ou do 2° grau, ou uma função exponencial ou logarítmica. Portanto, a função é utilizada para relacionar valores numéricos de uma determinada expressão algébrica de acordo com cada valor que a variável x assume.<br>
Sendo assim, a função do 1° grau relacionará os valores numéricos obtidos de expressões algébricas do tipo (ax + b), constituindo, assim, a função f(x) = ax + b.<br>

 <br>

Note que para definir a função do 1° grau, basta haver uma expressão algébrica do 1° grau. Como dito anteriormente, o objetivo da função é relacionar para cada valor de x um valor para o f(x). Vejamos um exemplo para a função f(x)= x – 2.<br><br>
x = 1, temos que f(1) = 1 – 2 = –1<br>
x = 4, temos que f(4) = 4 – 2 = 2<br>
Note que os valores numéricos mudam conforme o valor de x é alterado, sendo assim obtemos diversos pares ordenados, constituídos da seguinte maneira: (x, f(x)). Veja que para cada coordenada x, iremos obter uma coordenada f(x). Isso auxilia na construção de gráficos das funções.<br>
Portanto, para que o estudo das funções do 1° grau seja realizado com sucesso, compreenda bem a construção de um gráfico e a manipulação algébrica das incógnitas e dos coeficientes.<br>

<Br>
<img src="./imagens/func1grau.gif" width="38%" class="exemplor">
<br>
Fonte: <a href="https://brasilescola.uol.com.br/matematica/funcao-de-primeiro-grau.htm" target="_blank">https://brasilescola.uol.com.br/matematica/funcao-de-primeiro-grau.htm</a>


</div>
</font>




<br><Br>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Vm9fhS2DvwA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"  class="videomat" allowfullscreen></iframe> </iframe> </div> </div>

        
      <br><br><br><br>
    </font>
  </font>
</div>
</ul>

</div>
          <button class="button button1" onclick="window.location.href='./exerciciofunc1grauadm.php'"><div style="text-decoration: none;"><font color="white">Exercicios</div>
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
