<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>array e laços</h1>
    <h2>Exemplo 01</h2>

    <pre> 
<?php
    $A1 = array("Antonio", "luis", "jose", "joão");
    echo "$A1[0] <br>";
    echo "$A1[1] <br>";
    echo "$A1[2] <br>";
    echo "$A1[3] <br>";
?>
    </pre>

    <h2>Exemplo 02</h2>

    <pre>
<?php 
    $A2 = array(10, 9, 8, 7);
    foreach($A2 as $dado){
        echo "$dado";
        echo "<br>";
       }
?>
    </pre>
    <h2>impressao com for</h2>
    <pre>
<?php
    $A3 = array(1, 2, 3, 4);
    for ($a=0; $a<count($A3); $a++){
     echo $A3[$a];
     echo "<br>";
    }
?>
    </pre>

    <h2>impressao com for(2)</h2>

    <pre>
<?php
    $A4 = array("Antonio", "luis", "jose", "joão");
     for($a=0; $a<count($A4); $a++){
     echo "$A4[0]";
     echo "<br>";
    }
?>        

    </pre>
    <h2>impressao com for(3)</h2>
    <pre>

<?php
    for($x=0; $x<4; $x++){
        echo "A posição $x possui o valor de $A2[$x]";
        echo "<br>";
    }
?>

    </pre>
    <h2>Impressao com foreach</h2>
    <pre>

<?php
    foreach($A2 as $dado){
        echo "$dado";
        echo "<br>";
       }    
?>

    </pre>
    <h2>Array: Definição explicita (com chave)</h2>
    <pre>

<?php
    $var = array( "Maria" => 24,
                  "Joao" => 44,
                  "José" => 12,
                  "Neusa" => 73
    );
    foreach($var as $dado){
        echo "$dado";
        echo "<br>";
    }
?>

    </pre>
    <h2>foreach com chave valor</h2>
    <pre>

<?php
    foreach($var as $chave => $valor){
    echo "$chave tem $valor anos <br>";
  }
?>
    </pre>
    <h2>print_r mostra o que tem armazenado no array</h2>
    <pre>
<?php
        print_r($var);
?>
    </pre>
    <h2>array multidimencional definição explicita</h2>
    <pre>
<?php
    $alunos = array("Maria" =>
                            array("endereco" => "Rua chile 1046 ",
                                  "bairro" => "Rebouças ",
                                  "cidade" => "Guanambi "),
                    "João" =>
                            array("endereco" => "Rua Iapó 234",
                                  "bairro" => "Prado Velho"),
                    "Zeca" =>
                            array("endereco" => "Rua Iapó 234",
                                  "bairro" => "Prado Velho")
);
print_r($alunos);

print_r($alunos["Maria"]);

print_r($alunos ["Maria"]["endereco"]);

print_r($alunos["Maria"]["bairro"]);

print_r($alunos["Maria"]["cidade"]);

echo "<br>";
     foreach($alunos as $chave => $aux){
        echo "$chave: <br>";
        foreach($aux as $chave => $valor){
            echo " - $valor<br>";
        }
     }
    
?>


    </pre>
</body>
</html>