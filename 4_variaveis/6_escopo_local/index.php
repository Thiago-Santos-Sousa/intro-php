<?php 

$numero = 10;
echo " Variável global $numero <br>";

function teste(){
  $numero = 50;

  echo " Variável local $numero <br>";
}

teste();
?>