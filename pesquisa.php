<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Language" content="pt-br">
    <meta http-equiv="Content-Language" content="pt-br">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <title></title>
</head>
<body>
    <div class="container" style="padding-left: 10%; padding-right: 10%;"><!---pesquisa-->
        <div  class="form-row">
            <div  class="col-md-5">
                <form method="post" action="produtos.php" >
                 <input class="w3-input " style="width:100%" type="text" name="Nome"  size="40" placeholder="Procure seu imóvel aqui.">
             </div>
             <div class="col-md-2 text-center">

                <p> <select class="w3-select" name="tipoImovel" id="ti">
                    <option value="1">Casa</option>
                    <option value="2">Apartamento</option>
                    <option value="3">Salas Comerciais</option>
                    <option value="4">Galpão</option>
                    <option value="5">Chácara</option>
                    <option value="6">Lote/Terreno</option>
                </select></p>
            </div>
            <div class="col-md-2 text-center " >

                <select  class="w3-select" name="compraroualugar" id="ca">
                    <option value="1">Comprar</option>
                    <option value="2">Alugar</option>
                </select>
            </div>
            <div class="col-md-2 text-center" >
                <input id="divBusca" style="width: 100%" class="w3-btn w3-signal-black w3-large w3-round-large" type="submit" value="Buscar" >
            </div>
        </div>

    </div>
</body>
</html>