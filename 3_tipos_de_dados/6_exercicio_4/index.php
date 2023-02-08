<?php 

$numero1 = 3.45;
$numero2 = 100.89;
$numero3 = - 5.89;

echo $numero1;
echo "<br>";

echo $numero2;
echo "<br>";

echo $numero3;
echo "<br>";

if(is_float($numero3)){
  echo "OK! O número 3 é do tipo Float! <br>";
}else{
  echo "Não é um Float <br>";
}

?>