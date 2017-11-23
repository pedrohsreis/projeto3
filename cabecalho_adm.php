<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="img/icone.png">  
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/cabecalho1.0.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <!--cabeçalho-->
  <header>
    <div class="cabecalhoprincipal">
      <img id="cb" class="img-responsive" src="img/logocabecalho.png" alt="logotipo">
      <img src="img/cabecalho.png" alt="imagem do cabecalho">
    </div>
    <!-- Navigation -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-menu" aria-expanded="false">
            <span class="sr-only">Botão de navegação</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="collapse-menu">
          <div class="container">
            <ul class="nav navbar-nav">
              <ul class="nav navbar-nav">
                <li><a href="home_adm.php">Home</a></li>
              </ul>
              <ul class="nav navbar-nav">
                <li><a href="#">Administração dos Produtos</a></li>
              </ul>
              <ul class="nav navbar-nav">
                <li><a href="contato-lista.php">Administração dos Contatos</a></li>
              </ul>
              <ul class="nav navbar-nav">
                <li><a href="cadastro.php">Cadastro dos Usuários</a></li>
              </ul>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="login.php">Logout</a></li>
            </ul>
          </div>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>    
  </header>
  <script src="js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>