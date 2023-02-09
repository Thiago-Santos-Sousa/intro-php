<?php 

// Operador de igualdade ==

$numero = 10;

if($numero == '10'){
  echo "O numero $numero é igual a '10'! <br>";
} else {
  echo "O numero $numero não é igual a '10'! <br>";
}

$nome = "Thiago Santos de Sousa";
$nomeSistema = "Thiago Santos de Souza";

if($nome == $nomeSistema){
  echo "Olá, $nomeSistema. Seja bem vindo(a)! <br>";
} else{
  echo "Olá, $nome. Infelizmente você não esta cadastrado em nosso sistema.";
}

// Operador de indetico a ===


?>