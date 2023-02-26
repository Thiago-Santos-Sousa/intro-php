<?php 

$numero = 10;

while($numero > 0){

  if($numero > 3 && $numero < 6){

    echo "Pulando numero: $numero, intrução continue. <br>";

    $numero--;
    continue;
  }

  
  echo "Executando o loop, número: " . $numero . "<br>";

  $numero--;
}

?>