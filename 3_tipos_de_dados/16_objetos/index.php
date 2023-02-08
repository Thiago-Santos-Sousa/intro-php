<?php 

class Pessoa{

  public $nome;
  
  function falar(){
    echo "Olá, pessoal! <br>";
  }
}

$thiago = new Pessoa();

$thiago->nome = "Thiago";

echo $thiago->nome;
echo "<br>";

echo $thiago->falar();

?>