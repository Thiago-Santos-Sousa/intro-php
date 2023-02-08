<?php 

function teste(){
  $numero = 0;

  $numero++;

  echo "$numero <br>";
}

teste();
teste();
teste();

function testeEstatic(){
  static $numero = 0;

  $numero++;

  echo "$numero <br>";
}

testeEstatic();
testeEstatic();
testeEstatic();
?>