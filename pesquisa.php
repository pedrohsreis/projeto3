<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
        <link rel="stylesheet" href="Pesquisa.css">

        <title></title>
    </head>
    <body>
        <section><!---pesquisa-->
            <div  class="w3-row-padding">
                <div  class="w3-col m4">
                     <input class="w3-input " style="width:100%" type="text" name="Nome"  size="40" placeholder="Digite um bairro ou cidade. ">
                </div>
               <div class="w3-col m1 ">
                    <form method="post" >
                        <p> <select class="w3-select" name="tipoImovel">
                            <option value="Casa">Casa</option>
                            <option value="Apto">Apartamento</option>
                            <option value="SalaComercial">Salas Comerciais</option>
                            <option value="Galpao">Galpão</option>
                            <option value="Chac">Chacara</option>
                            <option value="L/t">Lote/Terrono</option>
                                </select></p>
                </div>
                <div class="w3-col m1 " >
                    <form method="post" >
                        <select  class="w3-select" name="compraroualugar">
                            <option value="Comprar">Comprar</option>
                            <option value="alugar">Alugar</option>
                        </select>
                </div>
                <div class="w3-col m2" >
                    <input id="divBusca" style="width: 50%" class="w3-btn w3-signal-black w3-large w3-round-large" type="submit" value="Buscar" >
                </div>
            </div>
            
        </section>
    </body>
</html>