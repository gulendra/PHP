<?php
$str = "Pintu";
$res_str = str_shuffle("$str");
$otp = substr($res_str,2,4);
echo $otp;

?>
