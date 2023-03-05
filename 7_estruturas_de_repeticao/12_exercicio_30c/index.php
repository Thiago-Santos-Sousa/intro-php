<?php 

$array = [];

for($i = 9; $i <= 20; $i++){

  array_push($array, $i);
}

print_r($array);

for($i = 0; $i < count($array); $i++){


  if($array[$i] % 2 == !0){

    echo "Números Impares: $array[$i]. <br>";
  }else{
    // echo "Números Pares: $array[$i]. <br>";
  }
}


?>