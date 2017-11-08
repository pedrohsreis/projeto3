<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Felicidade Imóveis</title>
	<meta name="description" content="Descrição 156 carcteres">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="css/home.css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

</head>
<body>
	<!--cabeçalho-->
	<?php include 'cabecalho1.0.html';?>

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
					<img class="img" src="img/casa1.jpg" alt="casa1">
					<div class="carousel-caption">
						<h1>Residência dos Sonhos</h1>
						<h3>Acordar na paz do interior</h3>
					</div>
				</div>
				<div class="item">
					<img src="img/casa2.jpg" alt="casa2">
					<div class="carousel-caption">
						<h1>segunda casa</h1>
					</div>
				</div>
				<div class="item">
					<img src="img/casa3.jpg" alt="casa3">
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
		<script
		src="https://code.jquery.com/jquery-2.2.4.min.js"
		integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
		crossorigin="anonymous"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</section>
	<div class="space-ten"></div>
	<div class="space-ten"></div>
	<section><!---pesquisa-->
		<div class="w3-row-padding">
        <div class="w3-col m4">
            <input class="w3-input" style="width:100%" type="text" name="Nome"  size="40" placeholder="Digite um bairro ou cidade. ">
        </div>
        <div class="w3-col m1 ">
            <form method="post" >
                <select  class="w3-select" name="tipoImovel">
                    <option value="Casa">Casa</option>
                    <option value="Apto">Apartamento</option>
                    <option value="SalaComercial">Salas Comerciais</option>
                    <option value="Galpao">Galpão</option>
                    <option value="Chac">Chacara</option>
                    <option value="L/t">Lote/Terrono</option>
                </select>
            </div>
            <div class="w3-col m1 " >
                <form method="post" >
                    <select  class="w3-select" name="compraroualugar">
                        <option value="Comprar">Comprar</option>
                        <option value="alugar">Alugar</option>
                    </select>
                </div>
                <div class="w3-col m2" >
                    <input style="width: 50%" class="w3-btn w3-signal-black w3-large w3-round-large" type="submit" value="Buscar" >
                </div>
            </div>
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
						<a href="index.html" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
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
						<a href="index.html" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
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
						<a href="index.html" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
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
	<div class="space-ten"></div>
	<div class="space-ten"></div>		
		<footer id="rodape" class="mt-5">
    <div class="container-fluid" id="container-rodape">
        <div class="container" >
            <div class="row p-2  text-center">
                <div class="col-lg-8 col-md-12 mt-auto mb-auto">
                    <p class="texto"><br><br>© Copyright 2017 - Felicidade Imóveis
 
                    </p>
                </div>

                <div class="col-md-12 col-lg-4 text-center" >

                    <br><!--<iframe  class="d-block mr-auto ml-auto" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsouzagomesimoveis%2F&tabs&width=340&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId"
                            width="340" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe><br>-->
                    <ul lass="loirinhausaclasse"><li><a href="http://facebook.com/"><i class="fa fa-facebook "></i></a></li>
                        <li><a href="http://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="http://plus.google.com/"><i class="fa fa-google-plus"></i> </a></li>
                        <li><a href="http://instagram.com/"><i class="fa fa-instagram"></i> </a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</footer>

</body>
</html>