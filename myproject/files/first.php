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
	 <style>
	 .img{
	 width:100%;
	 height:90%;
	 }
	 </style>
    <title>FirstWebsite</title>
</head>
<body>


<!-- Main Navigation bar -->
<nav class="navbar navbar-expand-md blue-gradient-rgba navbar-dark" data-spy="affix">
   
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a href="first.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="register.php" class="nav-link">Register</a>
            </li>
            <li class="nav-item">
                <a href="read_tbl.php" class="nav-link">Read</a>
            </li>
			 <li class="nav-item">
                <a href="login.php" class="nav-link">Login</a>
            </li>
			
        </ul>
    </div>
</nav>

<!-- Main Content Section -->
<section class="p-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col text-center">
                <h1 class="text-danger">Welcome to PHP</h1>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, placeat!</p>
                <img src="public/images/php.png" class="img">
            </div>
        </div>
    </div>
</section>

<!-- Main Footer -->
<footer class="mt-5 blue-gradient-rgba text-white text-center">
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