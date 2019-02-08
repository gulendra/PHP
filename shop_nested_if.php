<?php
$pur_amt=10000;
if($pur_amt>=1000)
{
$discount=10;

if($pur_amt>=2000)
$discount=20;

if($pur_amt>=3000)
$discount=30;
$dis_amt=($pur_amt*$discount)/100;
$payble_amt=$pur_amt-$dis_amt;
echo("dear custmer, your amt=".$payble_amt);
}
?>