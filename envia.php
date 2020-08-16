<?php
$name = $_POST['name'];
//pega os dados que foi digitado no ID name.

$email = $_POST['email'];
//pega os dados que foi digitado no ID email.

$subject = $_POST['subject'];
//pega os dados que foi digitado no ID sebject.

$message = $_POST['message'];
//pega os dados que foi digitado no ID message.
$myEmail = "contato@advogadosbp.com.br";//é necessário informar um e-mail do próprio domínio
$headers = "From: $myEmail\r\n";
$headers .= "Reply-To: $email\r\n";

/*abaixo contém os dados que serão enviados para o email
cadastrado para receber o formulário*/

$corpo = "Formulário enviado\n";
$corpo .= "Nome: " . $name . "\n";
$corpo .= "Empresa: " . $company . "\n";
$corpo .= "Email: " . $email . "\n";
$corpo .= "Telefone: " . $phone . "\n";
$corpo .= "Comentários: " . $message . "\n";

$email_to = 'contato@advogadosbp.com.br';
//não esqueça de substituir este email pelo seu.

$status = mail($email_to, $subject, $corpo, $headers);
//enviando o email.

if ($status) {
  echo "<script> 
        alert('Mensagem enviada com sucesso!'); 
        window.location='index.html';      
  </script>";
//mensagem de form enviado com sucesso.

} else {
  echo "<script> 
        alert('Falha ao enviar a mensagem.'); 
        window.location='index.html';   
        </script>";
//mensagem de erro no envio. 
}
?>