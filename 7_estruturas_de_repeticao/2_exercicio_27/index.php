<?php 

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$meuAray = count($array);
$inicio = 0;

while($meuAray > $inicio){

  echo "Lisatando meu array. $meuAray <br>";

  $meuAray--;
}

//

echo "<br>";

$lista = ["Thiago", 2.6, "Jubileu", [], true, "Thais Santos", 7, false, 8.75, "Estêvão"];

$minhaLista = count($lista);
$comeco = 0;

while($comeco < $minhaLista){
  
  if(is_string($lista[$comeco])){

    echo "Listando apenas strings. $lista[$comeco]. <br>";
  }
  
  $comeco++;
}

?>