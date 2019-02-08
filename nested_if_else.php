<?php
$pur_amt=10000;
$gender="male";
if($gender=="male")
{
	if($pur_amt>=10000)
		$discount=10;
	else
		$discount=5;

}
else{
	if($pur_amt>=10000)
$discount=20;
else
$discount=10;
}
$dis_amt=($pur_amt*$discount)/100;
$payble_amt=$pur_amt-$dis_amt;
echo ("payble amount=".$payble_amt);
?>