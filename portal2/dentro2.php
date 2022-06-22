<html> 
 <head> 
  <title>Autenticando usuário</title> 
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
 <script type="text/javascript"> 
 </script>
</head>
<body>

<?php
    session_start();

    if(isset($_SESSION['adm'])){
        
            echo"<script language='javascript' type='text/javascript'>alert('Seja bem vindo, Administrador! Recomendamos que troque sua senha!');window.location.href='../index2adm.php'</script>";
    
    }else if(isset($_SESSION['nor'])){
        
            echo"<script language='javascript' type='text/javascript'>alert('Olá estudante, seja bem vindo ao portal Sem Dúvidas! Recomendamos que troque sua senha!');window.location.href='../index2.php'</script>";

        
    }else{
                  echo"<script language='javascript' type='text/javascript'>window.location.href='../visitante/login.php'</script>";

    }


?>
</body>
</html>