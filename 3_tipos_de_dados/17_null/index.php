<?php 

echo null;
echo "<br>";

$pessoa = null;
echo $pessoa;
echo "<br>";

if(is_null($pessoa)){
  echo "A variável pessoa é do tipo null. <br>";
}

//

$pessoa = "Joao";

if(is_null($pessoa)){
  echo "A variável pessoa é do tipo null. <br>";
}else{
  echo "Olá, $pessoa, a variável pessoa não é do tipo null. <br>";
}

?>