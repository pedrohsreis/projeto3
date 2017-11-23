
<?php

if(isset($_POST['nome']))
{ 
    
    if(isset($_POST['Senha']))
    { 
      include 'conexao.php';
      session_start();

      $nome = $_POST['nome'];
      $senha = base64_encode($_POST['Senha']);
      

     $sql = "SELECT * FROM user WHERE username='$nome' and senha = '$senha'";
    $sqll = mysqli_query($conn, $sql);
      $aq = mysqli_fetch_assoc($sqll);
      $conta = mysqli_num_rows($sqll);
 	
     if($conta<=0)
      {
        session_destroy();
        unset ($_SESSION['nome']);
        unset ($_SESSION['senha']);

        ?>
        <script>
			alert("Nome de usuário ou senha incorretos"); 
				
		</script>
  
        <?php   
        echo '<meta HTTP-EQUIV="Refresh" CONTENT="1; URL=Login.php">';
      }
      else
      {
        
        $_SESSION['nome'] = $nome;
        $_SESSION['senha'] = $senha;

        header("location: home_adm.php")

      } 
    }
    
    exit;
}



?>