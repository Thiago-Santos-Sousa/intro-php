<?php 

$teste = "asd";
echo "Testando variável global 1 $teste <br>";

if(5 > 2){
  $teste = "dsa";

  echo "Testando if $teste <br>";
}

echo "Testando variável global 2 $teste <br>";

// Até aqui, variáveis globais

function funcao(){
  $teste = "abcs";
  
  echo "Testando variável global 3 $teste <br>";
}
funcao();

// variável local

function testandoFuncaoGloal(){
  global $teste;

  echo "Testando global $teste";
}

testandoFuncaoGloal();

// metodo global chamado, a função execulta a variavel $teste global
?>