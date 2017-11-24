<?php
session_start();

if(!isset($_SESSION['nome']) && !isset($_SESSION['senha']))
{
  header("location: Login.php");
}
?>
<?php require 'cabecalho_adm.php' ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Edit - Produtos</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="container">
    <?php 
    require 'config.php';
    require 'connection.php';
    require 'database.php';  
  
    $id = $_POST['id'];
    $result_imovel =  DBRead('imovel', "WHERE idimovel = $id");
    ?>
    <?php if ($result_imovel) : ?>
      <?php foreach ($result_imovel as $v) :  ?>
        <div class="container text-center">
          <h2>Alterando Produto</h2>
        </div>
       
        <form action="editProduto.php" method="post">
          <hr>
          <input type="hidden" name="id" value="<?php echo $v['idimovel'] ?>">
          <div class="form-row">
            <div class="form-group col-md-7">
              <label for="imagem">Nova Imagem:</label>
              <input type="file" name="foto"/>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="campo2">Nome</label>
              <input type="text" class="form-control" name="nome" value="<?php echo $v['nome'] ?>">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-7">
              <label for="tipoImovel">Tipo de Imovel</label>
              <p> <select class="w3-select form-control" name="tipoImovel">
                <option value="1">Casa</option>
                <option value="2">Apartamento</option>
                <option value="3">Salas Comerciais</option>
                <option value="4">Galpão</option>
                <option value="5">Chácara</option>
                <option value="6">Lote/Terreno</option>
              </select></p>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="Venda">Venda ou Aluguel</label>
              <select  class="w3-select form-control" name="venda">
                <option value="1">Comprar</option>
                <option value="2">Alugar</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-lg-6">
              <label for="campo3">Descrição</label>
              <textarea name="descricao" class="form-control" rows="7" cols="25"><?php echo $v['descricao'] ?></textarea>
            </div>
          </div>

          <div id="actions" class="form-row">
            <div class="col-md-12">
              <button type="submit" class="btn btn-primary">Salvar</button>
              <a href="admProdutos.php" class="btn btn-default">Cancelar</a>
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