<?php 

$velocidade = 180;

if($velocidade < 80){
  echo "Você está na velocidade correta para esta via. <br>";
}else if($velocidade == 80){
  echo "ATENÇÂO! Você está no limite de velocidade desta via, reduza sua velocidade. <br>";
}else{
  echo "MULTA! Você está acima do limite de velocidade desta via, reduza sua velocidade. <br>";
}

?>