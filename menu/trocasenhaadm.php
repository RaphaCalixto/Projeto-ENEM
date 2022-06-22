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
    <title>Troca de senha</title>
    <link rel="stylesheet" type="text/css" href="estrutura/estrutura.css" />
    <link rel="stylesheet" type="text/css" href="sair/sair.css" />
    <link rel="shortcut icon" href="./imagens/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="rodape/rodape.css" />
    <link rel="stylesheet" type="text/css" href="./butpesquisa2.css" />
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
</style>


<header>
      <a href="../index2.php" class="logo"  data-scroll><img src="../imagens/190x33.png" ></a>
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
  font-family: "Glyphicons Halflings Regular";

}

.esquerda a:hover {
    text-decoration: none;
  border: none;
  color: rgba(30, 41, 255, .9);
}

.button3 {
  background-color: #FF851C; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}


.button4:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

</style>

<style>
  #pass {
  width: 150px;
  padding-right: 20px;
}

.olho {
  cursor: pointer;
  left: 160px;
  position: absolute;
  width: 43px;
  top:250px;
  margin-left: 49%;
}
</style>

<script>
  function mascara(i){
   
   var v = i.value;
   
   if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
      i.value = v.substring(0, v.length-1);
      return;
   }
   
   i.setAttribute("maxlength", "14");
   if (v.length == 3 || v.length == 7) i.value += ".";
   if (v.length == 11) i.value += "-";

}
</script>

<script>

function blockKeyCTRL(evt) {
    if ( evt.keyCode == 17 ) return false;
    else return true;
}
</script>

<script>
function soNum(e,args)
{
if (document.all){var evt=event.keyCode;} // caso seja IE
else{var evt = e.charCode;} // do contrário deve ser Mozilla
var valid_chars = '0123456789abcdefghijlmnopqrstuvxzwykABCDEFGHIJLMNOPQRSTUVXZWYK'+args; // criando a lista de teclas permitidas
var chr= String.fromCharCode(evt); // pegando a tecla digitada
if (valid_chars.indexOf(chr)>-1 ){return true;} // se a tecla estiver na lista de permissão permite-a
// para permitir teclas como <BACKSPACE> adicionamos uma permissão para
// códigos de tecla menores que 09 por exemplo (geralmente uso menores que 20)
if (valid_chars.indexOf(chr)>-1 || evt < 14){return true;} // se a tecla estiver na lista de permissão permite-a
alert('Não é permitido o uso de caracteres especiais nem a barra de espaço!'); return false; // do contrário nega
}
</script>

<br><br>

<form action="../visitante/senhanovaadm.php" method="post">

<div class="conteudoos">
  <h2>TROCAR SENHA</h2>
        </div>
        <br>
<center>
<div id='busca'>
            
          <input oninput="mascara(this)" type="text" onKeyDown='blockKeyCTRL(event);' oncontextmenu="return false" onkeypress="return soNum(event);"  class="txtbusca" name="cpf" placeholder="Digite seu CPF" onkeyup="this.value=this.value.replace(/[' ']/g,'')" ondragstart="return false" onselectstart="return false" onpaste="return false" autocomplete="off" size="14" required> 
<br><br>
          <input type="password" id="nsenha" class="txtbusca" onKeyDown='blockKeyCTRL(event);' oncontextmenu="return false" onkeypress="return soNum(event);"  name="nsenha" placeholder="Digite sua nova senha desejada" onkeyup="this.value=this.value.replace(/[' ']/g,'')" ondragstart="return false" onselectstart="return false" onpaste="return false" autocomplete="off" size="50" required> 

</div>
<img src="./imagens/olho4.png" id="nsenha"  onclick="mostrarSenha()" class="olho">
<br>
<button class="button3 button4">Confirmar</button>

<br><br><br><br><br><br><br><br><br><br><br>
<div id= "corpo_pagina">
  <font color="white">
      <center>© Todos os direitos autorais ao grupo Focus.</center>
      <h3><center>Contate-nos: projsemduvidas@gmail.com</center></h3>
      <center><h5>Lemos de Castro, 2019.</h5></center>
    </font>
</div>

<script>
      function mostrarSenha(){
        var tipo = document.getElementById("nsenha");
        if(tipo.type == "password"){
          tipo.type = "text";
        }else{
          tipo.type = "password";
        }
      }
    </script>


</body>
</html>
