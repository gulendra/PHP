<?php
$cust=male;
$cust=female;
$pur_amt=1001;
$discount=0;
if($pur_amt>=1000)
$discount=18;
$dis_amt=($pur_amt*$discount)/100;
$payable_amt=$pur_amt-$dis_amt;
echo("Your Amount is=".$payable_amt);


?>