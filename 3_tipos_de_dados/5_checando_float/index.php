<?php 

$texto = "abcd";
$numero = 12.57;

if (is_float($texto)) {
  echo "OK! Essa variável é do tipo FLOAT. <br>";
}else{
  echo "Não é um tipo FLOAT! <br>";
}

//

if(is_float($numero)){
    echo "OK! Essa variável é do tipo FLOAT. <br>";
}else{
  echo "Não é um tipo FLOAT! <br>";
}

?>