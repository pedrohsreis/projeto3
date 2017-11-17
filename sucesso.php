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
<<<<<<< HEAD

	MENSAGEM ENVIADA COM SUCESSO!

=======
	MENSAGEM ENVIADA COM SUCESSO!
>>>>>>> 68fd261be7bba8227051a3b4f85cab748f389b08
	</html>