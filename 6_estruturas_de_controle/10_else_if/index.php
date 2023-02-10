<?php 

$idade = 17;

if($idade >= 16 && $idade < 18){
  echo "Olá! Você é menor de idade, entretando já pode exercer o direito do voto caso queira. <br>";
}else if($idade >= 18 && $idade < 76){
  echo "Olá! Você é maior de idade e tem obrigação de votar. <br>";
}else{
  echo "Olá. Você não precisa votar. <br>";
}
?>