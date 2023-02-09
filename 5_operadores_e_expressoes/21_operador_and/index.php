<?php 

//O operador lógico AND && Só retornara true quando todas as condições forem verdadeiras//

if(10 > 5 && 10 <= 10){
  echo "10 < 5 e 10 é <=10. <br>";
}else{
  echo "10 !< 5 e 10 é !<=10. <br>";
}

//

if(10 <= 5 && 10 <= 10){
  echo "10 <= 5 e 10 é <=10. <br>";
}else{
  echo "10 !<= 5 e 10 é !<=10. <br>";
}


//

$numero1 = 10;
$numero2 = 5;

if($numero1 >= $numero2 && $numero2 > 0){
  echo "O numero $numero1 é maior ou igual ao numero $numero2, e o numero $numero2 é maior do que 0. <br>";
}else{
  echo "O numero $numero1 não é maior ou igual ao numero $numero2, e o numero $numero2 não é maior do que 0. <br>";
}

//

if(($numero1 > $numero2 && $numero2 == $numero1) && $numero2 <= 5){
  echo "true <br>";
}else{
  echo "false <br>";
}
?>