<?php 

$num = 10;

if(is_int($num)){                   //true
  echo "É um inteiro! <br>";
}

$texto = "Olá";

if (is_int($texto)) {
  echo "É um inteiro! <br>";
} else{
  echo "Não é um inteiro!";        //false
}

?>