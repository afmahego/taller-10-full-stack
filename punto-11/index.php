<?php

$number = 1; 
$sum = 0;

for($num ; $number <=100; $number = $number + 2 ){
  echo  $number . " \ ";
  $sum = $sum + $number;
}

echo " La sumatoria de estos valores es :" . $sum;
?>