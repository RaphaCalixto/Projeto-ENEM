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
    <title>Figuras de Linguagem</title>
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
@media all and (max-width : 1200px) {


.videopt {
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

.exemplor {
  width: 100%;
}

}

@media all and (max-width : 1900px) {

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

@media all and (min-width: 800px) and (max-width : 1900px){

.exemplor {

width:45%;
height: auto;
background-position: center;
background-size: cover;
background-repeat: no-repeat;

}

}

</style>

<br><br><br>

<div class="conteudoos">
  <h2>FIGURAS DE LINGUAGEM</h2>
        </div>
        <div>
          <div>
            <ul>
              <br>
              <div style="text-align:justify;justify-content:center; margin-left: 20px; margin-right: 20px;"  align="center">
          <font face="Anson"><font size="4" color="black">Figuras de Linguagem, também chamadas de figuras de estilo, são recursos estilísticos usados para dar maior ênfase à comunicação e torná-la mais bonita.<br>
Dependendo da sua função, elas são classificadas em:<br>
Figuras de palavras ou semânticas: estão associadas ao significado das palavras. Exemplos: metáfora, comparação, metonímia, catacrese, sinestesia e perífrase.<br>
Figuras de pensamento: trabalham com a combinação de ideias e pensamentos. Exemplos: hipérbole, eufemismo, litote, ironia, personificação, antítese, paradoxo, gradação e apóstrofe.<br>
Figuras de sintaxe ou construção: interferem na estrutura gramatical da frase. Exemplos: elipse, zeugma, hipérbato, polissíndeto, assíndeto, anacoluto, pleonasmo, silepse e anáfora.<br>
Figuras de som ou harmonia: estão associadas à sonoridade das palavras. Exemplos: aliteração, paronomásia, assonância e onomatopeia.<br>
<br><br>
<img src="./imagens/figling3.jpg" width="40%" class="exemplor"> 
<br><br>
<B>Figuras de Palavras</b><br>
<br>
            Metáfora<br>
            <br>
Metáfora é uma figura de linguagem que consiste no uso de uma palavra ou expressão com o sentido de outra com a qual é possível estabelecer uma relação de analogia.<br>
A relação de semelhança entre dois termos ocasiona uma transferência de significados, estabelecida através de uma comparação implícita.<br>
Exemplos:     Minha prima é uma flor<br>
    A vida é uma nuvem que voa. (A vida é como uma nuvem que voa.)  <br>
    <br>
Comparação<br>
Chamada de comparação explícita, ao contrário da metáfora, neste caso são utilizados conectivos de comparação (como, assim, tal qual).
Exemplo: Seus olhos são como jabuticabas.<br>
<br>
 “É que teu riso penetra n'alma/Como a harmonia de uma orquestra santa.”<br>
“Avião parece passarinho/Que não sabe bater asa/Passarinho voando longe/Parece borboleta que fugiu de casa.”<br>

<br>
Metonímia<br>

Metonímia é a substituição de uma palavra por outra, quando entre ambas existe uma relação de proximidade de sentidos que permite essa troca. Ex.: O estádio aplaudiu o jogador.<br>
   Exemplo: Costumava ler Shakespeare. (Costumava ler as obras de Shakespeare.)<br>
<br>
Catacrese<br>
A catacrese representa o emprego impróprio de uma palavra por não existir outra mais específica.<br>
Exemplo:         Embarcou há pouco no avião.<br>

Embarcar é colocar-se a bordo de um barco, mas como não há um termo específico para o avião, embarcar é o utilizado.<br>
  <br>
Sinestesia<br>

É um termo que caracteriza a experiência sensorial de certos indivíduos nos quais sensações correspondentes a um certo sentido são associadas a outro sentido.<br>
Exemplo: Com aquele olhos frios, disse que não gostava mais da namorada.<br>

Eu me lembro daquela noite de Verão, e do aroma doce dos seus cabelos. <br>
<br>
Perífrase<br>

 É a substituição de uma ou mais palavras por outra que a identifique. <br>
Exemplo: O rugido do rei das selvas é ouvido a uma distância de 8 quilômetros. (O rugido do leão é ouvido a uma distância de 8 quilômetros.)       <br>
<br>
Figuras de Pensamento<br>
Hipérbole<br>

A hipérbole corresponde ao exagero intencional na expressão.<br>

Exemplo: Quase morri de estudar.  <br>                  
Estou morrendo de sede.<br>
Chorou rios de lágrimas. <br>
<br>
Eufemismo<br>

O eufemismo consiste na troca de termos ou expressões que possam ofender alguém por outras mais suaves, seja por serem indelicadas ou grosseiras.<br>
Exemplo:        Entregou a alma a Deus.<br>
                        "Ele subtraiu o celular do idoso no ônibus."<br>
<br>
Litote<br>

É uma figura de linguagem em que se afirma algo por meio da negação, ou seja, nega-se o contrário do que se deseja afirmar.<br>
Exemplo: — Não é que sejam más companhias… — disse o filho à mãe.<br>
Ela não canta mal. – Canta bem<br>
<br>
Ironia<br>

A ironia é a representação do contrário daquilo que se afirma.<br>
Exemplo: É tão inteligente que não acerta nada<br>
<br>

Personificação<br>

É a atribuição de qualidades e sentimentos humanos aos seres irracionais.<br>

Exemplo: O jardim olhava as crianças sem dizer nada.<br>
<br>

Antítese<br>

É o uso de termos que têm sentidos opostos.<br>
Exemplo: Toda guerra finaliza por onde devia ter começado: a paz.<br>
<br>
Paradoxo<br>
<br>
Representa o uso de ideias que têm sentidos opostos, não apenas de termos.<br>
Exemplo: Estou cego de amor e vejo o quanto isso é bom.<br>
<br>
Gradação
É a apresentação de ideias que progridem de forma crescente (clímax) ou decrescente (anticlímax).<br>
Exemplo: Inicialmente calma, depois apenas controlada, até o ponto de total nervosismo.<br>
<br>
Gradação<br>
É caracterizada pelas expressões que envolvem invocações, chamamentos e interpelações de um interlocutor.<br>
Exemplo: Inicialmente calma, depois apenas controlada, até o ponto de total nervosismo.<br>
Ó deus! Ó céus! Porque não me ligou? Padre, posso me confessar?<br>
<br>
<b>Figuras de Sintaxe</b><br>
<br>
Elipse<br>
A elipse é a omissão de uma palavra que se identifica de forma fácil.<br>
Exemplo: Tomara você me entenda (Tomara que você me entenda).<br>

<br>
Zeugma<br>
A zeugma é a omissão de uma palavra pelo fato de ela já ter sido usada antes.<br>
Exemplo: Fiz a introdução, ele a conclusão. (Fiz a introdução, ele fez a conclusão.)<br>

<br>
Hipérbato
O hipérbato é a alteração da ordem direta da oração.<br>
Exemplo: São como uns anjos os seus alunos. (Os seus alunos são como uns anjos.)<br>
<br>
Polissíndeto<br>
É uma figura de linguagem na língua portuguesa, que consiste no uso repetitivo e excessivo de algumas conjunções entre as orações de modo sequencial.<br>
Exemplo: As crianças falavam e cantavam e riam felizes.<br>
Canto, e canto o presente, e também o passado e o futuro.<br>
<br>
Assíndeto<br>
 Classifica a junção de diferentes orações sem o uso de conectivos, ou seja, separadas por vírgulas ou outros sinais de pontuação.
Exemplo: Não sopra o vento; não gemem as vagas; não murmuram os rios.<br>
Não posso sair; está nevando lá fora.<br>
Chegou atrasado; não tem problema.<br>
<br>
Anacoluto<br>

O anacoluto retira a função sintática de determinado termo ou expressão na oração ao alterar a estrutura da mesma. O anacoluto retira a função sintática de determinado termo ou expressão na oração ao alterar a estrutura da mesma.<br>
Exemplo: Eu, parece que estou ficando zonzo. (Parece que eu estou ficando zonzo.)<br>
<br>
Pleonasmo<br>
É a repetição da palavra ou da ideia contida nela para intensificar o significado.<br>
Exemplo: A mim me parece que isso está errado. (Parece-me que isto está errado.)<br>
<br>
Silepse<br>
É a concordância com o que se entende e não com o que está implícito. Ela é classificada em: silepse de gênero, de número e de pessoa.<br>
Exemplos:<br>
Vivemos na bonita e agitada São Paulo. (silepse de gênero: Vivemos na bonita e agitada cidade de São Paulo.)<br>
A maioria dos clientes ficaram insatisfeitas com o produto. (silepse de número: A maioria dos clientes ficou insatisfeita com o produto.)<br>
<br>
Anáfora<br>
A anáfora é a repetição de uma ou mais palavras de forma regular.<br>
Exemplo: Se você sair, se você ficar, se você quiser esperar. Se você “qualquer coisa”, eu estarei aqui sempre para você<br>
<br>
<b>Figuras de Som</b><br>
<br>
Aliteração<br>
É a repetição de sons consonantais.<br>
Exemplo: O rato roeu a roupa do rei de Roma.<br>
<br>
Paronomásia<br>
É a repetição de palavras cujos sons são parecidos.<br>
Exemplo: O cavaleiro, muito cavalheiro, conquistou a donzela. (cavaleiro = homem que anda a cavalo, cavalheiro = homem gentil)<br>

<br>
Assonância<br>
É a repetição de sons vocálicos.<br>
Exemplo:<br>
"O que o vago e incógnito desejo<br>
de ser eu mesmo de meu ser me deu." (Fernando Pessoa)<br>
<br>
Onomatopeia<br>
 É a inserção de palavras no discurso que imitam sons.<br>
Exemplo: Não aguento o tic-tac desse relógio.<br>

<br><br>
<img src="./imagens/figling2.jpg" width="40%" class="exemplor"> 
<br><br>
Fonte: <a href="https://www.todamateria.com.br/figuras-de-linguagem/" target="_blank">https://www.todamateria.com.br/figuras-de-linguagem/</a><br>

          </div>
          <br>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/7gDDnH9sdZI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" class="videopt" allowfullscreen> </iframe> </div> </div>

        
      <br><br><br><br>
                 </div>
</font></font>
</div>
</div>
</ul>


          <button class="button button1" onclick="window.location.href='./exerciciofigladm.php'"><div style="text-decoration: none;"><font color="white">Exercicios</div>
            </font></button>

           </div>
</font></font>
</div>
</div>
</ul>


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
