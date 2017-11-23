<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="icon" href="img/icone.png">  
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/Lista.css">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">

	<?php
		include("conecta.php");
		include("banco-contato.php");
	?>
	<title>Administração de contatos</title>
</head>
<body>
    <?php include("cabecalho_adm.php")?>

<h1 class="fo">Lista de Contatantes</h1>
<div class="table-responsive">
<table class="table table-bordered">
	<thead>
	  <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Assunto</th>
      <th scope="col">Mensagem</th>
      <th scope="col">Responder</th>
      <th scope="col">Remover</th>
	<?php
		$contatos=listaContatos($conexao);
		foreach ($contatos as $mensagem) : 
	?>
	<tr>
		<th><?=$mensagem['nomeContato'] ?></th>
		<th><?=$mensagem['email'] ?></th>
		<th><?=$mensagem['assunto'] ?></th>
		<th><?= substr($mensagem['mensagem'], 0 , 50) ?></th>
		<th>
		<form action="responder-contato.php" method="post">
			<input type="hidden" name="email" value="<?=$mensagem['email']?>">
			<button class="btn btn-primary">Responder</button>
		</form>
	</th>
		<th>
			<form action="remove-contato.php" method="post">
				<input type="hidden" name="id" value="<?=$mensagem['idcontato']?>">
			<button class="btn btn-danger">Remover</button>
		</form>
		</th>
	</tr>
	<?php
		endforeach
	?>
	</thead>
</table>
</div>
</body>
        <?php include("rodape_adm.php")?>

</html>