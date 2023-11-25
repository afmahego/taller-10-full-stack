<?php
function getNumber(){
  echo " Ingrese número a operar \n";
  return readline(); 
}
function showMenu (){
    echo"Dígite operacion a realizar \n";
    echo "1 - SUMA \n ";
    echo "2 - RESTA \n ";
    echo "3 - MULTIPLICACION \n ";
    echo "4 - DIVISION \n ";
  return readline(); 
}
function operate ($x, $y , $option){
  switch($option) {
  case 1: 
        return add($x ,$y);
  case 2 :
        return sub($x,$y);
  case 3: 
      return dot($x ,$y);
  case 4 :
      return div($x,$y);
    default:
    echo"La opción indicada no es válida" ;
    return 0;
}
  return ;
}
function add($x,$y){
  return $x + $y;
}
function sub($x,$y){
  return $x - $y;
}
function dot ($x, $y){
  return $x * $y;
}
function div ($x,$y){
  return $x/$y;
}
?>
