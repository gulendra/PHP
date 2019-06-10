<?php
$uid=$_GET['uid'];
require_once "dbconnect.php";
$sql_del="delete from employee where id=$uid";
$resp=mysql_query($sql_del);
if($resp)
header('location:read_tbl.php');
else
echo "Record not deleted";
?>