<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <?php require 'cabecalho_adm.php' ?>

  <title>Edit - Usuários</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <META HTTP-EQUIV="Expires" CONTENT="-1">
<META HTTP-EQUIV="Pragma" CONTENT="no-cache"
</head>
<body>
  <div class="container">
    <?php

    require 'config.php';
    require 'connection.php';
    require 'dataBaseUsers.php';  
  
    $id = $_POST['id'];
    $result_user =  DBRead('user', "WHERE iduser = $id");
    ?>
    
    <?php if ($result_user) : ?>
      <?php foreach ($result_user as $v) :  ?>
        <div class="container text-center">
          <h2>Alterando Usuário</h2>
        </div>
       
        <form action="editUser.php" method="post">

    
    <input name="id" type="hidden"  value="<?php echo $v['iduser'] ?>" />
          <br>
    
          <div class="form-row">
          <div class="form-group">
            <label for="campo1">Nome  </label>
              <input type="text" name="username" class="campo" maxlenght="100"  value="<?php echo $v['username'] ?>" required/><br>
          </div>
        </div>
          <br>
          
          <div class="form-row">
            <div class="form-group">
              <label for="campo2">Tipo  </label>
              <select name="tipouser">
                <option value="1" >oi</option>
                <option value="2" >2</option>
                <option value="3">3</option>
              </select>
              <br>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="campo2">Senha  </label>
              <input type="password" name="senha" class="campo" maxlenght="11"  value="<?php echo $v['senha'] ?>"    required/><br>
            </div>
          </div>


          
          

          <div id="actions" class="form-row">
            <div class="col-md-12">
              
              <button type="submit" class="btn btn-primary">Salvar</button>
              <a href="admUsers.php" class="btn btn-default">Cancelar</a>
            </div>
          </div>
      


        </form>
      </div>
      <br>
      <br>
    <?php endforeach; ?>
  <?php else : ?>
    <tr>
      <td colspan="6">Nenhum registro encontrado.</td>
    </tr>
  <?php endif; ?>
</body>
</html>
<?php require 'rodape_adm.php' ?>   
    
    