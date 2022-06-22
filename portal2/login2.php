<?php 
$conn = mysqli_connect('localhost','root','123','tbusuarios'); 
 ?>


 <html> 
 <head> 
  <title>Autenticando usuário</title> 
  <meta charset = "utf-8"/>
 <script type="text/javascript"> 
 function loginsuccessfully() { 
 setTimeout ("window.location='../index2.php'", 10);
 } 
 function loginfailed()
{ 
 setTimeout ("window.location='../visitante/login.php'", 10); 
} 
 </script> 
</head> 
<body> 
 <?php 
 session_start();
  $conn = mysqli_connect('localhost','root','123','tbusuarios'); 
  ?>
   <?php $email=$_POST ['email']; 
   $senha=$_POST ['senha']; 
   $sql = ("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'") or die (mysqli_error()); 
   $query = mysqli_query($conn,$sql);
   $row = mysqli_num_rows ($query); 
   if($row > 0) { $_SESSION ['email']=$_POST ['email']; $_SESSION ['senha']=$_POST ['senha'];
   echo"<script language='javascript' type='text/javascript'>alert('Seja bem-vindo ao portal Sem Dúvidas.')</script>"; 
   echo "<script>loginsuccessfully()</script>"; 
} 
else { 
 echo"<script language='javascript' type='text/javascript'>alert('Email ou Senha inválidos.')</script>";
 echo "<script>loginfailed()</script>"; 
} 
 ?> 
</body> 
