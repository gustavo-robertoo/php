<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="atv.css">
</head>
<body>

<pre>
<?php     
    $array = [
        'alunos' => [
        [
        'id' => 1,
        'nome' => 'fabio ',
        'idade' => 20,
        'cidade' => 'iuiu ',
        'endereco' => 'Rua sao jose domingos ',
        'nota' => 3
        ],
        ['id' => 2,
         'nome' => 'jao ',
         'idade' => 30,
         'cidade' => 'guanambi ',
         'endereco' => 'rua jales man ',
         'nota' => 8
        ],
        ['id' => 3,
         'nome' => 'gustavo ',
         'idade' => 17,
         'cidade' => 'porto',
         'endereco' => 'rua otavio medeira ',
         'nota' => 10
        ],
    ]
    ];

print_r ($array['alunos'][0]);
print_r ($array['alunos'][1]);
print_r ($array['alunos'][2]);

print_r ($array['alunos'][0]['nome']);
print_r ($array['alunos'][1]['nome']);
print_r ($array['alunos'][2]['nome']);

echo "<br>";

print_r($array['alunos'][0]['cidade']);
print_r($array['alunos'][1]['cidade']);
print_r($array['alunos'][2]['cidade']);

echo "<br>";

print_r($array['alunos'][0]['endereco']);
print_r($array['alunos'][1]['endereco']);
print_r($array['alunos'][2]['endereco']);

    ?>
    <pre>
    <table>
        <tr>
            <th>Aluno</th>
            <th>Endereco</th>
            <th>Idade</th>
            <th>Cidade</th>
        </tr>
        <tr>
            <td><?php
            print_r($array['alunos'][0]['nome']);
            ?>
            </td>
            <td><?php
            print_r($array['alunos'][0]['endereco']);
            ?></td>
            <td><?php
            print_r($array['alunos'][0]['idade']);
            ?></td>
            <td><?php
            print_r($array['alunos'][0]['cidade']);
            ?></td>
        </tr>
        <tr>
            <td><?php
            print_r($array['alunos'][1]['nome']);
            ?>
            </td>
            <td><?php
            print_r($array['alunos'][1]['endereco']);
            ?></td>
            <td><?php
            print_r($array['alunos'][1]['idade']);
            ?></td>
            <td><?php
            print_r($array['alunos'][1]['cidade']);
            ?></td>
        </tr>
        <tr>
            <td><?php
            print_r($array['alunos'][2]['nome']);
            ?></td>
            <td><?php
            print_r($array['alunos'][2]['endereco']);
            ?></td>
            <td><?php
            print_r($array['alunos'][2]['idade']);
            ?></td>
            <td><?php
            print_r($array['alunos'][2]['cidade']);
            ?></td>
        </tr>
    </table>
    </pre>

<pre>
<table>
        <tr>
            <th>id</th>
            <th>Nome</th>
            <th>idade</th>
            <th>cidade</th>
            <th>nota</th>
        </tr>
            <?php for($a=0; $a<(count($array['alunos'])); $a++) { ?>
                
                <tr>
                    <td><?php print_r($array['alunos'][$a]['nome']);?></td>
                    <td><?php print_r($array['alunos'][$a]['endereco']);?></td>
                    <td><?php print_r($array['alunos'][$a]['idade']);?></td>
                    <td><?php print_r($array['alunos'][$a]['cidade']);?></td>
                    <td><?php print_r($array['alunos'][$a]['nota']);}?></td>
                </tr>
        </table>
</pre>
      <?php 
     if( $array['alunos']['nota'] >= 7){
        print_r($array['alunos'][$a]['nome']);
     }
      ?>
</body>
</html>