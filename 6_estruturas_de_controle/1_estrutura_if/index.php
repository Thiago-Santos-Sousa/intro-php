<?php 

if(5 > 2){
  
  echo "A condição é true. <br>";
}

//

if(5 > 2 && (34*5) < 7){
  echo "A condição é true. <br>";
}else{
  echo "A condição é false. <br>";
}

//

$numero1 = 15;
$numero2 = "15";

if($numero1 == $numero2 || $numero1 === $numero2){
  echo "A condição é true. <br>";
}else{
  echo "A condição é false. <br>";
}

?>