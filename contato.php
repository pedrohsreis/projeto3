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
     include 'cabecalho1.0.php'; 
     //include 'pesquisa.php'; esse include faz o banco de dados parar de funcionar
     ?>


<<<<<<< HEAD
    <?php include 'cabecalho1.0.html'; ?>
=======
>>>>>>> 5c29e4567f8d9e253740f1a3353942ac03cbae43
<main>
<br><br><div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="well well-sm">
               <h1>Contatos</h1><br><br>
<<<<<<< HEAD
                <form  method="post" action="sucesso.php">
=======
                <form method="POST" action="sucesso.php">
>>>>>>> 5c29e4567f8d9e253740f1a3353942ac03cbae43
                    <div class="row">
                        <div class="col-md-6">

                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control" id="nome" placeholder="Insira seu nome" required="required" /><br>
<<<<<<< HEAD
                                
=======
                                <class="form-control">
>>>>>>> 5c29e4567f8d9e253740f1a3353942ac03cbae43

                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Insira seu email" required="required" /><br>

                            <label for="sobre">Assunto</label>
                            <input type="text" name="assunto" class="form-control" id="sobre" placeholder="Insira o assunto" required="required" />

                        </div>
                        <div class="col-md-6">

                            <label for="mensagem">Mensagem</label>
                            <textarea name="mensagem" id="message" class="form-control" rows="7" cols="25" required="required" placeholder="Insira a sua mensagem aqui."></textarea>

                            <br><button title="Enviar." type="submit" class="btn btn-primary pull-right" id="enviar">Enviar</button>
<<<<<<< HEAD
                                
=======
                                <class="btn btn-primary pull-right">
>>>>>>> 5c29e4567f8d9e253740f1a3353942ac03cbae43
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-5">
            <form>
                <legend><h3 align=center><b>Outras formas de contatos</b></h3></legend>
<<<<<<< HEAD
                    
=======
                    <legend>
>>>>>>> 5c29e4567f8d9e253740f1a3353942ac03cbae43

                
                <label><a href="#"><img class="img-responsive" id="twitter" title="Página da empresa no Twitter." src="img/Twitter.png" alt="" width="70" height="70"></a></label>
                <label><a href="#"><img class="img-responsive" id="facebook" title="Página da empresa no Facebook." src="img/facebook.png" alt="" width="70" height="70"></a></label>
                <label><a href="#"><img class="img-responsive" id="instagram" title="Página da empresa no Instagram." src="img/instagram.png" alt="" width="70" height="70"></a></label>
                <label><a href="#"><img class="img-responsive" id="google+" title="página da empresa no Google Plus." src="img/google+.png" alt="" width="70" height="70"></a></label>

            </form>
        </div>
    </div>
</div><br>
</main>

<?php include 'Rodape.php'; ?>