<?php
$age = 0;
$firstName="";
$lastname="";

echo "Ingrese su nombre :\n ";
$firstName = readline();
echo "Ingrese su apellido :\n " ;
$lastName = readline();
echo "Ingrese su edad :\n " ;
$age = readline();

echo " Hola" ." ". $firstName . " " . $lastName ."" ;

if ($age < 18) {
echo " eres menor de edad ";
}
else {
  echo "eres mayor de edad ";
}
?>