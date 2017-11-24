 <?php 
    require 'config.php';
    require 'connection.php';
    require 'databaseUsers.php';

    $id = $_POST['id'];
	DBRemove($id);

    header("Location: admUsers.php?removido=true"); 
    die();
?>