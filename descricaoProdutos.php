<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Descrição dos produtos</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/descricao.css">
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
        <br>
        <?php
        include 'pesquisa.php';
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
     <h1><strong>Descrição geral do imóvel</strong></h1>
    <?php $result_imovel =  DBRead('imovel', "WHERE idimovel = $id order by idimovel")?>
    <?php foreach ($result_imovel as $v) :  ?>
        <br>
        <h2><?php echo $v['nome'] ?></h2>
    <section class="container">
        <div class="card">
        <img align="left" class="img-responsive card-img-top" src="img/<?php echo $v['foto'] ?>" alt="Card image cap">
        <div class="card-inline">
        <p  class="card-text"><?php echo $v['descricao'] ?></p>
        </div>
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