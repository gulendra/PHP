<?php
function format_str($pstr)
{
	$rstr=strip_tags(trim(addslashes($pstr)));
	return $rstr;
}
?>