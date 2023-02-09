<?php 

$numero1 = 5;
$numero2 = 3;
$numero3 = 6;
$numero4 = 2;

$operacao =  $numero1 - $numero3 / $numero2 * $numero4;
echo "$operacao <br>";
$operacao = $numero1 - $numero3 / ($numero2 * $numero4);
echo "$operacao <br>";
$operacao =  ($numero3 - $numero1) / $numero2 * $numero4;
echo "$operacao <br>";

?>