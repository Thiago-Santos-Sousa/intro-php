<?php 

if(10 >= 10 || 5 === "5"){
  echo "A operação é verdadeira. <br>";
}else{
  echo "A operação é falsa. <br>";
}

$numero1 = 50;
$numero2 = 5;

if($numero1 === "50" || $numero2 == "5"){
  echo "A operação é verdadeira. <br>";
}else{
  echo "A operação é falsa. <br>";
}

if($numero1 === "50" || $numero2 == 5*3){
  echo "A operação é verdadeira. <br>";
}else{
  echo "A operação é falsa. <br>";
}

if(($numero1 === "50" || $numero2 == 2.5*2) && $numero1 >= $numero2){
  echo "A operação é verdadeira. <br>";
}else{
  echo "A operação é falsa. <br>";
}
?>