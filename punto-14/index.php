<?php
include"./passwordCheck.php";
$user = "";
$password = "";
echo "Dígite usuario a registrar \n" ;
$user = readline();
echo "Dígite contraseña a registrar \n" ;
$password = readline();
if (validLenght($password)){
  if(validUpperLetter($password)){   
    if(validNumber($password)){
      echo "La contraseña ingresada es SEGURA \n";
    } else {
echo "Su contraseña no tiene caracteres númericos \n";
    }
    }else{
echo " Su contraseña no posee letras mayusculas \n" ;
    }
    }else{
echo" Su contraseña no tiene una longitud de caracteres segura \n" ;
    }
?>