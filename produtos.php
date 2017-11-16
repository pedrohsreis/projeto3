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

        <?php include 'cabecalho.php'; ?> 

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









        <section class="container">
            <h2>EM DESTAQUE</h2>

            <figure class="thumbnail projeto-responsivo">
                <?php
                include 'conexao.php';
                $sqp = mysqli_query($conn, "SELECT idimovel FROM imovel order by idimovel DESC limit 1");
                $x = mysqli_fetch_object($sqp);
                $b = $x->idimovel;
                $sql = mysqli_query($conn, "SELECT * FROM imovel where idimovel = $b");

                while ($usuario = mysqli_fetch_object($sql)) {

                    echo "<img src='img/" . $usuario->foto . "' alt='Foto de exibição' />";
                    ?>
                    <figcaption class="caption">
                        <h3><?php echo $usuario->nome; ?></h3>
                        <p><?php echo $usuario->descricao; ?></p>

                        <?php
                    }
                    ?>
                </figcaption>
            </figure>





            <figure class="thumbnail projeto-responsivo">

                <?php
                $b = $x->idimovel - 1;
                $sql = mysqli_query($conn, "SELECT * FROM imovel where idimovel = $b");
                while ($usuario = mysqli_fetch_object($sql)) {


                    echo "<img src='img/" . $usuario->foto . "' alt='Foto de exibição' />";
                    ?>
                    <figcaption class="caption">
                        <h3><?php echo $usuario->nome; ?></h3>
                        <p><?php echo $usuario->descricao; ?></p>
                        <?php
                    }
                    ?>
                </figcaption>
            </figure>



            <figure class="thumbnail projeto-responsivo">

                <?php
                $b = $x->idimovel - 2;
                $sql = mysqli_query($conn, "SELECT * FROM imovel where idimovel = $b");
                while ($usuario = mysqli_fetch_object($sql)) {


                    echo "<img src='img/" . $usuario->foto . "' alt='Foto de exibição' />";
                    ?>
                    <figcaption class="caption">
                        <h3><?php echo $usuario->nome; ?></h3>
                        <p><?php echo $usuario->descricao; ?></p>
                        <?php
                    }
                    ?>
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

        <?php include 'Rodape.php'; ?>
    </body>

</html>
