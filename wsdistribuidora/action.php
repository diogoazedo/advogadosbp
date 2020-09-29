<?php
$message = $_POST['message'];
//pega os dados que foi digitado no ID name.

$name = $_POST['name'];
//pega os dados que foi digitado no ID email.

$sender = $_POST['sender'];
//pega os dados que foi digitado no ID sebject.

$subject = 'Saver Home Care: Novo report feito';

$myEmail = "contato@advogadosbp.com.br"; //é necessário informar um e-mail do próprio domínio
$headers = "From: $myEmail\r\n";
$headers .= "Reply-To: $email\r\n";

/*abaixo contém os dados que serão enviados para o email
cadastrado para receber o formulário*/

$corpo = "Formulário enviado\n";
$corpo .= "Mensagem: " . $message . "\n";
$corpo .= "Nome envolvidos: " . $name . "\n";
$corpo .= "Quem enviou: " . $sender . "\n";


$email_to = 'contato@advogadosbp.com.br';
//não esqueça de substituir este email pelo seu.

$status = mail($email_to, $subject, $corpo);
//enviando o email.

if ($status) {
  echo "<script> 
        alert('Mensagem enviada com sucesso!'); 
        window.location='canaldenuncia.html';      
  </script>";
//mensagem de form enviado com sucesso.

} else {
  echo "<script> 
        alert('Falha ao enviar a mensagem.'); 
        window.location='canaldenuncia.html';   
        </script>";
//mensagem de erro no envio. 
}
?>