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

    <?php
    include 'cabecalho.php';
    include 'pesquisa.php';
    echo'<br><br>';
    include 'conexao.php';

    if (isset($_POST['Nome'])) {
        $nome = $_POST['Nome'];
        $comprarOuAlugar = $_POST['compraroualugar'];
        $TipoImovel = $_POST['tipoImovel'];


        if ($TipoImovel == "Casa")
            $TipoImovel = 1;
        if ($TipoImovel == "Apartamento")
            $TipoImovel = 2;
        if ($TipoImovel == "Salas Comerciais")
            $TipoImovel = 3;
        if ($TipoImovel == "Galp�o")
            $TipoImovel = 4;
        if ($TipoImovel == "Ch�cara")
            $TipoImovel = 5;
        if ($TipoImovel == "Lote/Terreno")
            $TipoImovel = 6;

        if ($comprarOuAlugar == "Comprar")
            $comprarOuAlugar = 1;
        if ($comprarOuAlugar == "Alugar")
            $comprarOuAlugar = 2;
        ?><section class="container">
            
            <?php
            $sql = mysqli_query($conn, "SELECT * FROM imovel where nome like '%$nome%' OR idimovel = '$nome' OR descricao like '%$nome%' "
                . "AND TipoImovel='$TipoImovel' AND tipo_venda = '$comprarOuAlugar'");
            $sql2 = mysqli_num_rows($sql);
            echo "Resultado da Busca: $sql2 itens encontrados. ";
            echo'<br><br>';
            
            while ($exibe = mysqli_fetch_assoc($sql)) {
                ?>

                <figure class="thumbnail projeto-responsivo">
                    <?php echo "<img src='img/" . $exibe['foto'] . "' alt='Foto de exibição' />" . '<br>'; ?> 
                    <figcaption class="caption">
                        <h3><?php echo $exibe['nome']; ?></h3>
                        <p><?php echo $exibe['descricao']; ?></p>
                    </figcaption>
                </figure>
                <?php
            }
            ?> 

        </section>        
        <?php
    }
    ?>



    <section class="container">        
        <figure class="thumbnail projeto-responsivo">
            <?php
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
    <?php include 'Rodape.php'; ?>
</body>

</html>
