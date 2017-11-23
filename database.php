
<?php 
	// Ler Registros
function DBRead($table, $params = null, $fields = "*"){
		//$table = DB_PREFIX.'_'.$table;

	$query = "SELECT {$fields} FROM {$table} {$params}";
	$result = DBExecute($query);

	if(!mysqli_num_rows($result))
		return false;
	else{
		while ($res = mysqli_fetch_assoc($result)) {
			$data[] = $res;
		}
		return $data;
	}

}
	// Executa Querys
function DBExecute($query){
	$link = DBConnect();
	$result = @mysqli_query($link, $query) or die(mysqli_error($link));

	DBClose($link);
	return $result;
}
	// Grava registros
function DBCreate($table, array $data){
	//$table = DB_PREFIX.'_'.$table;
	$data = DBEscape($data);

	$fields = implode(', ', array_keys($data));
	$values = "'".implode("', '", $data)."'";

	$query = "INSERT INTO {$table} ({$fields}) VALUES ({$values})";

	return DBExecute($query);	
}
//Remove registro
function DBRemove($id = null){
	$link = DBConnect();
	$query = "DELETE FROM imovel WHERE idimovel = {$id}";
	return @mysqli_query($link, $query) or die(mysqli_error($link));
}
//insereproduto
function insereProduto($nome, $descricao, $foto, $timovel, $caluga){
	$link = DBConnect();
	$query = "INSERT INTO imovel (nome, descricao, TipoImovel, tipo_venda, foto) VALUES ('{$nome}', '{$descricao}', {$timovel}, {$caluga}, '{$foto}')";
	return @mysqli_query($link, $query) or die(mysqli_error($link));
}
//alteraProduto
function alteraProduto($id, $nome, $descricao, $foto, $timovel, $caluga){
	if($foto == null){
		$queryf = "SELECT foto FROM imovel WHERE idimovel = {$id}";
		$result_foto = DBExecute($queryf);
		foreach ($result_foto as $sfoto) {
			$foto = $sfoto['foto'];
		}
	}
	$link = DBConnect();
	$query = "UPDATE imovel SET nome = '{$nome}', descricao = '{$descricao}', TipoImovel = {$timovel}, tipo_venda = {$caluga}, foto = '{$foto}' WHERE idimovel = $id";
	return @mysqli_query($link, $query) or die(mysqli_error($link));
}