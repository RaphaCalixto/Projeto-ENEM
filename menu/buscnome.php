<?php
include("../conexao.php"); // caminho do seu arquivo de conexão ao banco de dados

?>


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
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="estrutura/estrutura.css" />
    <link rel="stylesheet" type="text/css" href="sair/sair.css" />
            <link rel="stylesheet" type="text/css" href="./botao.css" />
        <link rel="stylesheet" type="text/css" href="./butpesquisa.css" />
    <link rel="stylesheet" type="text/css" href="rodape/rodape.css" />
     <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Cherry+Swash'>
      <link rel="stylesheet" href="icones/icones.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="../testemenu/css/styles.css">
        <script src="testemenu/js/responsive-nav.js"></script>

</head>

<body>
<style>
  

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
  }


@media all and (max-width : 500px){

.enem {
  width: 100%;
  height: auto;
background-position: center;
background-size: cover;
background-repeat: no-repeat;
}
}

@media all and (min-width: 800px) and (max-width : 1900px){

.enem {
  width: 50%;
  height: auto;
background-position: center;
background-size: cover;
background-repeat: no-repeat;
}

</style>


<form name="f1" method="post" action="relbusca.php">


<header>
      <a href="../index2.php" class="logo"  data-scroll><img src="../imagens/190x33.png" ></a>
       <ul class="nav">
      <nav class="nav-collapse">
        <ul>
           <li class="menu-item active"><a href="../index2adm.php" data-scroll>Inicio</a></li>
          <li class="menu-item"><a href="./enemadm.php" data-scroll>ENEM</a></li>
          <li class="menu-item"><a href="./materiasadm.php" data-scroll>Matérias</a></li>
          <li class="menu-item"><a href="./trocasenhaadm.php" data-scroll>Trocar Senha</a>
          <li class="menu-item"><a href="./contato2adm.php" data-scroll>Contato</a></li>
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



</style>

<br><br>

<div class="conteudoos">
  <h2>BUSCA DE CADASTRO</h2>
  <br>
        </div>
        <div>
          <div>
            <ul>
              <div style="text-align:center;justify-content:center; " align="center">
          <font face="Arial"><font size="4" color="black">
</div>
  <br> </div>
</font></font>
</div>
</div>
</ul>

<style>

#busca {
margin:0 auto;
padding:0;
}
#txtbusca {
border:0px solid #222;
background:#EEE;
width:260px;
height:23px;
margin:0 auto;
padding:5px 0 5px 5px;
float:center; // posição do campo
line-height:36px; // altura da linha
}
#btnBusca {
background:#00cccc;
position:relative;
border:0px solid #222;
color:#FFF; 
margin:0 auto;
padding:10px;
border:0 none;
font-size:11px;
font-weight:bold;
text-transform:uppercase;
}
#btnBusca:hover {
background:#99cccc; 
}

</style>

<center>
<div id='busca'>
    <input id="txtbusca" type="text" name="nome" placeholder="Digite o nome do cadastrado." required autocomplete="off" />
    <input id="btnBusca" type="submit"  value="Ok"/>
</form>
</div>
</center>






<br><br><br><br><br><br><br><br><Br><br><br><br><br><Br><br><br><Br><br><br>
<div id= "corpo_pagina">
  <font color="white">
      <center>© Todos os direitos autorais ao grupo Focus.</center>
      <h3><center>Contate-nos: projsemduvidas@gmail.com</center></h3>
      <center><h5>Lemos de Castro, 2019.</h5></center>
    </font>
</div>

</body>
</html>
