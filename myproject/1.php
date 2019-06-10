<?php 
session_start();
require_once "dbconnect.php";
if($_POST)
{
$opass=$_POST["opass"];
$npass=md5($_POST["npass"]);
$cpass=$_POST["cpass"];
$uid=$_SESSION['uid'];
$oqr="select password from employee where id=$uid";
$resultset=mysql_query($oqr);
$count=mysql_num_rows($resultset);
if($count[0]==$opass)
{
	if($npass==$cpass)
	{
		$qry="update employee set password=$npass where id=$uid";
		if($qry)
		{
echo "<script>alert('Password change')</script>";
		}			
		}
		else{
			echo "<script>alert('old passs and new pss not match')</script>";
		}	
}else{
	echo "<script>alert('old new pss not mactch')</script>";
}
}
?>


<form method="post">
<table>
<tr>
<td>Old Password</td>
<td><input type="text" name="opass"></td></tr>
<tr>
<td>New Password</td>
<td><input type="text" name="npass"></td></tr>
<tr>
<td>Confirm Password</td>
<td><input type="text" name="cpass"></td></tr>
<tr>
<td></td>
<td><input type="submit"name="submit" value="change Password"></td>
</tr>
</table>
</form>