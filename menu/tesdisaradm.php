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
    <title>Texto Dissertativo-Argumentativo</title>
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
          <li class="menu-item active"><a href="../index2adn.php" data-scroll>Inicio</a></li>
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
  width: 45%;
  height: auto;
background-position: center;
background-size: cover;
background-repeat: no-repeat;
}

}

</style>

<br><br><br>

<div class="conteudoos">
  <h2>TEXTO DISSERTATIVO-ARGUMENTATIVO</h2>
        </div>
        <div>
          <div>
            <ul>
              <br>
              <div style="text-align:justify;justify-content:center; margin-left: 20px; margin-right: 20px;" align="center">
          <font face="Anson"><font size="4" color="black">Texto dissertativo-argumentativo  tem como objetivo defender uma ideia por meio de argumentos e explicações, à medida que é dissertativo; assim como seu principal objetivo consiste na formação de opinião do leitor, isto é, caracteriza-se por tentar convencer ou exortar o interlocutor da mensagem, tendo como o sentido argumentativo.<br>
            O texto dissertativo-argumentativo possui como principal estrutura:
            <br><br>
    <b>Introdução:</b><br>
    Na introdução ocorre a apresentação de um assunto e de uma tese que será defendida sobre esse assunto. A tese deve ser apresentada de forma clara e objetiva. É necessário que esteja bem definida e explícita.<br>
<br>
    <b>Desenvolvimento:</b><br>
    Todas as ideias apresentadas na introdução devem ser desenvolvidas de forma opinativa e argumentativa nessa parte do texto, na qual a dimensão do mesmo deve ser de 50%. Podem ser apresentados através do reconhecimento das causas e consequências do problema, da identificação de seus aspectos positivos e negativos ou da contra-argumentação de uma tese contrária. O ponto principal do desenvolvimento é que seja escrito de forma clara, corente, precisa e objetiva.<br>
    <br>
    Na conclusão ocorre normalmente a apresentação de soluções viáveis ou de propostas de intervenção. A conclusão aparece como um desfecho natural e inevitável visto o pensamento do leitor já ter sido direcionado para a mesma durante a apresentação dos argumentos. Deve-se, também, retornar os argumentos apresentados. É na conclusão onde deve finalizar o seu ponto de vista. No ENEM, normalmente, são cobradas propostas de intervenção.
<br><br>
    <b>Exemplo de texto dissertativo-argumentativo:</b><br>
    É frequente ouvirmos falar sobre os atos violentos na escola. Não bastasse a sua presença nas ruas, os ambientes supostamente seguros - nomeadamente as escolas - são mais do que nunca alvo de ações de violência.<br>
<br>
Os valores se perdem a ponto de não só entre alunos, mas entre alunos e professores, ou vice-versa, serem inúmeros os casos de agressões noticiados frequentemente.<br>
<br>
A força é tomada em detrimento da razão e os conflitos são resolvidos de forma irracional desde a infância, cujas crianças absorvem cedo esse tipo de comportamento por influência da sociedade cada vez mais violenta em que vivemos.<br>
<br>
A participação dos pais na vida escolar dos filhos é fundamental para estabelecer normas e restaurar valores que tem vindo a se perder. A aproximação entre pais e escola é um dos principais propulsores para a mitigação desse problema.<br>
<br><br>
    <b>Bizu para a redação do ENEM:</b><Br>
    Faça as perguntas sobre a sua redação feita: “o que fazer?”, “quem?” e “como?".
<br><br>
    <b> Contagem de parágrafos para o ENEM:</b><br>
    O número indicado de parágrafos é: 1 para introdução, 2 a 3 para desenvolvimento, e 1 para conclusão.
    <br><BR>
    <b>Temas que provavelmente devem cair nas próximas redações do ENEM:</b><br>
    A cada ano o tema na redação do ENEM é mudada, porém, existe uma dica.
    Normalmente, o provável tema da redação será de um assunto polêmico do ano em que o ENEM será aplicado. Por exemplo: No ano de 2018, o tema da redação foi 'manipulação do comportamento do usuário pelo controle de dados na internet', ou seja, foi uma tema muito polêmico em 2018, como as notícias falsas (fake news), ou então os dados do usuário serem utilizados por outro indivíduo, como as suspeitas das eleições de 2016 do Trump, onde dizem que foi pego informações de usuários do Facebook para serem manipulados ao voto aos Republicanos.<br>
<br>
    <b>Possíveis temas:</b><br>
    Existem alguns temas que são sempre muito polêmicos e sempre podem aparecer em redações. São eles:<br>
    O conceito de família no século XXI,<br>
    Direitos coletivos,<br>
    Atos em nome da religião,<br>
    Descriminalização das drogas,<br>
    A mulher na sociedade contemporânea,<br>
    Porte de armas,<br>
    Justiça feita pelo indivíduo,<br>
    Crise política no Brasil.<br>
<br>
<img src="./imagens/testdis.jpg" width="38%" class="exemplor">
<br>
<Br>
Fonte: <a href="https://www.todamateria.com.br/texto-dissertativo-argumentativo/" target="_blank">https://www.todamateria.com.br/texto-dissertativo-argumentativo/</a>

</div>
</font>




<br><Br>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/a1QRoH579u4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" class="videomat" allowfullscreen></iframe> </iframe> </div> </div>

        
      <br><br><br><br>
    </font>
  </font>
</div>
</ul>

</div>
          <button class="button button1" onclick="window.location.href='./exerciciotesdisaradm.php'"><div style="text-decoration: none;"><font color="white">Exercicios</div>
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
