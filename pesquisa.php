<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

        <title></title>
    </head>
    <body>
        <section><!---pesquisa-->
            <div  class="w3-row-padding">
                <div  class="w3-col m4">
                    <form method="post" action="produtos.php" >
                     <input class="w3-input " style="width:100%" type="text" name="Nome"  size="40" placeholder="Digite um bairro ou cidade. ">
                </div>
               <div class="w3-col m1 ">
                    
                        <p> <select class="w3-select" name="tipoImovel" id="ti">
                            <option value="1">Casa</option>
                            <option value="2">Apartamento</option>
                            <option value="3">Salas Comerciais</option>
                            <option value="4">Galpão</option>
                            <option value="5">Chácara</option>
                            <option value="6">Lote/Terreno</option>
                                </select></p>
                </div>
                <div class="w3-col m1 " >
                    
                        <select  class="w3-select" name="compraroualugar" id="ca">
                            <option value="1">Comprar</option>
                            <option value="2">Alugar</option>
                        </select>
                </div>
                <div class="w3-col m2" >
                    <input id="divBusca" style="width: 50%" class="w3-btn w3-signal-black w3-large w3-round-large" type="submit" value="Buscar" >
                </div
            </div>
            
        </section>
    </body>
</html>