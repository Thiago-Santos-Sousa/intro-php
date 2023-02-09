<?php 

$numero1 = 4;
$numero2 = 5;
$numero3 = 7;

if($numero1 > $numero2){
  echo "O numero $numero1 é maior que o numero $numero2. <br>";
}else{
  echo "O numero $numero1 não é maior que o numero $numero2. <br>";
}

if($numero2 > $numero3){
  echo "O numero $numero2 é maior que o numero $numero3. <br>";
}else{
  echo "O numero $numero2 não é maior que o numero $numero3. <br>";
}

if($numero3 >= $numero2){
  echo "O numero $numero3 é maior ou igual ao numero $numero2. <br>";
}else{
  echo "O numero $numero3 não é maior ou igual ao numero $numero2. <br>";
}
?>