<?php
include("conecta.php");
function listaContatos($conexao){
	$contatos = array(); 
$resultado = mysqli_query($conexao, "select * from contato");
while($pessoa = mysqli_fetch_assoc($resultado)){
		array_push($contatos, $pessoa);
	}
return $contatos;
}


function removeContato($conexao, $id){
	$query = "delete from contato where idcontato = {$id}";
	return mysqli_query($conexao, $query);
}


?>