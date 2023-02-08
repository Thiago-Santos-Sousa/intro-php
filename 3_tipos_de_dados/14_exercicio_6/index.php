<?php 

$carro = [
  'marca' => 'FIAT', 
  'modelo' => 'Toro', 
  'ano' => 2018, 
  'flex' => false,
  'velocidadeMax' => 220
];

print_r($carro);
echo "<br>";

echo "meu carro é o $carro[marca], $carro[modelo]. <br>";

if($carro['flex']){
  echo 'Meu carro é flex! <br>';
}else{
  echo 'Meu carro não é flex! <br>';
}

$velocidadeMaxima = $carro['velocidadeMax'];
echo "A velocidade máxima da $carro[modelo], é de $velocidadeMaxima. <br>";
?>