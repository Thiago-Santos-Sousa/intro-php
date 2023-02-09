<?php 

echo 5 / 2; // forma um float
echo "<br>";


if(is_float(5 / 2)){
  echo " 5 / 2 é float! <br>";
}

echo 2 . 3;  // forma uma string
echo "<br>";

if(is_string(2 . 5)){
  echo "2 . 5 é uma string! <br>";
}

$nome = "Thiago";
$Sobrenome = "Santos de Sousa";

$nomeCompleto = $nome . " " . $Sobrenome;

echo $nomeCompleto;
?>