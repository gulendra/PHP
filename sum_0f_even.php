<?php
$num=0;
$tot=0;
while ($num<=100)
 {
	if($num % 2==0)
	{
		$tot=$tot+$num;
	}
	$num++;
}
echo ($tot);
?>