<?php
include("conecta.php");
include("banco-contato.php");

$id = $_POST['id'];
removeContato($conexao, $id);
header("Location: contato-lista.php");
die();

?>