<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="listaprod.php" method="get" required>

    <p> Produto: <input type="text" name="produto" required placeholder="Digite o produto"/> </p>

    <p> Marca: <input type="text" name="marca" required placeholder="Digite aqui"/> </p>

    <p> Tamanho: <input list="tamanho" name="tamanho" required/>
                <datalist id="tamanho">
                    <option value="PP">
                    <option value="P">
                    <option value="M">
                    <option value="G">
                    <option value="GG">
                </datalist>
             </p>

    <p> PreçoV: <input type="float" name="precoV" required/> </p>

    <p> PreçoC: <input type="float" name="precoC" required/> </p>

    <p> Modelo: <input type="text" name="modelo" required/> </p>

    <p> Cor: <input  type="text" name="cor"/> </p>

    <p> Gênero: <input type="radio" name= "gender" value="Masculino">Masculino
                <input type="radio" name= "gender" value="Feminino">Feminino
</p>

    <p> Data da compra: <input type="date" name="data" max="2024-07-09" required/> </p>

    <p> <input type="submit" value="Enviar"/> </p>
    


    </form>
</body>
</html>