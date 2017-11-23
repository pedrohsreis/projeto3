<?php 
require 'config.php';
require 'connection.php';
require 'database.php';
?>
<?php 
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$foto = $_POST['foto'];
$timovel = $_POST['tipoImovel'];
$caluga = $_POST['venda'];


if(insereProduto($nome, $descricao, $foto, $timovel, $caluga)){
	header("Location: Formulario-Produto.php?removido=true");	
}
else{
	header("Location: Formulario-Produto.php?removido=false");
}
die();