<?php 

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

for($i = 0; $i < count($array); $i++){


  if($array[$i] % 2 == 0){

    echo "Número pares: $array[$i]. <br>";
  }else{
    echo "Números impares: $array[$i]. <br>";
  }
}

//
echo "<br>";

$usuario = [1.5888, "Thiago Santos", 15, "Thais Sampaio", "Claudio Duarte", true, 5.97, "Irineu José", false, "Maria Antonia", [], "Sem Nome"];

for($i = 0; $i < count($usuario); $i++){


  if(is_string($usuario[$i])){

    echo "Usuário: $usuario[$i]. <br>";
  }
}

?>