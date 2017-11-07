<?php

$host = 'localhost';
$user = 'root';
$senha = '';
$bd = 'felicidade';

$conn = mysqli_connect($host, $user, $senha, $bd);




if(!$conn)
{
		die("Falha na conexao: " . mysqli_connect_error());
}

	

?>