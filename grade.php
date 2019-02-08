<?php
$s1=80;$s2=80;$s3=80;$s4=80;$s5=80;$s6=55;
if($s1>=35&&$s2>=35&&$s3>=35&&$s4>=35&&$s5>=35&&$s6>=35)
{
	$total=$s1+$s2+$s3+$s4+$s5+$s6;
	$avg=$total/6;
if($avg>=75)
	echo ("Grade is A");
if($avg>=60&&$avg<75)
	echo ("Grade is B");
if($avg>=50&&$avg<60)
	echo ("Grade is c");
}
?>