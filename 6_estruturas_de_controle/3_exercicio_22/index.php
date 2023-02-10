<?php 

$idade1 = 33;
$idade2 = 14;

$maiorIdade = 18;
$menssagemTrue = "Você é maior de idade";
$menssagemFalse = "Você é menor de idade";

if($idade1 >= $maiorIdade){
  echo "$menssagemTrue. idade: $idade1. <br>";
}else{
  echo "$menssagemFalse. idade: $idade1. <br>";
}

if($idade2 >= $maiorIdade){
  echo "$menssagemTrue. idade: $idade2. <br>";
}else{
  echo "$menssagemFalse. idade: $idade2. <br>";
}

?>