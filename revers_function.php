<?php
$str1="welcome";
$str2="MySql";
$str3="JQuery";

function rev_str($pstr)
{
	$len = strlen($pstr);
	for($i=$len-1;$i>=0;$i--)	
	{
		echo $pstr[$i];
	}
}
rev_str($str1);
echo "<br/>";
rev_str($str2);
echo "<br/>";
rev_str($str3);
?>