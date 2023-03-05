<?php 

// Estrutura de repetição orientada a arrays

// foreach($aaray as $item){
  
//   codigo
// }

$nomes = ["Thiago", "Thais", "Maria", "Zenilde"];

foreach($nomes as $nome){
  
  echo "O nome do indice atual é $nome. <br>";

  if($nome == "Thais"){

    echo "Olá, tudo bem? $nome. <br>";
  }
}

?>