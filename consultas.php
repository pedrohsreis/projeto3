<?php

include_once("conexao.php");
 
$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";


$sql = "select * from user where username like '%$filtro%'";
$consulta = mysqli_query($conn,$sql);
$registros = mysqli_num_rows($consulta);
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de usuário</title>
    <link rel="icon" href="img/icone.png">  
   
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
     <section class="Container" align="center">
         <h1>Consultas</h1>
         <hr>
         <form action="" method="get">
             Filtrar por nome: <input type="text" name="filtro" class="campo" required autofocus>
             <input type="submit" value="Pesquisar" class="btn">
         </form>
         
         <?php
         
         print "Resultado da pesquisa com a palavra <strong>$filtro</strong><br><br>";
         print "$registros registros encontrados";
         
         print "<br><br>";
         
         while($exibirRegistros = mysqli_fetch_array($consulta)){
             
             $codigo =  $exibirRegistros[0];
             $nome = $exibirRegistros[1];
             $tipo = $exibirRegistros[2];
             $senha = $exibirRegistros[3];
             
             print "<article>";
             
             print "$codigo<br>";
             print "Nome:$nome<br>";
             print "Tipo:$tipo<br>";
             print "Senha:$senha<br>";
             print "<hr>";
             
             print"</article>";
             
         }
         mysqli_close($conn);
         ?>
     </section>
</body>
</html>