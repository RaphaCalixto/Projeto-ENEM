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
    <title>Óptica</title>
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
  <h2>ÓPTICA</h2>
        </div>
        <div>
          <div>
            <ul>
              <br>
              <div style="text-align:justify;justify-content:center; margin-left: 20px; margin-right: 20px;" align="center">
          <font face="Anson"><font size="4" color="black">Óptica é a parte da Física responsável pelo estudo dos fenômenos associados à luz. <br>
Os estudos de Óptica são divididos em duas partes:<br>
<b>• Óptica geométrica:</b> <br>
   É a área de estudo desse ramo da Física que se concentra na propagação da luz por meio dos raios de luz. Assim, os fenômenos abrangidos por essa área são a propagação retilínea da luz, a reflexão da luz, a refração da luz, os espelhos e as lentes.<br>
<br>
<b>• Óptica física:</b> <br>
   É a área que tem como objetivo se concentrar no comportamento da luz enquanto onda. Assim, os fenômenos estudados por essa área são a emissão de luz, a composição, a absorção, a polarização, a interferência e a difração da luz.<br><br>

<img src="./imagens/optica.jpg" width="38%" class="exemplor">

<br><br>
<b>Princípios da Óptica:</b> <br>
<br>
• Princípio da Propagação Retilínea: diz que a luz sempre se propaga em linha reta;<br>
 

• Princípio da Independência de Raios de Luz: diz que os raios de luz são independentes, podendo se cruzar, o que não ocasiona nenhum tipo de mudança em relação à direção seguida por eles;<br>

 

• Princípio da Reversibilidade da Luz: diz que atesta que a luz é reversível. Isso significa que, por exemplo, quando vemos alguém por meio de um espelho, com toda certeza essa pessoa também será capaz de nos ver. Assim, raios de luz sempre serão capazes de fazer exatamente o mesmo caminho na direção inversa.<br>
 

<br>
A luz pode se propagar em três tipos diferentes de meios:<br>
<br>
• Transparentes: são meios em que a luz o percorre em trajetórias bem definidas. Ou seja, a luz passa por esse meio regularmente. Ex: água.<br>
• Translúcidos: a luz não passa por eles com tanta facilidade como nos meios transparentes, sua trajetória não é regular. Ex: papel, manteiga, vidro fosco, as nuvens. <br>
• Opacos: a luz não se propaga. Esses meios absorvem e refletem essa luz, a luz absorvida é transformada em outras formas de energia. Ex: madeira, papelão. <br>
<br>
Reflexão da Luz<br>
Lei da Refração<br>
i = r<br>
<br>
Onde:<br>
i = ângulo de incidência<br>
r = ângulo de reflexão<br>

<br>

<b>Espelhos</b><br>
<br>
Espelhos planos: A imagem virtual é direta e de tamanho igual ao objeto.<br>
Espelhos convexos e lentes convergentes: A imagem virtual é direta e menor que o objeto.<br>
<br>
<b>Associação de espelhos planos</b><br>
n = 360º / α – 1<br>
<br>
Onde:<br>
n = número de imagens<br>
α = ângulo de abertura entre os espelhos<br>
<br>
Equação de Gauss<br>
1 / f = 1 / di + 1 / do<br>
<br>
Onde:<br>
f = distância focal<br>
di = distância da imagem<br>
do = distância do objeto<br>
<br>
<b>Ampliação</b><br>
A = f / f – do<br>
<br>
Onde:<br>
A = ampliação<br>
f = distância focal<br>
do = distância do objeto<br>
Refração da Luz<br>
Índice de refração absoluto em um meio<br>
nm = c / vm<br>
<br>
Onde:<br>
nm = índice de refração no meio<br>
c = velocidade da luz no vácuo<br>
vm = velocidade da luz no meio<br>


<br>
Fonte: <a href="https://brasilescola.uol.com.br/fisica/optica.htm" target="_blank">https://brasilescola.uol.com.br/fisica/optica.htm</a>


</div>
</font>




<br><Br>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/mqjWQYX6hxs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" class="videomat" allowfullscreen></iframe> </iframe> </div> </div>

        
      <br><br><br><br>
    </font>
  </font>
</div>
</ul>

</div>
          <button class="button button1" onclick="window.location.href='./exercicioopticaadm.php'"><div style="text-decoration: none;"><font color="white">Exercicios</div>
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
