<?php
$pur_amt=1000;
$discount=0;
$coupn=0;
if($pur_amt>=1000)
{
$discount=10;
$coupn=5;
}
$dis_amt=($pur_amt*$discount)/100;
$payable_amt=$pur_amt-$dis_amt;
echo("Your Amount is=".$payable_amt);
?>
