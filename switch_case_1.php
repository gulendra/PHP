<?php
$a=20;$b=100;
$opr="/";
switch ($opr)
 {
	case '+':
		$res=$a+$b;
		echo ("$res");
		break;
	case '-':
	if($a>$b)
		$res=$a-$b;
	else
		$res=$b-$a;
		echo("$res");
		break;
	case '*':
		$res=$a*$b;
		echo ("$res");
		break;
		default:
		echo (" Inavalid operator");
		break;
}


?>