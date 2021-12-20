<?php 

/*
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.
*/

function getRandomNumbers ($min, $max, $totNum){

  $newArray = [];

  // if($max < $totNum){
  //   $totNum = $max;
  // }

  while(count($newArray) < $totNum){

    $randomNum = rand($min, $max);

    if(!in_array($randomNum, $newArray)){
      $newArray[] = $randomNum;
    }

  }

  return $newArray;

}

var_dump(getRandomNumbers(1, 15, 15));


?>