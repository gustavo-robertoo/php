<?php

$alunos = array("Gustavo", "Kailla", "Joao", "Gabriel", "Guilherme", "Bruna", "Rayfrana");

for($a=0;$a<count($alunos);$a++){
   if($a==4){
    echo "$alunos[$a]";
   }
}

echo "<br>";

for($a=0;$a<count($alunos);$a++){
    if($a!=4){
     echo "$alunos[$a] ";
    }
 }

?>