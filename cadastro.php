<?php
session_start();

if(!isset($_SESSION['nome']) && !isset($_SESSION['senha']))
{
  header("location: Login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de usuário</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="icon" href="img/icone.png">  
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
</head>
<body>

 <div class="btn-group btn-group-justified" align="center">
  

         <?php include 'cabecalho_adm.php';?>

 </div>
    <div class="container" align="center">
     <section class="container">
         <h1>Cadastro de Usuário</h1>
         <hr><br>
         
         <form method="post" action="consultas.php">
             
             Nome  <br>
             <input type="text" name="username" class="campo" maxlenght="45" required autofocus/><br>
             <br>
             Tipo<br>
             <div class="form-row">
            <div class="form-group">
              <select class="form-group" name="tipouser">
                <option value="1" >Master</option>
                <option value="2" >Administrador</option>
                <option value="3">Corretor</option>
              </select>
              <br>
            </div>
          </div>

             Senha <br>
             <input type="password" name="senha" class="campo" maxlenght="100" required/><br>
             <br>
             <input type="reset" value="Limpar" class="btn"/>
             <button class="btn">Salvar e Consultar</button>
             <br><br>
         </form>
     </section>
 </div>
</body>
    <br><br><?php include 'rodape_adm.php';?>
</html>