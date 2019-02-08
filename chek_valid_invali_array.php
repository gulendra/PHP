<?php
$fname="pintu.jpg";
$arr = explode(".",$fname);
$count = count($arr);
$fext = strtolower($arr[$count-1]);
$allowed_type = array('jpeg','jpg','gif','png');
if(in_array($fext, $allowed_type))
echo "File is Valid";
else
echo "File is Not  Valid";
?>
