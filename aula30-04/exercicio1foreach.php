<?php 

$var1 = array("Gustavo ", "17 ", "RuaA ", "Santos ", "Sao paulo ", "250132");
$var2 = array("Fabio ", "39 ", "RuaB ", "Guanambi ", "Bahia ", "839452");
$var3 = array("Guilherme ", "18 ", "RuaC ", "Iuiu ", "Bahia ", "238952");

echo "[foreach]:";
   foreach($var1 as $dado){
    echo "$dado";
   }
   echo "<br>";
   echo "[foreach]:";
   foreach($var2 as $dado){
    echo "$dado";
   }
   echo "<br>";
   echo "[foreach]:";
   foreach($var3 as $dado){
    echo "$dado";
   }

?>