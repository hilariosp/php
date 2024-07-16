<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <form action="listaprod.php" method="get">
        <p>Produto: <input type="text" name="produto" id="produto"/></p>
        <p>Marca: <select name="marca" id="marca">
        <option value=""></option>
        <option value="gucci">Gucci</option>
        <option value="prada">Prada</option>
        <option value="fendi">Fendi</option>
        <option value="versace">Versace</option>
        </select></p>
        <p>Tamanho: <select name="tamanho" id="tamanho">
        <option value=""></option>
        <option value="pp">PP</option>
        <option value="p">P</option>
        <option value="m">M</option>
        <option value="g">G</option>
        <option value="gg">GG</option>
        </select></p>
        <p>Preço: <input type="number" name="preco" id="preco" min="1" max="32"/></p>
        <p>Cor: <input type="text" name="cor" id="cor"/></p>
        <p>Gênero <select name="genero" id="genero">
        <option value=""></option>
        <option value="m">M</option>
        <option value="f">F</option>
        </select></p>
        <p>Data da compra: <input type="date" name="datacompra" id="datacompra"/></p>
        <input type="submit" placeholder="enviar"/>
    </form>

</body>
</html>