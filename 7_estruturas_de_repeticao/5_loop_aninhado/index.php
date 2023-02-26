<?php 

$numero1 = 5;
$inicio = 0;

while($numero1 > $inicio){

  $numero2 = 1;
  while($numero2 <= 3){

    echo "Loop interno. $numero2 <br>";

    $numero2++;
  }

  echo "Loop externo. $numero1 <br>";
  
  $numero1--;
}

?>