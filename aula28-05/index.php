 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
 </head>
 <body>
    <h2>Constantes</h2>
    <?php 
       define("PI", 3.1415);
       echo PI ;
       echo "<br>";
       ?>

       <h3>Constantes Pré-definidas</h3>
       <?php
    function funcConsts(){
        echo "ARQUIVO: ".__FILE__."<br>";
        echo "DIRETÓRIO: ".__DIR__."<br>";
        echo "LINHA: ".__LINE__."<br>";
        echo "FUNÇÃO: ".__FUNCTION__."<br>";
        echo "<br>";
    }

    funcConsts();
    ?>

    <h3>Variaveis Superglobais (pré-definidas)</h3>
    <?php 
         $vars_pre = get_defined_vars();
         print_r($vars_pre);
    ?>
    <h3>Funções-PHP</h3>
    <?php
        function nome_funcao($par_1 = 0, $par_2 = "vazio") {
            echo "Código da Função <br>";
            return "Dado de Retorno: ".$par_1."/".$par_2;
            }
            $retorno = nome_funcao();
            echo $retorno."<br><br>";
            $retorno = nome_funcao(12, "Bill Gates");
            echo $retorno."<br><br>";
    ?>   

    <?php 
        function soma(){
            $a = 2;
            $b = 4;
            echo "valor da soma é: ";
            echo $a + $b;
        }

        soma();
        echo "<br>";
    ?>
    
    <?php
        function soma2($p1, $p2){
            $soma = $p1 + $p2;
            echo "A soma é $soma <br>";
            return $soma;
        }

        soma2(2,3);

        ?>

    <?php  
        function SeM($p1, $p2, $p3){
            $soma = $p1 + $p2;
            echo "O resultado é " . $soma * $p3;
            echo "<br>";
        }

        SeM(2,5,8);
    ?>

    <?php
        function exemplo($p1, $p2){
         $soma = $p1 + $p2;
         $divisao = $soma / $p2;
         $subtracao = $divisao - $p2;
         return $subtracao;
        }

        $retorno = exemplo(6,2);
        echo "O resultado das operações será " . $retorno;
    ?>

    
 </body>
 </html>