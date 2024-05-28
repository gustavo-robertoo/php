<?php 
   $var1 = array("Gustavo ", "17 ", "RuaA ", "Santos ", "Sao paulo ", "250132");
   $var2 = array("Fabio ", "39 " , "RuaB ", "Guanambi ", "Bahia ", "839452");
   $var3 = array("Guilherme ", "18 ", "RuaC ", "Iuiu ", "Bahia ", "238952");

echo "[for]:";
for ($a=0; $a<count($var1); $a++){
    echo $var1[$a];
   }
echo "<br>";
echo "[for]:";
   for ($a=0; $a<count($var2); $a++){
    echo $var2[$a];
   }
echo "<br>";
echo "[for]:";
   for ($a=0; $a<count($var3); $a++){
    echo $var3[$a];
   }
   
?>