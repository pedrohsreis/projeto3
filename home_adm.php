<?php
    include("conexao.php");
    include("banco-contato.php");
    require 'config.php';
    require 'connection.php';
    require 'database.php';
    $link = DBConnect();
    $queryc = ("SELECT * FROM contato");
    $sqlc = mysqli_query($link, $queryc) or die (mysqli_error($link));
    $totalc = mysqli_num_rows($sqlc);
    $queryi = ("SELECT * FROM imovel");
    $sqli = mysqli_query($link, $queryi) or die (mysqli_error($link));
    $totali = mysqli_num_rows($sqli);
    
?>
<head>
    <meta charset="utf-8">
    <title>Home Administrativa</title>
    <link rel="icon" href="img/icone.png">  
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<?php include 'cabecalho_adm.php';?> 
<body>
    <br><h1 align="center">Bem vindo a área administrativa.</h1>
    <br><div class="col-md-12" align='center'>Aqui nessa área você consegue ver a quantidade de produtos cadastrados, a quantidade de mensagens recebidas pela página contatos, além de poder cadastrar novos usuários.</div><br><br>
    <div class="col-md-6"><br>
        <div class="well well-sm" align='center'>
            <legend><h4>Quantidade de Produtos cadastrados</h4></legend><br>
            
            <p>Abaixo a quantidade de produtos cadastrados:</p>
            
            <p>Temos <?php echo $totali; ?> produtos registrados.</p>
            
            <p>Clique <a href="admProdutos.php">aqui</a> para acessar a página de cadastros dos produtos.</p>
        </div>
    </div>
        <div class="col-md-6"><br>
            <div class="well well-sm" align='center'>
                <legend><h4>Quantidade de Mensagens recebidas</h4></legend><br>

                <p>Abaixo a quantidade de mensagens recebidas:</p>

                
                <p>Temos <?php echo $totalc; ?> mensagens registradas.</p>
                

                
                <p>Clique <a href="contato-lista.php">aqui</a> para acessar a página de mensagens.</p>
            </div>
        </div>
</body>    
<br><br><br><br><br><br><br><br><br><br><br><br><br>


<footer>
    <?php include 'rodape_adm.php';?>
</footer>
    