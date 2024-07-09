<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Produto</th>
            <th>Marca</th>
            <th>Tamanho</th>
            <th>PreçoV</th>
            <th>PreçoC</th>
            <th>Modelo</th>
            <th>Cor</th>
            <th>Gênero</th>
            <th>DTcompra</th>
        </tr>
        <tr>
            <td><?php echo $_GET['produto']?></td>
            <td><?php echo $_GET['marca']?></td>
            <td><?php echo $_GET['tamanho']?></td>
            <td><?php echo $_GET['precoV']?></td>
            <td><?php echo $_GET['precoC']?></td>
            <td><?php echo $_GET['modelo']?></td>
            <td><?php echo $_GET['cor']?></td>
            <td><?php echo $_GET['gender']?></td>
            <td><?php echo $_GET['data']?></td>
        </tr>
</body>
</html>