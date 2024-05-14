<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
<?php 

    $varIdade = array("Fábio" => 39, "Gustavo" => 17, "Guilherme" => 16);
    
    $varRUA = array("Fábio" => "RuaA", "Gustavo" => "RuaB", "Guilherme" => "RuaC");

    $varCID = array("Fábio" => "Santos", "Gustavo" => "Guanambi", "Guilherme" => "Iuiu");

    $varEST = array("Fábio" => "Sao paulo", "Gustavo" => "Bahia", "Guilherme" => "Bahia");

    $varCPF = array("Fábio" => 2503189, "Gustavo" => 4206437, "Guilherme" => 7852374);

    $varAluno = array("Fábio", "Gustavo", "Guilherme");

    
    echo "$varAluno[0] possui $varIdade[Fábio] anos. Mora em $varRUA[Fábio], $varCID[Fábio], $varEST[Fábio]. CPF: $varCPF[Fábio]<br>";

    echo "$varAluno[1] possui $varIdade[Gustavo] anos. Mora em $varRUA[Gustavo], $varCID[Gustavo], $varEST[Gustavo]. CPF: $varCPF[Gustavo]<br>";

    echo "$varAluno[2] possui $varIdade[Guilherme] anos. Mora em $varRUA[Guilherme], $varCID[Guilherme], $varEST[Guilherme]. CPF: $varCPF[Guilherme]<br>";
    
    echo "Nome do aluno  " . $varAluno[0];
    ?>
</body>
</html>





