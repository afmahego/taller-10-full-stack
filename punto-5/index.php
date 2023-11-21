<?php
const TICKET_PRICE = 25000;
$membershipType = "";
$personNumber= 0; 

echo "Digite el número de personas:\n";
$personNumber =readline();
echo "Digite el tipo de membresía;\n";
$membershipType =readline();

$totalPay = $personNumber * TICKET_PRICE;

if (strtoupper($membershipType) == "A" || strtoupper($membershipType) == "B" ){
    $totalPay = $totalPay * 0.7;
  }  else {
    echo " Usted no cuenta con una membresía válida para 
     recibir descuento \n"; 
  }   
   echo "El precio a pagar es de $" . number_format($totalPay);
?>