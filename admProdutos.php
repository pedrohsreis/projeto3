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

<section class="table-responsive">
    <table class="table table-striped table-bordered">
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
        <?php
        $result_imovel =  DBRead('imovel', 'order by idimovel');
        foreach ($result_imovel as $v){
         echo "<tr><th scope = 'row'>".$v['idimovel']."</th>";
         echo "<td><img width='160' height='120' src='img/" . $v['foto'] . "' alt='Foto de exibição'/></td>";
         echo "<td>".$v['nome']."</td>";
         echo "<td>".$v['descricao']."</td>";
         echo "<td>Alterar</td>";
         echo "<td>Remover</td></tr>";
       }
       ?>
     </tbody>
   </table>
 </section>
</body>
</html>



