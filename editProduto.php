<?php 
require 'config.php';
require 'connection.php';
require 'database.php';
?>
<?php 
$id = $_POST['id'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$foto = $_POST['foto'];
$timovel = $_POST['tipoImovel'];
$caluga = $_POST['venda'];


if(alteraProduto($id, $nome, $descricao, $foto, $timovel, $caluga)){
	header("Location: admProdutos.php?alterado=true");	
}
else{
	header("Location: admProdutos.php?alterado=false");
}
die();