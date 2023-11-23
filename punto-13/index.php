<?php
$numberArray =array(12,34,26,67,100);
  $sum = 0;

foreach($numberArray as $number){
  echo $number ."\n";
  $sum = $sum + $number;
}
echo "La suma del arreglo es:" . $sum;