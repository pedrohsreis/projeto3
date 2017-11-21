<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Adm - Produtos</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
</head>
<body>
  <div class="container">
    <header>
      <div class="row">
        <div class="col-sm-6">
          <h2>Clientes</h2>
        </div>
        <div class="col-sm-6 text-right h2">
          <a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Produto</a>
          <a class="btn btn-default" href="admProdutos.php"><i class="fa fa-refresh"></i> Atualizar</a>
        </div>
      </div>
    </header>
    <?php 
    require 'config.php';
    require 'connection.php';
    require 'database.php';
    ?>
    <div class="table-responsive">
      <table class="table table-hover table-condensed">
        <thead>
          <tr>
            <th>ID</th>
            <th>Imagem</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th class="col-sm-2 text-center">Opções</th>
          </tr>
        </thead>
        <tbody>
          <?php $result_imovel =  DBRead('imovel', 'order by idimovel')?>
          <?php if ($result_imovel) : ?>
            <?php foreach ($result_imovel as $v) :  ?>
              <tr>
               <th scope = row><?php echo $v['idimovel'] ?></th>
               <td><img width=90 height=60 src="img/<?php echo $v['foto'] ?>" alt="Foto de exibição"></td>
               <td><?php echo $v['nome'] ?></td>
               <td><?php echo $v['descricao'] ?></td>
               <td class="actions text-center">
                <a href="editProduto.php?idimovel=<?php echo $v['idimovel']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
                <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="#"><i class="fa fa-trash"></i> Excluir</a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else : ?>
          <tr>
            <td colspan="6">Nenhum registro encontrado.</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div><!--table-responsive-->
</div><!--container-->
</body>
</html>