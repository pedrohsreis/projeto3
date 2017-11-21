<head>
  <title>Felicidade Imoveis</title>
  <meta charset="UTF-8">
  <meta name ="Descriçao" content="Login">
  <link rel="stylesheet" href = "css/Login.css">
  <link rel="stylesheet"  type="text/css" href="bootstrap/css/bootstrap.min.css">


</head>

<div class="container" style="margin-top:30px">
  <div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
      <div class="panel-heading"><h3 class="panel-title"><strong>Login </strong></h3>
        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Esqueceu a senha?</a></div>
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
              
              <hr style="margin-top:10px;margin-bottom:10px;" >
              
              <div class="form-group">
               

                <div class="form-group">
                  
                  <div style="font-size:85%">
                    Ainda não é registrado?
                    <a href="cadastro.php" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                      Registre-se
                    </a>
                  </div>
                  
                </div> 
              </form>                                    
            </div> 
          </form>
        </div>
      </div>
    </div>

  </div>



