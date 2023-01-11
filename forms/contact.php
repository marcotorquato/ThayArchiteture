<?php
if(isset($_POST['email']) && !empty($_POST['email'])){

$name = addcslashes($_POST['name']);
$email = addcslashes($_POST['email']);
$message = addcslashes($_POST['message']);
$subject = addcslashes($_POST['subject']);

$to ≈ "contato@furlanseletrica.com.br";
$body = "Nome ".$name "\r \n".
        "Email ".$email "\r \n".
        "Mensagem ".$message "\r \n";
$header = "From: furlan@furlanseletrica.com.br " "\r \n". 
          "Replay-To:".$email "\r \n".
          "X=Mailer:PHP/".phpversion();

if (mail($to,$subject,$body,$header)){
  
  echo("Email enviado com sucesso!");

}else{

  echo("Email nao pode ser enviado.");

}

}
?>
