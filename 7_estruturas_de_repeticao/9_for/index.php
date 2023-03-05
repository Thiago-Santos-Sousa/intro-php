<?php 

//CONTADOR; CONDIÇÃO; INCREMENTO/DECREMENTO;

$texto = "Escopo global ";

for($i = 0; $i < 10; $i++){
  
  if($i == 7){

    echo $texto . $i . "<br>";
  }
  
  echo "Entrando no loop for $i. <br>";
}

?>