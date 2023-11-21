<?php
$firstNumber = 0;
$secondNumber = 0;
$operationType= 0; 
$result= 0;

echo " Ingrese el primer número :\n" ;
$firstNumber =readline();

echo "Ingrese el segundo número :\n";
$secondNumber =readline();

echo "Dígite operación a realizar \n" ;
echo " + -> SUMA \n ";
echo " - -> RESTA \n ";
echo " * -> MULTIPLICACION \n ";
echo " / -> DIVISION \n ";
$operationType = readline() ; 

switch($operationType){
case "+" :
$result = $firstNumber + $secondNumber;
break;

case "-" :
$result = $firstNumber - $secondNumber;
break;

case "*" :
$result = $firstNumber * $secondNumber;
break;

case "/":
$result = $firstNumber / $secondNumber;
break;
  
default :
  echo " Digitó una operación inválida, vuelva al menú inicial \n";
  }
echo " El valor de la operación indicada es: " .$result ;