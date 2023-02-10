<?php 

$numero = 15;

switch($numero){
  case $numero == 5;
    echo "O numero $numero, é igual a 5. <br>";
  break;
  
  case $numero > 5 && $numero < 15;
    echo "O numero $numero, é maior que 5 e menor a 15. <br>";
  break;

  case $numero > 15;
    echo "O numero $numero, é maior a 15. <br>";
  break;

  default:
    echo "O numero inserido está incorreto. <br>";
}

?>