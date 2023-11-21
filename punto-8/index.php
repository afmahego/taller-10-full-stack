<?php

const TICKET_PRICE = 25000;
const DISCOUNT_A = 0.7;
const DISCOUNT_B = 0.75;
const DISCOUNT_C = 0.9;
const DISCOUNT_D = 0.95;

$membershipType = "";
$personNumber= 0; 

echo "Digite el número de personas:\n";
$personNumber = readline();
echo "Digite el tipo de membresía;\n";
$membershipType =readline();

$totalPay = $personNumber * TICKET_PRICE;

switch (strtoupper($membershipType)){
    case "A":
        $totalPay = $totalPay * DISCOUNT_A ;
        break;
    case "B" :
        $totalPay = $totalPay * DISCOUNT_B ;
        break;
    case "C":
         $totalPay = $totalPay * DISCOUNT_C;
        break;
    case "D":
        $totalPay = $totalPay * DISCOUNT_D;
        break;
    
default:
    echo "Usted no cuenta con una membresía para descuento \n" ;
}   
echo "El precio a pagar es $" . number_format($totalPay);   

?>