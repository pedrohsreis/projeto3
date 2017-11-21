<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

include("PHPMailerAutoload.php");

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "gabrieliorio7@gmail.com";
$mail->Password = "*******";

$mail->setFrom("gabrieliorio7@gmail.com", "Administrador de contatos");
$mail->addAddress($email);
$mail->Subject = "Email de contato da imobiliaria";
$mail->msgHTML("<html>De: {$nome}<br/>email: {$email}<br/>Mensagem: {$mensagem}</html>");
$mail->AltBody = "Mensagem: {$mensagem}";

$enviado = $mail->send();

if($enviado){
	header("Location: contato-lista.php");
}

else{
	echo "HOUVE UMA FALHA NO ENVIO DA MENSAGEM";

}
die();