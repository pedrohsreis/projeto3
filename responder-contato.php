<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/Responder.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

	
	<?php
	include("conecta.php");
	$email = $_POST['email'];
	?>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<title>Respondendo</title>
</head>
<body>
	<div class="container">
<div class="col-md-5">
    <div class="form-area">  
        <form action="envia_contato.php" method="post" role="form">
        <br style="clear:both">
                    <h1  class="pr" style="margin-bottom: 25px; text-align: center;">Resposta para o contatante</h1>
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="nome" placeholder="Nome" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="email" name="email" readonly value="<?php echo "{$email}"; ?>" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="subject" name="assunto" placeholder="Assunto" required>
					</div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" name="mensagem" placeholder="Resposta" maxlength="140" rows="7"></textarea>
                    <button class="btn btn-primary">Enviar</button>

</body>
</html>