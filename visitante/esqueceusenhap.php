<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
    <title>Esqueceu sua senha</title>
    <meta name="description" content="DESCRIPTION">
    <link rel="stylesheet" type="text/css" href="secao/secao.css" />
      <link rel="stylesheet" type="text/css" href="estilo.css" />
      <link rel="stylesheet" type="text/css" href="../rodape/rodape5.css" />
      <link rel="shortcut icon" href="../menu/imagens/favicon.ico" />
      <link rel="stylesheet" type="text/css" href="estiloprincipal.css" />
      <link rel="stylesheet" type="text/css" href="../principal/principal.css" />
      <link rel="stylesheet" type="text/css" href="../conteudo/conteudo.css" />
</head>

<body>

<style>


body {
  width: 100%;
  height: 155vh;
 background-image: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .7)), url(imagens/emat.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  display: table;
  font-family: sans-serif;
}

input {
  width: 100%;
  margin: 20px 0;
  background: rgba(0,0,0,0);
  border: none;
  border-bottom: 1px solid rgba(255, 165, 0, .9);
  color: #fff;
  font-size: 16px;
  letter-spacing: 2px;
}

::-webkit-input-placeholder {
  color: #eaeaea;
  font-size: 16px;
  letter-spacing: 2px;
}

button{
  padding: 20px 32px;
  font-size: 16px;
  background: rgba(255, 165, 0, .9);
  border: none;
  border-radius: 4px;
  margin-top: 30px;
  color: #fff;
}

@media all and (min-width: 300px) and (max-width: 1300px) {
  .cabecalho {
  position: absolute;
  text-align: center;
  top: 30%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.cabecalho h1 {
  color: #fff;
  font-size: 46px;
}

.cabecalho p {
  color: #fff;
  font-size: 16px;
  margin-bottom: 20px;
}
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

<form action="../portal2/esquecersenha.php" method="post">


    <div class="principal">
        <div class="nav">
            <div class="esquerda">
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>
            </div>
            <div class="direita">
                <ul>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="cadastro.php">Registrar</a></li>
                </ul>
            </div>
        </div>


        <div class="cabecalho">
                    <br><br><br><br><br><br>
            <h1>Esqueceu sua senha</h1>
            
            <p>Preencha os campos abaixo com seu E-mail e CPF respectivamente.</p>
        </div>

        <div class="forme">
            <form>
                    <br>
                <input type="email" name="email" placeholder="Digite seu E-mail" maxlength="50"  autocomplete="off" required>
                <input oninput="mascara(this)" type="text" onKeyDown='blockKeyCTRL(event);' oncontextmenu="return false" onkeypress="return soNum(event);" onkeyup="this.value=this.value.replace(/[' ']/g,'')" ondragstart="return false" onselectstart="return false" onpaste="return false" name="cpf" placeholder="Digite seu CPF" maxlength="32"  autocomplete="off" required>
                
                
            </form>
    <button class="button">Confirmar</button>
  <br><br>
        </div>
    </div>

<div id= "corpo_pagina">
  <font color="white">
      <center>© Todos os direitos autorais ao grupo Focus.</center>
      <h3><center>Contate-nos: projsemduvidas@gmail.com</center></h3>
      <center><h5>Lemos de Castro, 2019.</h5></center>
</div>
</font>

</body>

</html>
