 <?php 
    require 'config.php';
    require 'connection.php';
    require 'conexao.php';
    require 'databaseUsers.php';

    $id = $_POST['id'];
    $nome = $_POST['username'];
    $tipouser = $_POST['tipouser'];
    $senha = $_POST['senha'];
    $senha2 = mysqli_query($conn,"SELECT senha FROM user WHERE iduser=$id");
    $row = mysqli_fetch_row($senha2);

    if($senha != $senha2)
    {
    	$senha = base64_encode($senha);
    		mysqli_query($conn, "UPDATE user set senha = '$senha' WHERE iduser=$id");
    }

	DBalteraProduto($id, $nome, $tipouser);

    header("Location: admUsers.php?alterado=true"); 
    die();
?>