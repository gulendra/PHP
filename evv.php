<?php
$str1="welcome";
$str2="MySql";
$str3="JQuery";

function rev_str($pstr)
{
	$len = strlen($pstr);
	for($i=$len-1;$i>=0;$i--)	
	{
		$ret= $pstr;
	}
	echo  $ret($str1);
}

?>