<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pagina produtos</title>
    <link rel="icon" href="img/icone.png">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto+Slab:400,700|Pacifico' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cabecalho1.0.css">

    <link rel="stylesheet" type="text/css" href="CSS/produtos.css">


    <link rel="stylesheet" href="css/CssRodape.css">
    <link rel="stylesheet"  type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

</head>


<body>




    <?php
    include 'cabecalho.php';
    echo "<br>";
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
        if ($TipoImovel == "Galpão")
            $TipoImovel = 4;
        if ($TipoImovel == "Chácara")
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
                    <?php echo "<img src='img/" . $exibe['foto'] . "' alt='Foto de exibiÃ§Ã£o' />" . '<br>'; ?> 
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
    <?php 
    require 'config.php';
    require 'connection.php';
    require 'database.php';
    ?>

    <?php $result_imovel =  DBRead('imovel', 'order by idimovel')?>
    <?php if ($result_imovel) : ?>
      <section>
          <?php foreach ($result_imovel as $v) :  ?>

            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="descricaoProdutos.php?id=<?php echo $v['idimovel']?>" type="link" class="btn btn-primary">
                                <img src="img/<?php echo $v['foto'] ?>" alt="Foto de exibição">
                            </a>
                            <div class="caption">
                                <h4>
                                    <p class="text-center"><?php echo $v['nome'] ?></p>
                                </h4>

                            </div>               
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php else : ?>
    <tr>
      <td colspan="6">Nenhum registro encontrado.</td>
  </tr>
<?php endif; ?>
<footer>
 <?php include 'Rodape.php'; ?>
</footer>
</body>

</html>
