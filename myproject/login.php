<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="public/stylesheets/font-awesome-5.7.1.css">
    <link rel="stylesheet" href="public/stylesheets/bootstrap.css">
    <link rel="stylesheet" href="public/stylesheets/mdb.css">
	 <link rel="stylesheet" href="public/stylesheets/style.css">
	<style>
	 .img{
	 width:150px;
	 height:150px;
	border-radius:45%
	 }
	 </style>
    <title>Login</title>
</head>
<body>
<!-- Main Navigation bar -->
<nav class="navbar navbar-expand-md blue-gradient-rgba navbar-dark" data-spy="affix">
 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto"> <a class="navbar-brand " href="#"><h4>PHP Admin <i class="fas fa-hand-point-right"></i></h4></a>  
            <li class="nav-item">
                <a href="register.php" class="nav-link">Register</a>
            </li>
			 <li class="nav-item" active>
                <a href="login.php" class="nav-link">Login</a>
            </li>
        </ul>
    </div>
</nav>
<!-- Main Content Section -->
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col text-center">
                <h2 class="text-danger">Login Here</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, placeat!</p>
            </div>
        </div>
    </div>
</section>
<?php
extract($_POST);
if(isset($login))
{
	require_once "dbconnect.php";
	require_once "format.php";
$sql_sel="select * from employee where email='".format_str($email)."' and password='".format_str(md5($password))."'";
$res=mysql_query($sql_sel);
$count=mysql_num_rows($res);
if($count==1)
{
	$row=mysql_fetch_assoc($res);
	session_start();
	$_SESSION['id']=$row['id'];
	$_SESSION['Name']=$row['Name'];
	$_SESSION['Email']=$row['Email'];
	$_SESSION['Mobile']=$row['Mobile'];
	$_SESSION['Gender']=$row['Gender'];
	header('location:myprofile.php');
}
	else
		echo "Invalid Login";
}	
?>
<!-- form creation -->
<section class="p-3">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class=" mt5 card-header blue-gradient-rgba text-center text-white">
                        <img src="public/images/login.jpg" class="img">
                    </div>
                    <div class="card-body bg-light ">
                        <form action="" method="post">                                               
                                    <div class="form-group">
             							<input type="email" class="form-control" placeholder="Enter Email" name="email"></br>
										<input type="password" class="form-control" placeholder="Enter Password" name="password"></br>
										<input type="submit" value="Login" name="login" class="btn btn-success">										
                                     </div>
									</div>                     
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>
<!-- Main Footer -->
<footer class=" blue-gradient-rgba text-white text-center">
    <div class="container">
        <div class="row">
            <div class="col">
			<h6>Developed by Gulendra</h6>
            </div>
        </div>
    </div>
</footer>
<!-- JavaScripts -->
<script src="public/javascripts/jquery-3.3.1.min.js"></script>
<script src="public/javascripts/popper.min.js"></script>
<script src="public/javascripts/bootstrap.js"></script>
<script src="public/javascripts/mdb.js"></script>
</body>
</html>