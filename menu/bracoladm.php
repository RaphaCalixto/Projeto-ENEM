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
    <title>Brasil Colônia</title>
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
  <h2>BRASIL COLÔNIA</h2>
        </div>

        <div>
          <div>
            <ul>
              <br>
              <div style="text-align:justify;justify-content:center; margin-left: 20px; margin-right: 20px;" align="center">
          <font face="Anson"><font size="4" color="black">
            
            O Brasil Colônia é o período que dura entre os anos de 1530 a 1822, onde o Brasil é colônia de Portugal.<br>
            O início do Brasil Colônia foi o momento em que D. João III encaminhou Martim Afonso de Souza, em 1530, para realizar uma expedição colonizadora no litoral brasileiro. A finalidade foi estabelecer vilas e dividir lotes de terras para os donatários (pessoa que administrava terras que recebiam) explorarem metais preciosos e cultivassem a cana-de-açúcar. 
            <br><br>
            O trabalho de expedição de Martim Afonso de Souza estendeu-se do litoral de Pernambuco até o rio da Prata. Ele fundou no litoral paulista a primeira vila do Brasil, em 1532, denominada de Vila de São Vicente. <br>
            Depois disso, Portugal adotou uma medida para estabelecer o processo de colonização do Brasil: as Capitanias Hereditárias. Essa estratégia consistiu na divisão do país em 15 capitanias hereditárias, nas quais eram faixas de terras que abrangia o litoral brasileiro até o limite estabelecido pelo Tratado de Tordesilhas. Esse era um documento que atestava o acordo entre Portugal e Espanha sobre os limites das terras descoberta por ambos. 
            <br><br>
            <img src="./imagens/capit.jpg" width="38%" class="exemplor">
            <br><Br>
            Quem recebia os lotes eram denominados de donatários. Já os documentos que atestavam o direito de posse das terras eram denominadas carta de doação e floral.
            <br><br>
            A colonização foi bastante procurada pela busca de metais preciosos que contribuíram para a escolha de Portugal a colonizar o país. A Espanha havia descoberto ouro na América. Com isso, os portugueses estavam esperando encontrar essa pedra preciosa também em solo brasileiro.
            <br><br>
            A invasão holandesa foi um dos fatos que ameaçou o domínio português sobre o Brasil.
            Os holandeses haviam investido na produção de cana-de-açúcar no Brasil. No entanto, eles foram afastados dos negócios. Com isso, em 1624 tentaram invadir a colônia, no estado da Bahia, permanecendo até 1625. 
            O Brasil Colônia teve fim no dia 7 de setembro de 1822 quando D. Pedro declarou a Independência do Brasil.
            <br><br>
<img src="./imagens/bracol.jpg" width="38%" class="exemplor">

<Br>
Fonte: <a href="https://www.educamaisbrasil.com.br/enem/historia/brasil-colonia" target="_blank">https://www.educamaisbrasil.com.br/enem/historia/brasil-colonia</a>

</div>
</font>




<br><Br>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/oRLtfByWTnA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" class="videomat" allowfullscreen></iframe> </iframe> </div> </div>

        
      <br><br><br><br>
    </font>
  </font>
</div>
</ul>

</div>
          <button class="button button1" onclick="window.location.href='./exerciciobracoladm.php'"><div style="text-decoration: none;"><font color="white">Exercicios</div>
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
