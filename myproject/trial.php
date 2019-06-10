<?php
class emp
{
	public function dbconnect()
	{
		mysql_connect("localhost","root","");
		mysql_select_db("comp");
		
	}
	public function user_register($uname,$uemail,$umobile,$upassword,$ugender)
		{
			$this->dbconnect();
		require_once "format.php";
	$sql_chk="select email from employee where email='".format_str($uemail)."'";
$resultset=mysql_query($sql_chk);
$count = mysql_num_rows($resultset);
if($count>0)
echo "Email already exists";
else
{		
	$sql_qry = "insert into employee(name,email,mobile,password,gender) values('$uname','$uemail','$umobile','$upassword','$ugender')";
				$response=mysql_query($sql_qry);
				if($response)
			echo "Registration is success";
				else
				echo "Registration is Failed";
	}
		}
}
extract($_POST);
if(isset($register))
{
			$obj = new emp;
			$obj->user_register($name,$email,$mobile,md5($password),$gender);
}
else
echo "Invalid request";
?>




