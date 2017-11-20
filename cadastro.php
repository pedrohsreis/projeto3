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
         <h1>Cadastro de Úsuários</h1>
         <hr><br><br>
         
         <form method="post" action="processa.php">
             <input type="submit" value="Salvar" class="btn"/>
             <input type="reset" value="Limpar" class="btn"/>
             <br><br>
             
             Nome <br>
             <input type="text" name="username" class="campo" maxlenght="45" required autofocus/><br>
             Tipo <br>
             <input type="number" name="tipouser" class="campo" maxlenght="11" required/><br>
             Senha <br>
             <input type="password" name="senha" class="campo" maxlenght="100" required/><br>
         </form>
     </section>
 </div>
</body>
</html>