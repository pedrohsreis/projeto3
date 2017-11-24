<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Descrição dos produtos</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/CssRodape.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
</head>
<body>
    <header>
        <?php
        include 'cabecalho.php';
        echo "<br>";
       
        ?>
    </header>
    <?php 
    require 'config.php';
    require 'connection.php';
    require 'database.php';
    ?>
    <?php 
    if(array_key_exists("id", $_GET)){ 
        $id = $_GET['id'];
    } 
    ?>
    <br>
    <?php $result_imovel =  DBRead('imovel', "WHERE idimovel = $id order by idimovel")?>
    <?php foreach ($result_imovel as $v) :  ?>
        <section class="container">
            <div class="row">
                <div class="col-xs-12 text-right"><?php echo $v['nome'] ?></div>
                </div>
            <div class="row">
                <div class="col-xs-4"><img class="img-responsive" src="img/<?php echo $v['foto'] ?>" alt="Foto de exibição"></div>
                <div  class="col-xs-12 text-right"><?php echo $v['descricao'] ?></div>
            </div>
            </div>

        </section>
    <?php endforeach; ?>
    <br>
    <footer>
        <?php include 'Rodape.php'; ?>
    </footer>
</body>
</html>