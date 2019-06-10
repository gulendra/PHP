<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/stylesheets/font-awesome-5.7.1.css">
    <link rel="stylesheet" href="../public/stylesheets/bootstrap.css">
    <link rel="stylesheet" href="../public/stylesheets/mdb.css">
	 <link rel="stylesheet" href="../public/stylesheets/style.css">
	
	
    <title>Inbox</title>
</head>
<body>
<!-- Main Navigation bar -->
<nav class="navbar navbar-expand-md blue-gradient-rgba navbar-dark">
   
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a href="first.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="register.php" class="nav-link">Register</a>
            </li>
            <li class="nav-item">
                <a href="read.php" class="nav-link">Read</a>
            </li>
			 <li class="nav-item active">
                <a href="login.php" class="nav-link">Login</a>
            </li>
        </ul>
    </div>
</nav>
<!-- Main Content Section -->
<?php
session_start();
if(empty($_SESSION['id']))
header('location:login.php');
?>

<style>
.bttn{
   	margin-top: 10px;
   	margin: 10px;
   	font-weight: bold;
	font-size:12px;
   	}
	</style>
<h1 style="color:red"><strong>Welcome to <?php echo ucfirst($_SESSION['Name']);?></strong></h1>
<p><a href="logout.php"><button class="btn btn-danger bttn">Logout</button><br></a></p>
<p>This is Inbox Page</p>


<!-- Main Footer -->
<footer class=" blue-gradient-rgba text-white text-center fixed-bottom">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Copyright &copy; 2019</h3>
                <h6>All Rights Reserved</h6>
                <h6>Developed by Gulendra</h6>
            </div>
        </div>
    </div>
</footer>




<!-- JavaScripts -->
<script src="../public/javascripts/jquery-3.3.1.min.js"></script>
<script src="../public/javascripts/popper.min.js"></script>
<script src="../public/javascripts/bootstrap.js"></script>
<script src="../public/javascripts/mdb.js"></script>
</body>
</html>