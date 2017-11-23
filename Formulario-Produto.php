<?php require 'cabecalho_adm.php' ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Adm - Produtos</title>
	<link rel="icon" href="img/icone.png">  
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="container">
		<?php 
		require 'config.php';
		require 'connection.php';
		require 'database.php';  
		?>

		<div class="container text-center">
			<h2>Adiciona Produto</h2>
		</div>
		<?php if(array_key_exists("removido", $_GET) && $_GET["removido"]==true): ?>
			<p class="alert-success text-center">Produto adicionado com sucesso!</p>
		<?php elseif(array_key_exists("removido", $_GET) && $_GET["removido"]==false) : ?>
			<p class="alert-danger text-center">Erro ao adicionar produto!</p>
		<?php endif; ?>
			<form action="addProduto.php" method="post">
				<hr>
				<div class="form-row">
					<div class="form-group col-md-7">
						<label for="imagem">Imagem:</label>
						<input type="file" required name="foto"/>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-3">
						<label for="campo2">Nome</label>
						<input type="text" class="form-control" name="nome" required="required">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-7">
						<label for="tipoImovel">Tipo de Imovel</label>
						<p> <select class="w3-select form-control" name="tipoImovel">
							<option value="1">Casa</option>
							<option value="2">Apartamento</option>
							<option value="3">Salas Comerciais</option>
							<option value="4">Galpão</option>
							<option value="5">Chácara</option>
							<option value="6">Lote/Terreno</option>
						</select></p>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-3">
						<label for="Venda">Venda ou Aluguel</label>
						<select  class="w3-select form-control" name="venda">
							<option value="1">Comprar</option>
							<option value="2">Alugar</option>
						</select>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-lg-6">
						<label for="campo3">Descrição</label>
						<textarea name="descricao" class="form-control" rows="7" cols="25" required="required"></textarea>
					</div>
				</div>

				<div id="actions" class="form-row">
					<div class="col-md-12">
						<button type="submit" class="btn btn-primary">Salvar</button>
						<a href="admProdutos.php" class="btn btn-default">Cancelar</a>
					</div>
				</div>
			</form>
		</div>
		<br>
		<br>
	</body>
	</html>
	<?php require 'rodape_adm.php' ?>