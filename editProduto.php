<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Adm - Produtos</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
</head>
<body>
  <?php 
  require 'config.php';
  require 'connection.php';
  require 'database.php';
  ?>

  <h2>Atualizar Produto</h2>
  <form action="eProdut.php?id=<?php echo $v['idimovel']; ?>" method="post">
    <hr />
    <div class="row">
      <div class="form-group col-md-7">
        <form action="gravar.php" method="POST" enctype="multipart/form-data">
          <label for="imagem">Imagem:</label>
          <input type="file" required name="arquivo"/>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-3">
        <label for="campo2">Nome</label>
        <input type="text" class="form-control" name="customer['cpf_cnpj']" value="<?php echo $v['nome']; ?>">
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-2">
        <label for="campo3">Descrição</label>
        <input type="text" class="form-control" name="customer['birthdate']" value="<?php echo $v['descricao']; ?>">
      </div>
    </div>
    
    <div id="actions" class="row">
      <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="index.php" class="btn btn-default">Cancelar</a>
      </div>
    </div>
  </form>
</body>
</html>