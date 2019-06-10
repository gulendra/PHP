<?php
$uid=$_GET['uid'];
require_once "dbconnect.php";
extract($_POST);
if(isset($update))
{
$sql_update="update employee set name='$name',
mobile='$mobile' where id=$uid";
$resp=mysql_query($sql_update);
if($resp)
header('location:read_tbl.php');
else
echo "Problem occured while updating..!";
}

//fetching existing user information
$sql_get="select name,mobile from users_tbl where id=$uid";
$resultset=mysql_query($sql_get);
$row=mysql_fetch_assoc($resultset);

?>
<form method="post" action="">
Name : <input type="text" name="name" value="<?php echo $row['name'];?>"/><br/><br/>
Mobile: <input type="text" name="mobile" value="<?php echo $row['mobile'];?>"/><br/><br/>
<input type="submit" name="update" value="Update"/>
</form>