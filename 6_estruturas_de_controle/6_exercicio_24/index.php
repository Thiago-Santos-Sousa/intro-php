<?php 

$cidade = "Celandia";
$idade = 27;
$filho = true;

if(is_int($cidade)){
  echo "O dado inserido é um numero (INT). $cidade<br>";
}else{
  echo "ERRO. O dado inserido não é um numero (INT). $cidade<br>";
}


if(is_int($idade)){
  echo "O dado inserido é um numero (INT). $idade<br>";
}else{
  echo "ERRO. O dado inserido não é um numero (INT). $idade<br>";
}

if(is_int($filho)){
  echo "O dado inserido é um numero (INT). $filho<br>";
}else{
  echo "ERRO. O dado inserido não é um numero (INT). $filho<br>";
}

?>