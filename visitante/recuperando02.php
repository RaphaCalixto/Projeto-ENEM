
 <html> 
 <head> 
  <title>Autenticando usuário</title> 
  <meta charset = "utf-8"/>
 <script type="text/javascript"> 
 function loginsuccessfully() { 
 setTimeout ("window.location='./novasenha.php'", 10);
 } 
 function loginfailed()
{ 
 setTimeout ("window.location='./esqueceusenhap.php'", 10); 
} 
 </script> 
</head> 
<body> 
 <?php 
 session_start();
  $conn = mysqli_connect('localhost','root','123','tbusuarios'); 

   $cpf = $_POST["cpf"];


$sql = mysqli_query($conn,"SELECT senha FROM usuarios WHERE (cpf='$cpf')") or die (mysqli_error());




$row=mysqli_num_rows($sql);

if ($row > 0) {
  
  while ( mysqli_fetch_array($sql)) { 



echo"<script language='javascript' type='text/javascript'>alert('CPF certos')</script>"; 
$cpf = $_SESSION["cpf"];
echo "<script>loginsuccessfully()</script>"; 
}
} else  { 
echo"<script language='javascript' type='text/javascript'>alert('Email ou Senha inválidos.')</script>";
 echo "<script>loginfailed()</script>"; 
} ?>
</body> 
