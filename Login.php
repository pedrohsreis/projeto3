<!DOCTYPE html>
<html>
<head>
  <title>Login - Felicidade Imoveis</title>
<link rel="icon" href="img/icone.png">  
  <meta charset="UTF-8">
  <meta name ="Descriçao" content="Login">
  <link rel="stylesheet" href = "css/Login.css">
  <link rel="stylesheet"  type="text/css" href="bootstrap/css/bootstrap.min.css">
  <?php
  include 'cabecalho.php';
  ?>


</head>
<body>

<div class="container">
<div class="pandorabox" style="margin-top:30px">
  <div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">

      <div class="panel-heading"><h3 class="panel-title"><strong>Login </strong></h3>
      </div>
      
      <div class="panel-body">
       <form role="form" action = "Valida.php" method='POST'>
         

   <!--<div class= "alert alert-danger">
                <a class="close" data-dismiss="alert" href="#">×</a> Nome de Usuário ou Senha Incorretos!
              </div> -->
              <div style="margin-bottom: 12px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="login-username"  type="text" class="form-control" name="nome" value="" placeholder="Nome de usuário">                                        
              </div>
              
              <div style="margin-bottom: 12px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="login-password"  type="password" class="form-control" name="Senha" placeholder="Senha">
              </div>
              
              <div class="input-group">
               
              </div>
              
              <button type="submit" class="btn ">Login</button>
              
                </form>                
                </div>
              </div>
            </div>
          </div>
        </div>
</body>
</html>


