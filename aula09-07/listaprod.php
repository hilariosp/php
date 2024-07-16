<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
   
    <table>
        <tr>
            <th>Produto</th>
            <th>Marca</th>
            <th>Tamanho</th>
            <th>Preço</th>
            <th>Cor</th>
            <th>Gênero</th>
            <th>Data da Compra</th>
        </tr>
        <tr>
            <td><?php echo $_GET['produto'];?></td>
            <td><?php echo $_GET['marca'];?></td>
            <td><?php echo $_GET['tamanho'];?></td>
            <td><?php echo $_GET['preco'];?></td>
            <td><?php echo $_GET['cor'];?></td>
            <td><?php echo $_GET['genero'];?></td>
            <td><?php echo $_GET['datacompra'];?></td>
        </tr>
            </table>

</body>
</html>

