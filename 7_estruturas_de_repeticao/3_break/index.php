<?php 

$numero1 = 0;

while($numero1 < 10){

  echo "Entrando no loop, numero: $numero1 <br>";

  $numero1++;
}

//

echo "<br>";

$numero2 = 0;

while($numero2 < 10){
  
  if($numero2 == 5){

    echo "Saindo do loop, Instrução break. $numero2 <br>";
    break;
  }
  
  echo "entrando no loop, numero: $numero2 <br>";

  $numero2++;
}

?>