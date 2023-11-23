<?php
$number = 0; 
$result = 0;

echo" Digite número a multipicar \n";
$number = readline();

for ($n = 0; $n<=30 ; $n++){
  $result =$number * $n ;
    echo $number . " x " . $n ." = ". $result . "\n";  
}
?>