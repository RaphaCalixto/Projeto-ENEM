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
    <title>Exercícios</title>
    <link rel="shortcut icon" href="./imagens/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="estrutura/estrutura.css" />
    <link rel="stylesheet" type="text/css" href="../rodape/rodape.css" />
    <link rel="stylesheet" type="text/css" href="./butaoresponder.css" />
        <link rel="stylesheet" type="text/css" href="./option.css" />
     <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Cherry+Swash'>
      <link rel="stylesheet" href="icones/icones.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="../testemenu/css/styles.css">
    <link rel="stylesheet" href="./redire.css">
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

<form id="select" method="POST" action="gabfigladm.php?q=1">


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
}

sup, sub {
font-size:0.8em;
}

</style>

<br><br><br>
<div class="alert">
<strong><p>Você será redirecionado em <span id="timeLeft"></span> segundos.</p></strong>
</div>

<script>
(function(window, document, undefined){
  'use strict';

  document.addEventListener('DOMContentLoaded', function(event) {

    var time = 120;
    var $timeLeft = document.getElementById('timeLeft');

    $timeLeft.innerHTML = time;



    var itv = setInterval(function(){
      $timeLeft.innerHTML = time--;

      if (time === 0) {
        clearTimeout(itv);
         alert("Seu tempo acabou!");
        location.href = './figl.php';
      }
    }, 1000);
  });
}(window, document));
</script>

<br><br><br>

<div class="conteudoos">
  <h2>EXERCÍCIOS</h2>
        </div>
        <Br>

        <div style="text-align:justify;justify-content:center; margin-left: 20px; margin-right: 20px;" align="center" >
        (UERJ) TEXTO II<br>

Já dois anos se passaram longe da pátria. Dois anos! Diria dois séculos. E durante este tempo tenho contado os dias e as horas pelas bagas do pranto que tenho chorado. Tenha embora Lisboa os seus mil e um atrativos, ó eu quero a minha terra; quero respirar o ar natal (...). Nada há que valha a terra natal. Tirai o índio do seu ninho e apresentai-o d’improviso em Paris: será por um momento fascinado diante dessas ruas, desses templos, desses mármores; mas depois falam-lhe ao coração as lembranças da pátria, e trocará de bom grado ruas, praças, templos, mármores, pelos campos de sua terra, pela sua choupana na encosta do monte, pelos murmúrios das florestas, pelo correr dos seus  rios. Arrancai a planta dos climas tropicais e plantai-a na Europa: ela tentará reverdecer, mas cedo pende e murcha, porque lhe falta o ar natal, o ar que lhe dá vida e vigor. Como o índio, prefiro a Portugal e ao mundo inteiro, o meu Brasil, rico, majestoso, poético, sublime. Como a planta dos trópicos, os climas da Europa enfezam-me a existência, que sinto fugir no meio dos tormentos da saudade.
<br><br>
(Abreu, Casimiro de. Obras de Casimiro de Abreu. Rio de Janeiro: MEC, 1955.) 
<br><br>
A "hipérbole" é uma figura de linguagem empregada quando há intenção de engrandecer ou diminuir exageradamente a verdade das coisas, dos fatos.  A alternativa em que se usa a hipérbole como conotação do sofrimento do narrador do texto II, pela duração de sua permanência fora do Brasil, é:
<br><br>
  <label class="container">A) "Já dois anos se passaram longe da pátria."
  <input id="questao-A" name="questao" type="radio" autocomplete="off" value="A"  required="required" />
 <span class="checkmark"></span>
  <label for="questao-A">
<br>
 </label>
</label>

<label class="container">B) "Já dois anos se passaram longe da pátria. Dois anos!"
 <input id="questao-B" name="questao" type="radio" autocomplete="off" value="B" required="required" />
  <span class="checkmark"></span>
<label for="questao-B">
<br>
</label>
</label>

<label class="container">C) "Diria dois séculos."
<input id="questao-C" name="questao" type="radio" autocomplete="off" value="C"  required="required"/>
  <span class="checkmark"></span>
<label for="questao-C">
<br>
</label>
</label>

<label class="container">D) "E durante este tempo tenho contado os dias e as horas..."
<input id="questao-D" name="questao" type="radio" autocomplete="off" value="D"  required="required" />
  <span class="checkmark"></span>

<label for="questao-D">
<br>
</label>
</label>

<label class="container">E) "[...] o ar que lhe dá vida e vigor."
<input id="questao-E" name="questao" type="radio" autocomplete="off" value="E"  required="required" />
  <span class="checkmark"></span>

<label for="questao-E">

</label></label>
<input  name="gabarito" type="hidden" value="C" />
<br> 
    <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
  
    </form> 

<br><Br>

 O Adeus<br>
Rubem Braga<br>
<br>
        No oitavo dia sentimos que tudo conspirava contra nós. Que importa a uma grande cidade que haja um apartamento fechado em alguns de seus milhares de edifícios; que importa que lá dentro não haja ninguém, ou que um homem e uma mulher ali estejam, pálidos, se movendo na penumbra como dentro de um sonho?
       Entretanto a cidade, que durante uns dois ou três dias parecia nos haver esquecido, voltava subitamente a atacar. O telefone tocava, batia dez, quinze vezes, calava-se alguns minutos, voltava a chamar; e assim três, quatro vezes sucessivas.
      Alguém vinha e apertava a campainha; esperava; apertava outra vez; experimentava a maçaneta da porta; batia com os nós dos dedos, cada vez mais forte, como se tivesse certeza de que havia alguém lá dentro. Ficávamos quietos, abraçados, até que o desconhecido se afastasse, voltasse para a rua, para a sua vida, nos deixasse em nossa felicidade que fluía num encantamento constante. (...)
Texto extraído do livro "Figuras do Brasil – 80 autores em 80 anos de Folha", Publifolha – São Paulo, 2001, pág. 132.

(UERJ 2008) Figuras de linguagem – por meio dos mais diferentes mecanismos – ampliam o significado de palavras e expressões, conferindo novos sentidos ao texto em que são usadas. A alternativa que apresenta uma figura de linguagem construída a partir da equivalência entre um todo e uma de suas partes é: <br><br>

  <form id="select" method="post" action="gabfigladm.php?q=2">
          <br>  
        <div>
          <label class="container">A) “que um homem e uma mulher ali estejam, pálidos, se movendo na penumbra como dentro de um sonho?”
  <input id="questao-A" name="questao" type="radio" autocomplete="off" value="A" required="required" />
            <span class="checkmark"></span>
        <label for="questao-A">
        </label></div></label>
<div>
          <label class="container">B)  “Entretanto a cidade, que durante uns dois ou três dias parecia nos haver esquecido, voltava subitamente a atacar.”
        <input id="questao-B" name="questao" type="radio" autocomplete="off" value="B" required="required" />
                    <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) “batia com os nós dos dedos, cada vez mais forte, como se tivesse certeza de que havia alguém lá dentro.”
        <input id="questao-C" name="questao" type="radio" autocomplete="off" value="C" required="required" />
         <span class="checkmark"></span>
        <label for="questao-C"></label></div></label>
<div>
            <label class="container">D) “Mas naquela manhã ela se sentiu tonta, e senti também minha fraqueza;”
        <input id="questao-D" name="questao" type="radio" autocomplete="off" value="D" required="required" />
        <span class="checkmark"></span>
        <label for="questao-D"></label></div></li></label>
        <div>
            <label class="container">E) "batia com os nós dos dedos, cada vez mais forte, como se tivesse certeza de que havia alguém lá dentro."
        <input id="questao-E" name="questao" type="radio" autocomplete="off" value="E" required="required" />
        <span class="checkmark"></span>
        <label for="questao-E"></label></div></li></label>
        
        <br>
        <input  name="gabarito" type="hidden" value="B" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
  
    </form>

<br><Br>
  (UERJ – 2º EXAME DE QUALIFICAÇÃO – 2013)<Br>
Com base no texto abaixo, responda à questão.<Br>
                   IGUAL – DESIGUAL<Br>
Eu desconfiava:<Br>
todas as histórias em quadrinho são iguais.<Br>
Todos os filmes norte-americanos são iguais.<Br>
Todos os best-sellers são iguais<Br>
Todos os campeonatos nacionais e internacionais de futebol são
iguais.<Br>
Todos os partidos políticos <Br>
são iguais.
Todas as mulheres que andam na moda
são iguais.<Br>
Todas as experiências de sexo
são iguais.<Br>
Todos os sonetos, gazéis, virelais, sextinas e rondós são iguais
e todos, todos
os poemas em verso livre são enfadonhamente iguais.<Br>
<Br>
Todas as guerras do mundo são iguais.<Br>
Todas as fomes são iguais.<Br>
Todos os amores, iguais iguais iguais.<Br>
Iguais todos os rompimentos<Br>
A morte é igualíssima.<Br>
Todas as criações da natureza são iguais.<Br>
Todas as ações, cruéis, piedosas ou indiferentes, são iguais.<Br>
Contudo, o homem não é igual a nenhum outro  homem, bicho ou coisa.<Br>
Ninguém é igual a ninguém.<Br>
Todo ser humano é um estranho
Impar.<Br>
<Br>
                              (Carlos Drummond de Andrade – Nova reunião)<Br>
<Br>
Os versos livres são aqueles que não se submetem a um padrão<Br>
Considerando essa definição, identifica-se nos versos 15 – 16  a figura de linguagem - mas<Br><br>

  <form id="select" method="post" action="gabfigladm.php?q=3">
          <br>  
        <div>
            <label class="container">A) antítese
  <input id="questao-A" name="questao" type="radio" autocomplete="off" value="A" required="required" />
          <span class="checkmark"></span>
        <label for="questao-A"></label></label></div>
<div>
          <label class="container">B) metáfora
        <input id="questao-B" name="questao" type="radio" autocomplete="off" value="B" required="required" />
                  <span class="checkmark"></span>
        <label for="questao-B"></label></div></label>
<div>
          <label class="container">C) metonímia
        <input id="questao-C" name="questao" type="radio" autocomplete="off" value="C" required="required" />
        <span class="checkmark"></span>
        <label for="questao-C"></label></div>
<div>
            <label class="container">D) eufemismo
        <input id="questao-D" name="questao" type="radio" autocomplete="off" value="D" required="required" />
                <span class="checkmark"></span>
        <label for="questao-D"></label></div></li>
        <div>
            <label class="container">E) hipérbole
        <input id="questao-E" name="questao" type="radio"  autocomplete="off" value="E" required="required" />
                        <span class="checkmark"></span>
        <label for="questao-E"></label></div></li></label>
        
        <br>
        <input  name="gabarito" type="hidden" value="A" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
  
    </form>

    <br><Br>
  (UERJ – 2º EXAME DE QUALIFICAÇÃO – 2004)<br>
                    PARADOXO<br>
“Paradoxo” é um modo de expressão que encontra à margem da “doxa”- mas então se torna necessário definir doxa. Doxa pode ser explicado como a opinião de toda a gente, o conhecimento do senso comum, habitual. Logo, um paradoxo é a expressão de um raciocínio que não segue a lógica do senso comum.
Há vários tipos de paradoxo. Entre os mais famosos, encontramos aquele que foi formulado pelo grego Epimênides: “todos os cretenses são mentirosos”. Como Epimênides era cretense, constitui-se em um paradoxo: se a afirmação é correta. Epimênides, por ser cretense, está mentindo; se Epimênides está mentindo, a afirmação, entretanto, deveria ser falsa. Este paradoxo e um outro, de Macedonio Fernandes – “neste mundo faltam tantas coisas que, se faltasse mais uma, não haveria lugar para ela” –, não se podem classificar nem como falsos, nem como verdadeiros. [...]
<br>
                                (Dicionário de Termos Literários)<br>
<br>
A descrição do paradoxo formulada pelo grego Epimênides (2º parágrafo) mostra a dificuldade de se atribuir o juízo de falso ou verdadeiro a esse tipo de informação.<br>
<br>
Em “todos os cretenses são mentirosos”, um exemplo de paradoxo, a dificuldade de julgar o conteúdo como falso ou verdadeiro ocorre porque:<br><br>

  <form id="select" method="post" action="gabfigladm.php?q=4">
          <br>  
        <div>
          <label class="container">A) o enunciador da frase pertence ao conjunto dos cretenses
  <input id="questao-A" name="questao" type="radio" autocomplete="off" value="A" required="required" />
  <span class="checkmark"></span>
        <label for="questao-A"></label></div></label>
<div>
          <label class="container">B) uma definição generalizante é passível de interpretações contraditórias
        <input id="questao-B" name="questao" type="radio" autocomplete="off" value="B" required="required" />
            <span class="checkmark"></span>
        <label for="questao-B"></label></div>
<div>
          <label class="container">C) a avaliação acerca da veracidade da afirmação depende de cada interlocutor
        <input id="questao-C" name="questao" type="radio" autocomplete="off" value="C" required="required" />
            <span class="checkmark"></span>
        <label for="questao-C"></label></div>
<div>
          <label class="container">D) a noção de verdade contida na frase é referente a um ponto de vista particular
        <input id="questao-D" name="questao" type="radio" autocomplete="off" value="D" required="required" />
            <span class="checkmark"></span>
        <label for="questao-D"></label></div></li>
        <div>
            <label class="container">E) porque há uma contradição de idéias entre os cretenses.
        <input id="questao-E" name="questao" type="radio" autocomplete="off" value="E" required="required" />
            <span class="checkmark"></span>
        <label for="questao-E"></label></div></li>
        
        <br>
        <input  name="gabarito" type="hidden" value="A" />
      <button class="button button2" name="Responder" type="submit" value="Responder" required />Responder</button>
      
      
  
    </form> 
</div>

<script language='javascript' type='text/javascript'>alert('Seja bem-vindo a nossa tela de estudos. Você terá 2 minutos para fazer cada exercício, ou mais caso consiga! Boa sorte!');</script>

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
