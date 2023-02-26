<?php 

$numero = 4;

$limite = 30;

while($numero < $limite){

  if($numero == 24){

    echo "Parando loop, numero: $numero <br>";
    
    break;
  }
  
  echo "Entrou no loop, numero: $numero <br>";

  $numero+=2;
}

?>