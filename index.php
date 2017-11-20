<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Felicidade Imóveis</title>
	<link rel="icon" href="img/icone.png">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/home.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

</head>
<body>
	<?php 
	require 'config.php';
	require 'connection.php';
	require 'database.php';
	?>
	<!--cabeçalho-->
	<header>
		<?php include 'cabecalho.php'; ?>
	</header>
</section>
<div class="space-ten"></div>
<section><!---pesquisa-->
	<?php include 'pesquisa.php'; ?>
</section>	
<div class="space-ten"></div>
<!--slide-->
<section>
	<div id="slide" class="carousel slide" data-ride="carousel">

		<ol class="carousel-indicators">
			<li data-target="#slide" data-slide-to="0" class="active"></li>
			<li data-target="#slide" data-slide-to="1"></li>
			<li data-target="#slide" data-slide-to="2"></li>
		</ol>


		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="img" src="img/imgslide.jpg" alt="casa1">
				<div class="carousel-caption">
					<h1>Residência dos Sonhos</h1>
					<h3>Acordar na paz do interior</h3>
				</div>
			</div>
			<div class="item">
				<img src="img/imgslide2.jpg" alt="casa2">
				<div class="carousel-caption">
					<h1>segunda casa</h1>
				</div>
			</div>
			<div class="item">
				<img src="img/imgslide3.jpg" alt="casa3">
				<div class="carousel-caption">
					<h1>terceira casa</h1>
				</div>
			</div>
		</div>


		<a class="left carousel-control" href="#slide" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#slide" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<div class="space-ten"></div>
	<div class="space-ten"></div>
	<div class="space-ten"></div>
	<div class="space-ten"></div>
	<!--QuickView-->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view">
							<?php
							$result_foto =  DBRead('imovel', 'order by idimovel desc limit 0,1', 'foto');
							foreach ($result_foto as $foto){
								echo "<img src='img/" . $foto['foto'] . "' alt='Foto de exibição' />";
							}
							?>
						</a>
						<div class="caption">
							<h4>
								<?php
								$result_nome =  DBRead('imovel', 'order by idimovel desc limit 0,1', 'nome');
								foreach ($result_nome as $nome){
									echo $nome['nome'];
								}
								?>
							</h4>
							<p>
								<?php
								$result_desc =  DBRead('imovel', 'order by idimovel desc limit 0,1', 'descricao');
								foreach ($result_desc as $desc){
									echo $desc['descricao'];
								}
								?>
							</p>
						</div>               
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view2">
							<?php
							$result_foto =  DBRead('imovel', 'order by idimovel desc limit 1,1', 'foto');
							foreach ($result_foto as $foto){
								echo "<img src='img/" . $foto['foto'] . "' alt='Foto de exibição' />";
							}
							?>
						</a>
						<div class="caption">
							<h4>
								<?php
								$result_nome =  DBRead('imovel', 'order by idimovel desc limit 1,1', 'nome');
								foreach ($result_nome as $nome){
									echo $nome['nome'];
								}
								?>
							</h4>
							<p>
								<?php
								$result_desc =  DBRead('imovel', 'order by idimovel desc limit 1,1', 'descricao');
								foreach ($result_desc as $desc){
									echo $desc['descricao'];
								}
								?>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view3">
							<?php
							$result_foto =  DBRead('imovel', 'order by idimovel desc limit 2,1', 'foto');
							foreach ($result_foto as $foto){
								echo "<img src='img/" . $foto['foto'] . "' alt='Foto de exibição' />";
							}
							?>
						</a>
						<div class="caption">
							<h4>
								<?php
								$result_nome =  DBRead('imovel', 'order by idimovel desc limit 2,1', 'nome');
								foreach ($result_nome as $nome){
									echo $nome['nome'];
								}
								?>
							</h4>
							<p>
								<?php
								$result_desc =  DBRead('imovel', 'order by idimovel desc limit 2,1', 'descricao');
								foreach ($result_desc as $desc){
									echo $desc['descricao'];
								}
								?>
							</p>
						</div>               
					</div>
				</div>
			</div>
		</div>

		<!--Segunda tela-->

		<div class="modal fade product_view" id="product_view">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<a href="index.php" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
						<h3 class="modal-title">Dê o primeiro passo para realizar o seu sonho</h3>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-6 product_img">
								<?php
								$result_foto =  DBRead('imovel', 'order by idimovel desc limit 0,1', 'foto');
								foreach ($result_foto as $foto){
									echo "<img class = 'img-responsive' src='img/" . $foto['foto'] . "' alt='Foto de exibição' />";
								}
								?>
							</div>
							<div class="col-md-6 product_content">
								<h4>
									<?php
									$result_nome =  DBRead('imovel', 'order by idimovel desc limit 0,1', 'nome');
									foreach ($result_nome as $nome){
										echo $nome['nome'];
									}
									?>
								</h4>		                        
								<p>
									<?php
									$result_desc =  DBRead('imovel', 'order by idimovel desc limit 0,1', 'descricao');
									foreach ($result_desc as $desc){
										echo $desc['descricao'];
									}
									?>
								</p>              		                        
							</div>
							<div class="space-ten"></div>		                       
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade product_view" id="product_view2">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<a href="index.php" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
						<h3 class="modal-title">Dê o primeiro passo para realizar o seu sonho</h3>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-6 product_img">
								<?php
								$result_foto =  DBRead('imovel', 'order by idimovel desc limit 1,1', 'foto');
								foreach ($result_foto as $foto){
									echo "<img class = 'img-responsive' src='img/" . $foto['foto'] . "' alt='Foto de exibição' />";
								}
								?>
							</div>
							<div class="col-md-6 product_content">
								<h4>
									<?php
									$result_nome =  DBRead('imovel', 'order by idimovel desc limit 1,1', 'nome');
									foreach ($result_nome as $nome){
										echo $nome['nome'];
									}
									?>
								</h4>		                        
								<p>
									<?php
									$result_desc =  DBRead('imovel', 'order by idimovel desc limit 1,1', 'descricao');
									foreach ($result_desc as $desc){
										echo $desc['descricao'];
									}
									?>
								</p>              		                        
							</div>
							<div class="space-ten"></div>		                       
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade product_view" id="product_view3">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<a href="index.php" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
						<h3 class="modal-title">Dê o primeiro passo para realizar o seu sonho</h3>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-6 product_img">
								<?php
								$result_foto =  DBRead('imovel', 'order by idimovel desc limit 2,1', 'foto');
								foreach ($result_foto as $foto){
									echo "<img class = 'img-responsive' src='img/" . $foto['foto'] . "' alt='Foto de exibição' />";
								}
								?>
							</div>
							<div class="col-md-6 product_content">
								<h4>
									<?php
									$result_nome =  DBRead('imovel', 'order by idimovel desc limit 2,1', 'nome');
									foreach ($result_nome as $nome){
										echo $nome['nome'];
									}
									?>
								</h4>		                        
								<p>
									<?php
									$result_desc =  DBRead('imovel', 'order by idimovel desc limit 2,1', 'descricao');
									foreach ($result_desc as $desc){
										echo $desc['descricao'];
									}
									?>
								</p>              		                        
							</div>
							<div class="space-ten"></div>		                       
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="space-ten"></div>
	<div class="space-ten"></div>
	<div class="space-ten"></div>
	<div class="space-ten"></div>
	<footer>
		<?php include 'rodape.php'; ?>
	</footer>

</body>
</html>