<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
<?php require 'cabecalho_adm.php' ?>
  <title>Edit - Usuários</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="container">
    <?php 
    require 'config.php';
    require 'connection.php';
    require 'dataBaseUsers.php';  
  
     
    $id = $_POST['id'];
    var_dump($id);
    print_r($_POST);
 
?>
<form method="POST" ><div class="form-row">
            <div class="form-group">
              <label for="campo">Nova senha  </label>
              <input type="password" name="senha" class="campo" maxlenght="11"   required/><br><br>
            </div>
            <div class="form-group">
              <label for="campo">Confirme sua nova senha  </label>
              <input type="password" name="senha2" class="campo" maxlenght="11"   required/><br><br>
            </div>
          </div>
         <div id="actions" class="form-row">
            <div class="col-md-12">
              <button type="submit" class="btn btn-primary">Salvar</button>
              <a href="formEditUser.php" class="btn btn-default">Cancelar</a>
            </div>
          </div>

</form>
</body>
</html>