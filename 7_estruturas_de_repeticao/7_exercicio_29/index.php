<?php 

$cem = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

$meuCem = count($cem);
$inicio = 0;

while($inicio < $meuCem){

  $resultCem = $cem[$inicio];

  if($resultCem == 30 || $resultCem == 40){

    echo "Pulando numero $resultCem. <br>";
    
    $inicio++;
    continue;
  }

  echo "Entrou no loop. " . $resultCem . "<br>";
  
  $inicio++;
}

?>