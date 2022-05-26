<?php
if(isset($_POST['nome1'])  && !empty($_POST['name'])){
   $nome = addslashes($_POST['none']);
   $email = addslashes($_POST['email']);

   require 'config.php';

   $pdo-query("INSERT INTO usuarios SET none'$nome', email = '$email'");
   $id = $pdo->lastInsertId();

   $md5->md5($id);
   $link= 'localhost/cadastrocomaprovação/confirmar.php?h='.$md5; //link para arquivo de confirmação
   $assunto = "Confirme seu cadastro";
   $msg = "Clique no link abaixo para confirmar seu cadastro:\n\n".$link;
   $headers = "From:vitorjoao39207@gmail.com"."\r\n". 
              "X-Mailer: PHP/".phpversion();

   mail($email, $assunto, $msg, $headers);
   echo"<h2>OK!Confirme seu cadastro agora!</h2>";
}
?>
<form method="POST">
   Nome:<br/>
   <input type="text"nane="nome"/><br/><br/>
   E-mail:<br/>
   <input type="email" name="email"/><br/><br/>

   <input type="submit" value="Cadastrar"/>
</form>