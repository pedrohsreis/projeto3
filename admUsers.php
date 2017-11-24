<?php require 'cabecalho_adm.php' ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Adm - Usuários</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="container">
    <header>
      <div class="row">
        <div class="col-sm-6">
          <h2>Usuários</h2>
        </div>
        <div class="col-sm-6 text-right h2">
          <a class="btn btn-primary" href="cadastro.php"><i class="fa fa-plus"></i> Novo Usuário</a>
          <a class="btn btn-default" href="admUsers.php"><i class="fa fa-refresh"></i> Atualizar</a>
        </div>
      </div>
    </header>
    <?php if(array_key_exists("alterado", $_GET) && $_GET["alterado"]==true): ?>
      <p class="alert-success text-center">Alterações salvas!</p>
    <?php elseif(array_key_exists("alterado", $_GET) && $_GET["alterado"]==false) : ?>
      <p class="alert-danger text-center">Erro ao salvar alterações!</p>
    <?php endif; ?>
    <?php 
    if(array_key_exists("removido", $_GET) && $_GET["removido"]==true){
     ?>
     <p class="alert-success text-center">Produto removido com sucesso!</p>
     <?php 
   }
   ?>
   <?php 
   require 'config.php';
   require 'connection.php';
   require 'dataBaseUsers.php';
   ?>
   <div class="table-responsive">
    <table class="table table-hover table-condensed">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Tipo</th>
          <th class="col-sm-2 text-left">Opções</th>
        </tr>
      </thead>
      <tbody>
       <?php $result_user =  DBRead('user', 'order by iduser')?>
        <?php if ($result_user) : ?>
          <?php foreach ($result_user as $v) :  ?>
            <tr>
             <th scope = row><?php echo $v['iduser'] ?></th>
            
             <td><?php echo $v['username'] ?></td>
             <td><?php echo $v['tipouser'] ?></td>
             <td class="actions">
              <div style="display: inline-flex">
                <form action="formEditUser.php" method="post">
                  <input type="hidden" name="id" value="<?=$v['iduser']?>">
                  <button class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</button>
                </form>
                <form action="excluiUsuario.php" method="post">
                  <input type="hidden" name="id" value="<?=$v['iduser']?>">
                  <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Remover</button>
                </form>
              </div>
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
<?php require 'rodape.php' ?>