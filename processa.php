<?php

include_once("conexao.php");

$username = $_POST['username'];
$tipouser = $_POST['tipouser'];
$senha = $_POST['senha'];

$sql = "insert into user (username,tipouser,senha) values ('$username','$tipouser','$senha')";
$salvar = mysqli_query($conn,$sql);

$linhas =mysqli_affected_rows($conn);

mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de usuário</title>
        <link rel="stylesheet" href="css/normalize.css">

        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
</head>
<body>

 <div class="btn-group btn-group-justified" align="center">
     <nav>
         <ul class="menu">
            <a href="index.php" class="btn btn-primary"><li>Página Home</li></a>
             <a href="cadastro.php" class="btn btn-primary"><li>Cadastro</li></a>
             <a href="consultas.php" class="btn btn-primary"><li>Consulta</li></a>
         </ul>
     </nav>
 </div>
    <div class="container" align="center">
     <section class="container">
         <h1>Confirmação de cadastro</h1>
         <hr><br><br>
         
         <?php
         
         if($linhas ==1)
         {
             print "<h2>Cadastro efetuado com sucesso!</h2>";
         }else{
             print "<h2>Cadastro NÃO efetuado.</h2>";
         }
         
         ?>
         
         
     </section>
 </div>
</body>
</html>