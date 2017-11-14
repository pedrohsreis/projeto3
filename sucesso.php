<html>
<?php
	$nome = $_POST["nome"];
	$assunto = $_POST["assunto"];
	$email = $_POST["email"];
	$mensagem = $_POST["mensagem"];
	$conexao = mysqli_connect("localhost", "root", "", "felicidade");

	$query = "INSERT INTO contato (nomeContato, assunto, email, mensagem) VALUES ('$nome', '$assunto', '$email', '$mensagem')";
	mysqli_query($conexao, $query);

	mysqli_close($conexao);
	
	?>
	MENSAGEM ENVIADA COM SUCESSO!
	</html>