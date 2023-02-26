<?php 

$numero1 = 0;

while($numero1 < 10){

  echo "entrando no loop. $numero1 <br>";

  $numero1++;
}

echo "Continuando código. <br>";

//

echo "<br>";

$numero2 = 10;

while($numero2 > 0){

  echo "Entrando no loop, decrementando. $numero2 <br>";

  $numero2-=2;
}

//

echo "<br>";

$numero3 = 10;

while($numero3 > 0){
  
  if($numero3 % 2 != 0){
    
    echo "Entrando no loop. $numero3 <br>";
  }

  $numero3--;
}

?>