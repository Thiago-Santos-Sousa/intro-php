<?php 

$numero1 = 10;
$numero2 = 56;

$texto1 = "Olá!";
$texto2 = "Hello!";

if(is_int($numero1)){
  $result = $numero1 * 2;
  echo "$result, este foi o valor do numero multiplicado por 2. <br>";
  
  if($result > 100){
    echo "O numero $result, infomado é maior do que 100. <br>";
  }else{
    echo "O numero $result, informado é menor do que 100. <br>";
  }
}else{
  echo "O vaor informado não é um número! <br>";
}

//


if(is_int($numero2)){
  $result = $numero2 * 2;
  echo "$result, este foi o valor do numero multiplicado por 2. <br>";
  
  if($result > 100){
    echo "O numero $result, infomado é maior do que 100. <br>";
  }else{
    echo "O numero $result, informado é menor do que 100. <br>";
  }
}else{
  echo "O vaor informado não é um número! <br>";
}

//

if(is_int($texto1)){
  $result = $texto1 * 2;
  echo "$result, este foi o valor do numero multiplicado por 2. <br>";
  
  if($result > 100){
    echo "O numero $result, infomado é maior do que 100. <br>";
  }else{
    echo "O numero $result, informado é menor do que 100. <br>";
  }
}else{
  echo "O vaor informado não é um número! <br>";
}

//

if(is_int($texto2)){
  $result = $texto * 2;
  echo "$result, este foi o valor do numero multiplicado por 2. <br>";
  
  if($result > 100){
    echo "O numero $result, infomado é maior do que 100. <br>";
  }else{
    echo "O numero $result, informado é menor do que 100. <br>";
  }
}else{
  echo "O vaor informado não é um número! <br>";
}
?>