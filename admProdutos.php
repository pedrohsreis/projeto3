<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Adm - Produtos</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
  <?php 
  require 'config.php';
  require 'connection.php';
  require 'database.php';
  ?>

<div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>Imagem</th>
          <th>Nome</th>
          <th>Descrição</th>
          <th>Alterar</th>
          <th>Remover</th>
        </tr>
      </thead>
      <tbody>
        <?php $result_imovel =  DBRead('imovel', 'order by idimovel')?>
        <?php foreach ($result_imovel as $v) :  ?>
          <tr>
             <th scope = row><?php echo $v['idimovel'] ?></th>
             <td><img width=160 height=120 src="img/<?php echo $v['foto'] ?>" alt="Foto de exibição"></td>
             <td><?php echo $v['nome'] ?></td>
             <td><?php echo $v['descricao'] ?></td>
             <td>Alterar</td>
             <td>Remover</td>
          </tr>
       <?php endforeach; ?>
     </tbody>
   </table>
 </div>
</body>
</html>