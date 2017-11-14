<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Felicidade Imóveis</title>
<<<<<<< HEAD:index.php
	<meta name="description" content="Descrição 156 carcteres">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
=======
>>>>>>> 75760f41c2b32ddff0cf16824b891f38bc9f5ee1:index.php
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/home.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

</head>
<body>
	<!--cabeçalho-->
<<<<<<< HEAD:index.php
	<?php include 'cabecalho1.0.html';?>

=======
	<header>
		<?php include 'cabecalho.php'; ?>
	</header>
>>>>>>> 75760f41c2b32ddff0cf16824b891f38bc9f5ee1:index.php
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
		
	</section>
	<div class="space-ten"></div>
	<div class="space-ten"></div>
	<section><!---pesquisa-->
		<?php include 'pesquisa.php'; ?>
	</section>	
	<div class="space-ten"></div>
	<div class="space-ten"></div>
	<!--QuickView-->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view"><img src="img/quickcasa1.jpg" alt="" class="img-responsive"></a>
						<div class="caption">
							<h4>CASA 1</h4>
							<p>Dois quartos, todos com ar-condicionado e ventilador de teto, podendo conter uma cama de casal e um beliche, e claro, temos armadores para rede em todos os quartos.</p>
						</div>               
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view2"><img src="img/quickcasa2.jpg" alt="" class="img-responsive"></a>
						<div class="caption">
							<h4>CASA 2</h4>
							<p>Dois quartos, todos com ar-condicionado e ventilador de teto, podendo conter uma cama de casal e um beliche, e claro, temos armadores para rede em todos os quartos.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view3"><img src="img/quickcasa3.jpg" alt="" class="img-responsive"></a>
						<div class="caption">
							<h4>CASA 3</h4>
							<p>Dois quartos, todos com ar-condicionado e ventilador de teto, podendo conter uma cama de casal e um beliche, e claro, temos armadores para rede em todos os quartos.</p>
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
								<img src="img/quickcasa1.jpg" class="img-responsive">
							</div>
							<div class="col-md-6 product_content">
								<h4>CASA 1</h4>		                        
								<p>Casas recém-construídas num empreendimento para conforto e economia de sua família e seus amigos.Cada casa possui:Dois quartos, todos com ar-condicionado e ventilador de teto, podendo conter uma cama de casal e um beliche, e claro, temos armadores para rede em todos os quartos.Sala com ventilador de teto, sofás, televisor LCD com assinatura SKY e armadores para rede.</p>              		                        
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
								<img src="img/quickcasa2.jpg" class="img-responsive">
							</div>
							<div class="col-md-6 product_content">
								<h4>CASA 2</h4>		                        
								<p>Casas recém-construídas num empreendimento para conforto e economia de sua família e seus amigos.Cada casa possui:Dois quartos, todos com ar-condicionado e ventilador de teto, podendo conter uma cama de casal e um beliche, e claro, temos armadores para rede em todos os quartos.Sala com ventilador de teto, sofás, televisor LCD com assinatura SKY e armadores para rede.</p>              		                        
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
								<img src="img/quickcasa3.jpg" class="img-responsive">
							</div>
							<div class="col-md-6 product_content">
								<h4>CASA 3</h4>		                        
								<p>Casas recém-construídas num empreendimento para conforto e economia de sua família e seus amigos.Cada casa possui:Dois quartos, todos com ar-condicionado e ventilador de teto, podendo conter uma cama de casal e um beliche, e claro, temos armadores para rede em todos os quartos.Sala com ventilador de teto, sofás, televisor LCD com assinatura SKY e armadores para rede.</p>              		                        
							</div>
							<div class="space-ten"></div>		                       
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include 'rodape.php'; ?>
</footer>

</body>
</html>