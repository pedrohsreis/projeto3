<?php
session_start();

if(!isset($_SESSION['nome']) && !isset($_SESSION['senha']))
{
  header("location: Login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/Responder.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

	
	<?php
	include("conecta.php");
	include("cabecalho_adm.php");
	$email = $_POST['email'];
	?>
	<title>Respondendo</title>
</head>
<body>
	
	<div class="resposta">
<div class="col-md-5">
    <div class="form-area">  
        <form action="envia_contato.php" method="post" role="form">
        <br style="clear:both">
                    <h1 class="pr" style="margin-bottom: 25px; text-align: center;">Resposta</h1>
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="nome" placeholder="Nome" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="email" name="email" readonly value="<?php echo "{$email}"; ?>" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="subject" name="assunto" placeholder="Assunto" required>
					</div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" placeholder="Resposta" maxlength="140" rows="7"></textarea>                    
                    </div>
            
        <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Enviar</button>
        </form>
    </div>
</div>
</div>
                <br></br>
<footer>
<?php
	include("rodape_adm.php");
?>
</footer>
</body>
</html>