<!DOCTYPE HTML> 
<head>
    <meta charset="utf-8">
    <title>Contatos - Felicidade Imóveis</title>
    <link rel="icon" href="img/icone.png">  
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/contato.css">
    <link rel="stylesheet" href="css/CssRodape.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

</head>
<?php
include 'cabecalho.php'; 
     //include 'pesquisa.php'; esse include faz o banco de dados parar de funcionar
?>

<main>
    <br><br><div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="well well-sm">
                 <h1>Contato</h1><br><br>
                 
                 <form  method="post" action="sucesso.php">
                    
                    <form method="POST" action="sucesso.php">
                        <div class="row">
                            <div class="col-md-6">

                                <label for="nome">Nome</label>
                                <input type="text" name="nome" class="form-control" id="nome" placeholder="Insira seu nome" required="required" /><br>
                                
                                
                                 <class="form-control">

                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Insira seu email" required="required" /><br>

                                <label for="sobre">Assunto</label>
                                <input type="text" name="assunto" class="form-control" id="sobre" placeholder="Insira o assunto" required="required" />

                            </div>
                            <div class="col-md-6">

                                <label for="mensagem">Mensagem</label>
                                <textarea name="mensagem" id="message" class="form-control" rows="7" cols="25" required="required" placeholder="Insira a sua mensagem aqui."></textarea>

                                <br><button title="Enviar." type="submit" class="btn btn-primary pull-right" id="enviar">Enviar</button>
                                
                                
                                
                                <class="btn btn-primary pull-right">
                                
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
           
            </div>
        </div><br>
    </main>
    <div class="suc">
    <?php
            if(array_key_exists("enviado", $_GET) && $_GET["enviado"]=="true"){
                echo "<p class='alert alert-success'>MENSAGEM ENVIADA COM SUCESSO!</p>";
            }
            ?>
        </div>

    <?php include 'Rodape.php'; ?>