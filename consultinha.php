<?php
session_start();

if(!isset($_SESSION['nome']) && !isset($_SESSION['senha']))
{
  header("location: Login.php");
}
?>
<?php
include_once("conexao.php");
 
$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";


$sql = "select * from user where username like '%$filtro%'";
$consulta = mysqli_query($conn,$sql);
$registros = mysqli_num_rows($consulta);
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de usuário</title>
    <link rel="icon" href="img/icone.png">  
    <link rel="stylesheet" href="css/consulta.css">
    <link rel="stylesheet" href="css/normalize.css">

        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
   <?php
        include("cabecalho_adm.php");
    ?>
</head>
<body>
    <div class="caixinhas">
     <section class="Container" align="center">
        <br><br>
         <font size="20">Consulta de Usuários</font>
         <hr>
         <form action="" method="get">
             <input type="text" name="filtro" class="campo" placeholder="Digite o nome:" required autofocus>
             <input type="submit" value="Pesquisar" class="btn btn-primary">
         </form>
         
         <?php
         print "<br>";
         print "Resultado da pesquisa com a palavra <strong>$filtro</strong><br><br>";
         print "$registros registros encontrados:";
         ?>
         <form action="admUsers.php" method="post">
            <button class="btn btn-primary">Alterar Usuários</button>
        </form>

         <?php
         print "<br><br>";
         ?>
         <div class="table-responsive">
        <table class="table table-bordered">
        <thead>
        <th scope="col"><strong>Nome</strong></th>
        <th scope="col"><strong>Tipo</strong></th>
        <th scope="col"><strong>Senha</strong></th>
         
         <?php
         while($exibirRegistros = mysqli_fetch_array($consulta)){
             
             $codigo =  $exibirRegistros[0];
             $nome = $exibirRegistros[1];
             $tipo = $exibirRegistros[2];
             $senha = $exibirRegistros[3];
             ?>
            <tr> 
            <th><?php echo "$nome"; ?></th>
            <th><?php echo "$tipo"; ?></th>
            <th><?php echo "$senha"; ?></th>
        </tr>
            <?php
         }
         mysqli_close($conn);
         ?>
     </thead>
 </table>
</div>
     </section>
 </div>
     <div class="footer">
        <?php
        include("rodape_adm.php");
        ?>
    </div>
</body>
</html>