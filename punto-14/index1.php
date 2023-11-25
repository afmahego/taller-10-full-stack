<?php
function validLenght ($pass){
  return strlen($pass) >= 8;
}
function validUpperLetter($pass){   
  $arrayPass=str_split($pass);
  foreach($arrayPass as $letter){
    if(ctype_upper($letter)){
      return true;
    }    
  }
  return false ;
}
function validNumber($pass){
  $arrayPass = str_split ($pass);
  foreach ($arrayPass as $letter){
    if(is_numeric($letter)){
      return true ;
    }
  }
  return false; 
} 
?>