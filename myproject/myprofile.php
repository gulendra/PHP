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
	
    <title>MyProfile</title>
</head>
<body>
<!-- Main Navigation bar -->
<nav class="navbar navbar-expand-md blue-gradient-rgba navbar-dark" data-spy="affix">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto"> <a class="navbar-brand " href="#"><h4>PHP Admin <i class="fas fa-hand-point-right"></i></h4></a>  
            <li class="nav-item" active>
                <a href="register.php" class="nav-link">Register</a>
            </li>
			 <li class="nav-item">
                <a href="login.php" class="nav-link">Login</a>
            </li>
        </ul>
    </div>
	 <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mt-0">  
            <li class="nav-item" active>
               
				<a href="1.php?uid=<?php echo $row['id'];?>"><button class="btn btn-success">Change Password</button></a>
				 <li class="nav-item">
                <a href="logout.php"><button class="btn btn-success">Logout</button></a></li>   
           </ul>
    </div>	
</nav>
<!-- Main Content Section -->

<!--  Form -->
<section class="p-3">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header blue-gradient-rgba text-center text-white">
                        <h3>My Profile</h3>
                    </div>
                    <div class="card-body bg-light ">
                        <form action="/" method="post">                                               
<?php
session_start();
if(empty($_SESSION['id']))
header('location:login.php');
?>
<style>
.bttn{
   	margin: 20px;
   	font-weight: bold;
	font-size:12px;
   	}
	</style>
	<h2 style="color:red">Name: <?php echo ($_SESSION['Name']);?></h2>
	<h2 style="color:red">Email: <?php echo ($_SESSION['Email']);?></h2>
	<h2 style="color:red">Mobile: <?php echo ($_SESSION['Mobile']);?></h2>
	<h2 style="color:red">Gender: <?php echo ($_SESSION['Gender']);?></h2>
<a href="update.php"><button class="btn btn-success bttn">Edit</button></a>
<p>User Information</p>     					
                  </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>
<!-- Main Footer -->
<footer class=" blue-gradient-rgba text-white text-center fixed-bottom">
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