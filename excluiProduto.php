 <?php 
    require 'config.php';
    require 'connection.php';
    require 'database.php';

    $id = $_POST['id'];
	DBRemove($id);

    header("Location: admProdutos.php?removido=true"); 
    die();
?>