<?php 

$pessoa = [
  'nome' => 'Thiago Santos de Sousa', 
  'idade' => 18, 
  'filhos' => true
];

$nome = $pessoa['nome'];
echo "Olá! $nome, seja bem vindo(a). <br>";

if($pessoa['idade'] >= 18){
  echo "$nome, você é maior de idade! <br>";
}else{
  echo "$nome, você não é maior de idade! <br>";
}

if($pessoa['filhos'] >= 1){
  echo "$nome, você tem 1 filho! <br>";
}else{
  echo "$nome, você não tem filhos! <br>";
}
?>