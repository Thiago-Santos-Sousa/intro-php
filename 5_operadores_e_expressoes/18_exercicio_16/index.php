<?php 

$numero1 = 5;
$numero2 = 3;

if($numero1 == $numero2){
  echo "O numero $numero1 é igual ao numero $numero2. <br>";
}else{
  echo "O numero $numero1 não é igual ao numero $numero2. <br>";
}

//

if($numero1 === $numero2){
  echo "O numero $numero1 é identico ao numero $numero2. <br>";
}else{
  echo "O numero $numero1 não é identico ao numero $numero2. <br>";
}

//

if($numero1 != $numero2){
  echo "O numero $numero1 não é igual ao numero $numero2. <br>";
}else{
  echo "O numero $numero1 é igual ao numero $numero2. <br>";
}

//

if($numero1 !== $numero2){
  echo "O numero $numero1 não é identico ao numero $numero2. <br>";
}else{
  echo "O numero $numero1 é identico ao numero $numero2. <br>";
}


?>