<?php 

$numero1 = 0;

do{

  echo "Entrando no loop do while, $numero1. <br>";
  $numero1++;
  
}while($numero1 < 10);

//
echo "<br>";

$numero2 = 10;

do{
  
  echo "Entrando no loop do while $numero2. <br>";
  $numero2--;
  
}while($numero2 > 0);

//
echo "<br>";

$numero3 = 10;
$texto = "Condiional loop número: ";

do{
  
  echo "Entrando no loop do while $numero3. <br>";

  if($numero3 == 5){

    echo "$texto $numero3. <br>";
  }
  $numero3--;
}while($numero3 > 0);
?>