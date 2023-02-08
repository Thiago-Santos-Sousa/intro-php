<?php 

// 0, 0.0 == false

$comparar = 10 > 5;

if(is_bool($comparar)){
  echo 'É um tipo boleano. <br>';
}

//

if(is_bool(0)){
  echo 'É um tipo boleano. <br>';
}else{
  echo 'Não é um tipo boleano. <br>';
}

//

if(is_bool(false)){
  echo 'É um tipo boleano. <br>';
}else{
  echo 'Não é um tipo boleano. <br>';
}

?>