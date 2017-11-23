    	<?php

            session_start();

            if(!isset($_SESSION['nome']) && !isset($_SESSION['senha']))
            {
                header("location: Login.php");
            }

    		include("conexao.php");
    		include("banco-contato.php");
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
        <br><p align='center'>Aqui nessa área você consegue ver a quantidade de produtos cadastrados e a quantidade de mensagens recebidas pela página contatos.</p><br>
        <div class="col-md-6">
            <div class="well well-sm">
                <legend><h4 align='center'>Quantidade de Produtos cadastrados</h4></legend><br>
                <p>Temos 0 produtos cadastrados no site.</p>
                <p>Clique <a>aqui</a> para acessar a página de cadastros dos produtos.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="well well-sm">
                <legend><h4 align='center'>Quantidade de Mensagens Recebidas</h4></legend><br>
                <p>Temos 0 mensagens recebidas no site.</p>
                <p>Clique <a>aqui</a> para acessar a página de administração dos contatos.</p>
            </div>
        </div>

    </body>    
    <br><br><br><br><br><br><br><br><br><br>


    <footer>
        <?php include 'rodape_adm.php';?>
    </footer>
        