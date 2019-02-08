<?php
$pur_amt=10000;
$discount=10;
$copn=5;
$dis_amt=($pur_amt*($discount+$copn))/100;
$payble_amt = $pur_amt- $dis_amt;
echo ("Dear Customer, your payble amount=$payble_amt");
?>
