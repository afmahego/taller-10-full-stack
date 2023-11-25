<?php
include"./operations.php";

$firstNumber = 0;
$secondNumber = 0;
$option ="";
 
$firstNumber = getNumber();
$secondNumber = getNumber();

$option= showMenu();
$result = operate ($firstNumber,$secondNumber,$option );

echo " El resultado de la operación indicada es : " . $result ; 

?>


