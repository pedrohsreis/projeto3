<!DOCTYPE html>
<html>
<head>
    <!-- essa linha do charset não tava no vídeo! -->
    <meta charset="utf-8">
    <title>Pagina produtos</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto+Slab:400,700|Pacifico' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/cabecalho1.0.css">
	
	<link rel="stylesheet" type="text/css" href="CSS/produtos.css">
	
	
	<link rel="stylesheet" href="CssRodape.css">
    <link rel="stylesheet"  type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	
</head>
  
  
<body>
 <script src="js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>

   <?php include 'cabecalho1.0.html'; ?> 
   <!--<header class="cabecalho">
		<img class="img-responsive" id="logo" src="img/logo3.png" alt="">
		<img src="img/cabecalho4.png" alt="">
		
		<!--teste menu-->
		<!--<input type="checkbox" id="btn-menu">
		<label for="btn-menu"><img src="img/menu.png" alt=""></label>
		<nav class="menu">
			<ul class="nav nav-pills nav-justified">
				<li><a href="index.html">Home</a></li>
				<li><a href="#">Produtos</a></li>
				<li><a href="#">Quem somos</a></li>
				<li><a href="#">Localização</a></li>
				<li><a href="#">Contato</a></li>
				<li><a href="#">Login</a></li>
			</ul>
		</nav>
	</header>-->
   <div class="container">
   <div class="animacao">
  <h1>O seu sonho está aqui!</h1>
</div>
  </div>
   
    <!--<nav>
        <a class = "fade" href="#">Felicidade Imóveis</a>
        <ul>
            <li class = "fade"><a href="#">QUEM SOMOS</a></li>
            <li class = "fade"><a href="#">LOCALIZAÇÃO</a></li>
            <li class = "fade"><a href="#">CONTATO</a></li>
            <li class = "fade"><a href="#">LOGIN</a></li>
        </ul>    
    </nav>!-->

    
    <!-- Footer 1 - Left Social/Right Menu -->
    
    <div class="container">
        <div class="search-text"> 
         <div class="row text-center">
         
           <div class="form">
                <form id="search-form" class="form-search form-horizontal">
                    <input type="text" class="input-search" placeholder="Search">
                    <button type="submit" class="btn-search">Search</button>
                </form>
            </div>
        
          </div>         
       </div>     
	</div>
    
    
    
    
     
     
	

    <!--<section id="Imoveis">
        <h2>IMÓVEIS EM DESTAQUE</h2>
            <div class="container">
               <!--<h3>IMOVEL COM VISTA PARA O MAR</h3>
               <img class = "img-responsive" src="img/casa1.jpg" alt="casa1">
            <div class="panel-group" id="paineis-1">
                <div class="panel panel-default">   
                    <div class="panel-heading">
                        <h4 class="painel-title" data-toggle="collapse" data-target="#primeiro-paragrafo" data-parent="#paineis-1">2quartos</h4>
                    </div>
                <div id="primeiro-paragrafo" class="collapse">
                   <div class="panel-body">
                       <p >Quartos confortaveis</p>
                   </div>
                </div>
                </div>
           <div class="panel panel-default">   
                    <div class="panel-heading">
                        <h4 class="painel-title" data-toggle="collapse" data-target="#segundo-paragrafo" data-parent="#paineis-1">2quartos</h4>
                    </div>
                <div id="segundo-paragrafo" class="collapse">
                   <div class="panel-body">
                       <p >Quartos confortaveis</p>
                   </div>
                </div>
                </div>
            <div class="panel panel-default">   
                    <div class="panel-heading">
                        <h4 class="painel-title" data-toggle="collapse" data-target="#terceiro-paragrafo" data-parent="#paineis-1">2quartos</h4>
                    </div>
                <div id="terceiro-paragrafo" class="collapse">
                   <div class="panel-body">
                       <p >Quartos confortaveis</p>
                   </div>
                </div>
                </div>
        </div>
        </div>
          
              <div class="container">
               <!--<h3>IMOVEL COM VISTA PARA O MAR</h3>
               <img class = "img-responsive" src="img/casa1.jpg" alt="casa1">
               <div class="panel-group" id="paineis-2">
                <div class="panel panel-default">   
                    <div class="panel-heading">
                        <h4 class="painel-title" data-toggle="collapse" data-target="#quarto-paragrafo" data-parent="#paineis-2">2quartos</h4>
                    </div>
                <div id="quarto-paragrafo" class="collapse">
                   <div class="panel-body">
                       <p >Quartos confortaveis</p>
                   </div>
                </div>
                </div>
           <div class="panel panel-default">   
                    <div class="panel-heading">
                        <h4 class="painel-title" data-toggle="collapse" data-target="#quinto-paragrafo" data-parent="#paineis-2">2quartos</h4>
                    </div>
                <div id="quinto-paragrafo" class="collapse">
                   <div class="panel-body">
                       <p >Quartos confortaveis</p>
                   </div>
                </div>
                </div>
            <div class="panel panel-default">   
                    <div class="panel-heading">
                        <h4 class="painel-title" data-toggle="collapse" data-target="#sexto-paragrafo" data-parent="#paineis-2">2quartos</h4>
                    </div>
                <div id="sexto-paragrafo" class="collapse">
                   <div class="panel-body">
                       <p >Quartos confortaveis</p>
                   </div>
                </div>
                </div>
        </div>
            </div>
    
           <div class="container">
               <!--<h3>IMOVEL COM VISTA PARA O MAR</h3>
               <img class = "img-responsive" src="img/casa1.jpg" alt="casa1">
               <div class="panel-group" id="paineis-3">
                <div class="panel panel-default">   
                    <div class="panel-heading">
                        <h4 class="painel-title" data-toggle="collapse" data-target="#setimo-paragrafo" data-parent="#paineis-3">2quartos</h4>
                    </div>
                <div id="setimo-paragrafo" class="collapse">
                   <div class="panel-body">
                       <p >Quartos confortaveis</p>
                   </div>
                </div>
                </div>
           <div class="panel panel-default">   
                    <div class="panel-heading">
                        <h4 class="painel-title" data-toggle="collapse" data-target="#oitavo-paragrafo" data-parent="#paineis-3">2quartos</h4>
                    </div>
                <div id="oitavo-paragrafo" class="collapse">
                   <div class="panel-body">
                       <p >Quartos confortaveis</p>
                   </div>
                </div>
                </div>
            <div class="panel panel-default">   
                    <div class="panel-heading">
                        <h4 class="painel-title" data-toggle="collapse" data-target="#nono-paragrafo" data-parent="#paineis-3">2quartos</h4>
                    </div>
                <div id="nono-paragrafo" class="collapse">
                   <div class="panel-body">
                       <p >Quartos confortaveis</p>
                   </div>
                </div>
                </div>
        </div>
            </div>   
    </section>-->
    <section class="container">
    <h2>EM DESTAQUE</h2>

        <figure class="thumbnail projeto-responsivo">
            <img src="img/casa1.jpg" alt="Foto da Casa Castelo">
            <figcaption class="caption">
                 <h3>Casa em frente ao shopping</h3>
                 <p>Uma casa perfeita para morar.</p>
                 
            </figcaption>
        </figure>
        
        <figure class="thumbnail projeto-responsivo">
            <img src="img/casa2.jpg" alt="Foto da Casa Castelo">
            <figcaption class="caption">
                 <h3>Casa em frente ao shopping</h3>
                 <p>Uma casa perfeita para morar.</p>
            </figcaption>
        </figure>
        
        <figure class="thumbnail projeto-responsivo">
            <img src="img/casa3.jpg" alt="Foto da Casa Castelo">
            <figcaption class="caption">
                 <h3>Casa em frente ao shopping</h3>
                 <p>Uma casa perfeita para morar.</p>
            </figcaption>
        </figure>
    </section>
    
    <section class="container">
    <h2>MAIS PROXIMOS DE VOCÊ</h2>

        <figure class="thumbnail projeto-responsivo">
            <img src="img/casa1.jpg" alt="Foto da Casa Castelo">
            <figcaption class="caption">
                 <h3>Casa em frente ao shopping</h3>
                 <p>Uma casa perfeita para morar.</p>
            </figcaption>
        </figure>
        
        <figure class="thumbnail projeto-responsivo">
            <img src="img/casa2.jpg" alt="Foto da Casa Castelo">
            <figcaption class="caption">
                 <h3>Casa em frente ao shopping</h3>
                 <p>Uma casa perfeita para morar.</p>
            </figcaption>
        </figure>
        
        <figure class="thumbnail projeto-responsivo">
            <img src="img/casa3.jpg" alt="Foto da Casa Castelo">
            <figcaption class="caption">
                 <h3>Casa em frente ao shopping</h3>
                 <p>Uma casa perfeita para morar.</p>
            </figcaption>
        </figure>
    </section>
    
    
    <div class = "container contato">
    <div class=" jumbotron">
        <h2>CONTATO</h2>
        <p>Entre em contato conosco.</p>
        <div>
            <img src="img/fone.png" alt="fone">
            <p><a href="tel:xx55555555">(xx) 5555 5555</a></p>
        </div>

        <div>
            <img src="img/contato.png" alt="email">
            <p><a href="email@contato.com">email@contato.com</a></p>
        </div>
    </div>
    </div>
   <!-- <footer id="rodape" class="mt-5">
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
                  <!--  <ul><li><a href="http://facebook.com/"><i class="fa fa-facebook "></i></a></li>
                        <li><a href="http://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="http://plus.google.com/"><i class="fa fa-google-plus"></i> </a></li>
                        <li><a href="http://instagram.com/"><i class="fa fa-instagram"></i> </a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</footer>-->
<?php include 'Rodape.html'; ?>
</body>

</html>
