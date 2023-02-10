<?php 

$numero1 = 10;
$numero2 = 15;

if($numero1 >= $numero2){
  echo "O numero $numero1 é maior ou igual ao numero $numero2. primeiro if<br>";
}else{
  echo "O numero $numero1 não é maior ou igual ao numero $numero2. primeiro else<br>";
  if($numero2 > $numero1){
      echo "O numero $numero2 é maior ao numero $numero1. segundo if<br>";
    }else{
      echo "O numero $numero2 não é maior ao numero $numero2. segundo else<br>";
  }
}

?>