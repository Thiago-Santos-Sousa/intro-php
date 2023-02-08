<?php 

$valor1 = 100;

$valor2 =& $valor1;

echo $valor1;
echo "<br>";

echo $valor2;
echo "<br>";


echo "variável após a mudança de ref <br>";
$valor1 = 150;

echo $valor1;
echo "<br>";

echo $valor2;
echo "<br>";

//

$nome1 = "Thiago";
$nome2 =& $nome1;
echo $nome1;
echo "<br>";

echo $nome2;
echo "<br>";

echo "variável após a mudança de ref <br>";
$nome2 = "Geremias";
echo $nome1;
echo "<br>";

echo $nome2;
echo "<br>";
?>